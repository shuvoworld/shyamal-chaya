<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlotAllocationRequest extends FormRequest
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
            'road' => 'nullable|integer|exists:roads,id',
            'plot_no' => 'nullable',
            'plot_no_rs' => 'nullable|integer',
            'plot_no_rs_two' => 'nullable|integer',
            'mouza' => 'nullable||integer|exists:mouzas,id',
            'khatian_no' => 'nullable|string|max:50',
            'khatian_no_two' => 'nullable|string|max:50',
            'quantity_of_land_in_katha' => 'nullable|numeric',
            'total_land_in_katha' => 'nullable|numeric',
            'member' => 'nullable|integer|exists:members,id',
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
