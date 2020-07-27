<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidantController extends Controller
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

        $rows = \App\Models\Residant::where(function($query) use($request){
                      $query->orwhere('id','like',$request['search'])
                      ->orwhere('resident_name','like',$request['search'])
                      ->orwhere('resident_block','like',$request['search'])
                      ->orwhere('resident_room','like',$request['search'])
                      ->orwhere('resident_contact','like',$request['search']);
                  })->orderBy($request['sort'],$request['order'])
                    ->skip($request['offset'])
                    ->take($request['limit'])
                    ->get();

        $total = \App\Models\Residant::where(function($query) use($request){
                      $query->orwhere('id','like',$request['search'])
                      ->orwhere('resident_name','like',$request['search'])
                      ->orwhere('resident_block','like',$request['search'])
                      ->orwhere('resident_room','like',$request['search'])
                      ->orwhere('resident_contact','like',$request['search']);
                  })->count();

        return ['rows'=>$rows,'total'=>$total];
    }

    public function create()
    {
        return view('residant.create');
    }

    public function view()
    {
        return view('residant.view');
    }

    public function store(Request $request)
    {
        try {
            
            \App\Models\Residant::create([
                'resident_name' => $request->resident_name,
                'resident_block' => $request->residant_block,
                'resident_room' => $request->residant_room,
                'resident_contact' => $request->residant_contact
            ]);

            $messageType = 1;
            $message = "résidant crée avec succés !";

        } catch(\Illuminate\Database\QueryException $ex){  
            $messageType = 2;
            $message = "résidant échec !";            
        }

        return redirect(url("/residant/view"))->with('messageType',$messageType)->with('message',$message);
    }

    public function destroy($id)
    {
        try {
            
            $residant = \App\Models\Residant::find($id);

            $residant->delete();    

            $messageType = 1;
            $message = "Residant ".$residant->resident_name." details supprimé avec succés !";

        } catch(\Illuminate\Database\QueryException $ex){  
            $messageType = 2;
            $message = "erreur!";
        }
        
        return redirect(url("/residant/view"))->with('messageType',$messageType)->with('message',$message);
    }
}
