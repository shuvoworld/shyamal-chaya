<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'mother_name' => 'nullable|nullable|string|max:255',
            'father_name' => 'nullable|nullable|string|max:255',
            'permanent_address' => 'nullable|nullable|string',
            'present_address' => 'nullable|nullable|string',
            'mobile' => 'nullable|nullable|string|max:20',
            'phone' => 'nullable|nullable|string|max:20',
            'national_id' => 'nullable|nullable|integer',
            'occupation' => 'nullable|nullable|integer|exists:occupations,id',
            'maritalStatus' => 'required|integer|exists:marital_statuses,id',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
