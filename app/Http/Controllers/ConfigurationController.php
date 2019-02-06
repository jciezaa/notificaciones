<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Configuration;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ConfigurationController extends Controller
{
    

	public function edit(){

		$confsender = Configuration::where('campo','REMITENTE')->first();


		$confbbc = Configuration::where('campo','BBC')->get();

		//dd($confsender);

		return view('emails.configuraciones')->with(compact('confsender','confbbc'));

}


}
