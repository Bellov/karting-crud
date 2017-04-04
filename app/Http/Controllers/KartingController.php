<?php

namespace App\Http\Controllers;

use App\Karting_information;
use App\Karting_repairs;
use Illuminate\Http\Request;
use App\Kartings;


use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class KartingController extends Controller
{

    public function getHome()
    {
        $kartings = Kartings::with('karting_information')->get()->toArray();
        return view('home', ['kartings' => $kartings]);
    }
// get repair from DB




    public function create()
    {
        return view("karting.add-karting");
    }


    //add

    public function addKarting(Request $request)
    {
        // dd('porcoddio');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        //dump($request->all());
        if ($validator->fails()) {
            return redirect('/karting/add-karting')
                ->with($validator)
                ->withInput();
        }

        $karting = new Kartings();
        $karting->name = $request->input('name');
        $karting_info = new Karting_information();
        $karting_info->karting_number = $request->input('karting_number');
        $karting_info->price = $request->input('price');
        $karting_info->km = $request->input('km');
        $karting_info->karting_hours=$request->input('karting_hours');
        $karting_info->created_at =  $request->input('created_at');
        //dump($karting);
       // dump($karting_info);
        $karting->save();
       // $karting_info->save();
         $karting->karting_information()->save($karting_info);
        //dump($saved);
        return redirect('/home');
    }





  /*  public function test()
    {

        $myCar = Kartings::with('karting_information')->get()->toArray();

        dd($myCar);
    }

    public function testTwo()
    {
        $myRepair = Kartings::with('karting_repairs')->get()->toArray();
        dd($myRepair);

    }
  */

    public function deleteKarting(Request $request, $id)
    {

       // dump($request->all());
       // dump($id);
       // return;
        Kartings::where('id', $id)->delete();
        return redirect('/home');
    }



    public function deleteKartingInfo ( Request $request,$id, $number){
        Karting_information::where('kartings_id', $id)->where('karting_number', $number)->delete();
        return redirect('/home');
    }
  /*  public function repair()
    {
        //$repairs = Karting_repairs->('kartings_id','desc')->get();
$kartId = 0 ;
        $repairs = Karting_repairs::all();
        return view('karting.add-repair' , ['repairs'=> $repairs,"kartId"=> $kartId]);


    }*/

    public function kartingRepair($id)
    {

        $repairs = Karting_repairs::where('kartings_id',$id)->orderBy('kartings_id','desc')->get();
        //$repairs = Karting_repairs->where($id)->get();

        return view('karting.add-repair' , ['repairs'=> $repairs,"kartId"=> $id]);

    }


    public function addRepair(Request $request)
    {

       // dump($request->all());
     /*   $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        //dump($request->all());
        if ($validator->fails()) {
            return redirect('/karting/add-karting')
                ->with($validator)
                ->withInput();
        }*/ // validator...
        $repair = new Karting_repairs();
        $repair->kartings_id = $request->input('kartings_id');
        $repair->repairs_description = $request->input('repairs_description');
        $repair->repairs_price = $request->input('repairs_price');
        $repair->save();
        return redirect('kartingRepair/'.$repair->kartings_id)->with(["kartId"=>  $repair->kartings_id ]);
    }








}
