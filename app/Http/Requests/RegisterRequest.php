<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'name' => 'required|users,name',
            'offece' => 'required|unique:users,offece',
            'contry' => 'required|users,contry',
            'city' => 'required|users,city',
            'phone' => 'required|unique:users,phone',
            'information' => 'required|users,information',
            'usd' => 'required|users,usd',
            'eruo' => 'required|users,eruo',
            'lira' => 'required|users,lira',
        ];
    }
}