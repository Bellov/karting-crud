<?php

namespace App\Http\Controllers;

use App\Karting_information;
use App\Karting_repair;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Karting;
use Illuminate\Support\Facades\Validator;

class KartingRepairController extends Controller
{
    public function kartingRepair($id)
	{
		$repair = Karting_repair::where('karting_id', $id)/*->ordetBy('karting_id', 'desc')*/->get();
		return view('administration.add-repair',['repair'=>$repair,'kartId'=>$id]);
	}





	public function addRepair(Request $request)
	{
		$repair = new Karting_repair();
		$repair->karting_id = $request->input('karting_id');
		$repair->repair_description = $request->input('repair_description');
		$repair->repair_price = $request->input('repair_price');
		$repair->save();
		return redirect('kartingRepair/'.$repair->karting_id)->with(["kartId"=>  $repair->karting_id ]);


	}
}
