<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
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

        $rows = \App\Models\Maintenace::where(function($query) use($request){
                      $query->orwhere('id','like',$request['search'])
                      ->orwhere('resident_name','like',$request['search'])
                      ->orwhere('resident_contact','like',$request['search'])
                      ->orwhere('resident_block','like',$request['search'])
                      ->orwhere('resident_room','like',$request['search'])
                      ->orwhere('category','like',$request['search'])
                      ->orwhere('description','like',$request['search'])
                      ->orwhere('worker_name','like',$request['search'])
                      ->orwhere('worker_contact','like',$request['search'])
                      ->orwhere('progress','like',$request['search']);
                  })->orderBy($request['sort'],$request['order'])
                    ->skip($request['offset'])
                    ->take($request['limit'])
                    ->get();

        $total = \App\Models\Maintenace::where(function($query) use($request){
                    $query->orwhere('id','like',$request['search'])
                    ->orwhere('resident_name','like',$request['search'])
                    ->orwhere('resident_contact','like',$request['search'])
                    ->orwhere('resident_block','like',$request['search'])
                    ->orwhere('resident_room','like',$request['search'])
                    ->orwhere('category','like',$request['search'])
                    ->orwhere('description','like',$request['search'])
                    ->orwhere('worker_name','like',$request['search'])
                    ->orwhere('worker_contact','like',$request['search'])
                    ->orwhere('progress','like',$request['search']);
                  })->count();

        return ['rows'=>$rows,'total'=>$total];
    }




    public function store(Request $request)
    {
        try {
            $resident = \App\Models\Residant::find($request->resident_id);
            \App\Models\Maintenace::create([
                'resident_id' => $request->resident_id,
                'description' => $request->description,
                'category' => $request->category,
                'resident_name' => $resident->resident_name,
                'resident_contact' => $resident->resident_contact,
                'resident_block' => $resident->resident_block,
                'resident_room' => $resident->resident_room,
                'progress' => 'en attente'
            ]);
            return response()->json('success');
        } catch(\Illuminate\Database\QueryException $ex){  
            return response()->json('failure');
        }
    }

    public function view()
    {
        return view('maint.view');
    }


    public function edit($id)
    {
        $maintenance = \App\Models\Maintenace::find($id);
        $ouvriers = \App\Models\Ouvriermaint::all();
        return view('maint.edit')
                ->with('ouvriers',$ouvriers)
                ->with('maintenance',$maintenance);
    }

    public function update(Request $request, $id){
        try {
            $maintenance = \App\Models\Maintenace::find($id);
            $ouvrier = \App\Models\Ouvriermaint::find($request->ouvrier_id);
            $maintenance->worker_id = $ouvrier->id;
            $maintenance->worker_name = $ouvrier->worker_name;
            $maintenance->worker_contact = $ouvrier->worker_contact;
            $maintenance->progress = 'en cours';
            $maintenance->save();
            $messageType = 1;
            $message = "Customer ".$customer->customer_name." ouvrier assigné !";
        }
        catch(\Illuminate\Database\QueryException $ex){  
            $messageType = 2;
            $message = "echec !";
        }
        return redirect(url("/maintenance/view"))->with('messageType',$messageType)->with('message',$message);
    }

    public function complete(Request $request, $id)
    {
        $maintenance = \App\Models\Maintenace::find($id);
        $maintenance->progress = 'achevé';
        $maintenance->save();
        return response()->json('success');
    }
}
