<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Proengsoft\JsValidation\Facades\JsValidatorFacade as JsValidator;

class CustomerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'diet_id' => 'required|unique:customers,diet_id',
            'last_name' => 'required',
            'email' =>  'required|email|unique:customers,email',
            'phone' =>   'required|regex:/(5)[0-9]{7}/',
            'address' => 'required',
             'lo' =>  'required',
             'la' =>  'required'
        ];
    }
}