<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        dd($this->request['first_name']);

        return [
            // 'first_name' => validate($this->request['first_name']['rules'])
            //  'first_name' => $this->request['first_name']['rules'],
            //     'last_name' => $request->last_name['rules'],
            //     'email' => $request->email['rules'],
            //     'phone' => $request->phone['rules'],
        ];
    }
}