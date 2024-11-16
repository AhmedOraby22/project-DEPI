<?php

namespace App\Http\Requests\Dashboard\Patient;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the User is authorized to make this request.
     *
     * return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->id . ',id',
            'phone' => 'required|numeric|unique:users,phone,' . $this->id . ',id',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
        ];
    }
}
