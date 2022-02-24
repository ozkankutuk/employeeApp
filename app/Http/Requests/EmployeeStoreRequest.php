<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'emp_no'     => 'required|max:4',
            'birth_date' => 'required|date',
            'first_name' => 'required',
            'last_name'  => 'required',
            'gender'     => 'required|in(["M","F"])',
        ];
    }
}
