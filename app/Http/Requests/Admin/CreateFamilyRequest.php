<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateFamilyRequest extends FormRequest
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
            'full_name'=>'required',
            'nik'=>'required|unique:families',
            'gender'=>'required',
            'birth_place'=>'required',
            'birth_date'=>'required',
            'religion'=>'required',            
            'education'=>'required',
            'job'=>'required'
        ];
    }
}
