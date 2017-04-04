<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Karting_information;
use App\Karting_repair;
use App\Karting;

class HomeController extends Controller
{
	public function getHome()
	{

	$kartings = Karting::with('karting_informations')->get()->toArray();
	return view('home',['kartings'=>$kartings]);
	
	}



}