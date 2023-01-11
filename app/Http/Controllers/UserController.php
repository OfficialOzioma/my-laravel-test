<?php

namespace App\Http\Controllers;

use App\Classes\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $userData;

    public function __construct()
    {
        $this->userData = new Validation();
    }

    public function index(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [

                'first_name.value' =>  $this->userData->validate($request->first_name['rules']),
                'last_name.value' =>  $this->userData->validate($request->last_name['rules']),
                'email.value' =>  $this->userData->validate($request->email['rules']),
                'phone.value' =>  $this->userData->validate($request->phone['rules']),
            ]);

            if ($validator->fails()) {
                return $validator->errors()->toArray();
            } else {
                return [
                    "status" => true
                ];
            }
        } catch (\Throwable $e) {
            return [
                "status" => "error",
                "message" => $e->getMessage()
            ];
        }
    }
}