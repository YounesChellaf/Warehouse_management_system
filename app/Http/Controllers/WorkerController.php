<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(Request $request)
    {
        if(!isset($request['order'])){
            if($request['order']!='desc')
            $request['order']='desc';
        
        }

        if(!isset($request['search'])){
            if($request['search']!='%%')
            $request['search']='%%';
        
        }else{
            $request['search']='%'.$request['search'].'%';
        }

        if(!isset($request['filter'])){

            $request['filter'] = [];
        
        }

        if(!isset($request['sort'])){
            if($request['sort']!='id')
            $request['sort']='id';
        
        }

        $rows = \App\Models\Ouvriermaint::where(function($query) use($request){
                      $query->orwhere('worker_id','like',$request['search'])
                      ->orwhere('worker_name','like',$request['search'])
                      ->orwhere('worker_spec','like',$request['search'])
                      ->orwhere('worker_contact','like',$request['search']);
                  })->orderBy($request['sort'],$request['order'])
                    ->skip($request['offset'])
                    ->take($request['limit'])
                    ->get();

        $total = \App\Models\Ouvriermaint::where(function($query) use($request){
                      $query->orwhere('worker_id','like',$request['search'])
                      ->orwhere('worker_name','like',$request['search'])
                      ->orwhere('worker_spec','like',$request['search'])
                      ->orwhere('worker_contact','like',$request['search']);
                  })->count();

        return ['rows'=>$rows,'total'=>$total];
    }

    public function create()
    {
        return view('worker.create');
    }

    public function view()
    {
        return view('worker.view');
    }

    public function store(Request $request)
    {
        try {
            
            \App\Models\Ouvriermaint::create([
                'worker_name' => $request->worker_name,
                'worker_id' => $request->worker_id,
                'worker_spec' => $request->worker_spec,
                'worker_contact' => $request->worker_contact
            ]);

            $messageType = 1;
            $message = "ouvrier crée avec succés !";

        } catch(\Illuminate\Database\QueryException $ex){  
            $messageType = 2;
            $message = "ouvrier échec !";            
        }

        return redirect(url("/worker/view"))->with('messageType',$messageType)->with('message',$message);
    }

    public function destroy($id)
    {
        try {
            
            $ouvrier = \App\Models\Ouvriermaint::find($id);

            $ouvrier->delete();    

            $messageType = 1;
            $message = "Ouvrier ".$ouvrier->worker_name." details supprimé avec succés !";

        } catch(\Illuminate\Database\QueryException $ex){  
            $messageType = 2;
            $message = "erreur!";
        }
        
        return redirect(url("/worker/view"))->with('messageType',$messageType)->with('message',$message);
    }
}
