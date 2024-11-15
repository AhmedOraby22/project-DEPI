<?php

namespace App\Http\Requests\Dashboard\Country;

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
            'name' => 'required|string|unique:countries,name,' . $this->id . ',id',
        ];
    }
}
