<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phelium\Component\reCAPTCHA;
use App\Person;

class PersonController extends Controller
{
	public function confirm(Request $request){
		$this->validate($request,['name'=>'required']);
		$reCAPTCHA = new reCAPTCHA('6LfLHRwUAAAAAGKC1EAbFEgUXNXcEoOBvFQlo8wb', '6LfLHRwUAAAAAMYB7dGFJjnhoQtTzyOGrDto3rc0');
    	if($reCAPTCHA->isValid($request->input('g-recaptcha-response'))){
    		$name = $request->input('name');
    		$response = $request->input('response');
    		$person = new Person();
    		$person->name = $name;
    		$person->response = $response;
    		$person->save();
    		return view('confirmed',compact('name'));
    	} else {
    		return redirect('/');
    	}
    }
    public function confirms(){
    	$yes = Person::where('response','=','resp_yes')->get();
    	$maybe = Person::where('response','=','resp_maybe')->get();
    	$no = Person::where('response','=','resp_no')->get();
    	return view('confirms',compact('yes','maybe','no'));
    }
}
