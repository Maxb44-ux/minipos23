<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
{
    public function register(Request $request){
        try{
            $user = new User([
                'name' => $request->form_user_name,
                'email' => $request->form_user_email,
                'password' => $request->form_password,
            ]);
            $user->save();

            $success = true;
            $message = 'ບັນທຶກສຳເລັດ!';
        } catch (\Illuminate\Database\QueryException $ex) {

        }
    }
};

abstract class Controller
{
    //
}
