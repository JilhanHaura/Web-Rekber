<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'userId'=>'required',
            'nik'=>'required',
            'name'=>'required',
            'gender'=>'required|in:Female,Male',
            'birthPlace'=>'required',
            'dateOfBirth'=>'required',
            'email'=>'required',
            'phoneNumber'=>'required',
            'province'=>'required',
            'city'=>'required',
            'village'=>'required',
            'detail'=>'required',
            'dueDate'=>'required',
            'status'=>'required'
        ];
    }
}