<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Configuration;
use App\Email;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ConfigurationController extends Controller
{
    

	public function edit(){

		$confsender = Configuration::where('campo','REMITENTE')->first();
		$confbbc = Configuration::where('campo','BBC')->get();
		$confemail = Email::get()->first();

		return view('emails.configuraciones')->with(compact('confsender','confbbc','confemail'));

}


}
