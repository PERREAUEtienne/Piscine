<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitreController extends Controller
{
    


    public function postForm(Prixrequest $request)
	{
		$email = new titre;
		$email->email = $request->input('email');
		$email->save();
		
		return view('test2');
	}//
}
