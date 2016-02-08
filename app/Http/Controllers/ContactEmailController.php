<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request){


        //dd(Input::all());
        // $user = User::findOrFail($id);

        //$this->sendemail();
        //TODO:SEND EMAIL

        //FLASH NOTIFICACION

                $request->session()->flash(
                  'notification',
                  'All ok'
                );
        //REDIRECT

        //return redirect()->route('welcome');
        //return view('welcome');
        return view('sweetalerts');
    }

    public function sendEmail(){
        $this->dispatch(new Sendsubscriptionemail());
    }
}