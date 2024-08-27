<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRefundAdminRequest extends FormRequest
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
            'orderId'=>'required',
            'customerName'=>'required',
            'sellerName'=>'required',
            'total'=>'required',
            'dueDate'=>'required',
            'status'=>'required',
            'reasonComplaint'=>'required'
        ];
    }
}