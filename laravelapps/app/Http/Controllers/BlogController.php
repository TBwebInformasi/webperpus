<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogController extends Controller
{
	public function index(){
		return view('main.mainconten.index1');
	}

	public function index2(){
		return view('main.mainconten.index2_2');
	}

	public function calendar(){
		return view('pages.calendar');
	}
	public function widgets(){
		return view('pages.widgets');
	}

	public function chart(){
		return view('pages.charts.chartjs');
	}
}
