<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone_number' => 'required',
            'gender' => 'required|in:0,1',
            'national_id_number' => 'required|numeric',
            'package' => 'required|in:package1,package2,package3',
            'store_type' => 'required:|in:Mobile_car_wash,gas_water_delivery,home_maintenance,mobile_barbe',
            'image' => 'required|mimes:png,pdf|max:2048',
            'bank_name' => 'required|string',
            'iban' => 'required',
        ];
    }
}
