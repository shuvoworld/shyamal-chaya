<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlotRequest extends FormRequest
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
            'road_no' => 'required|integer|exists:roads,id',
            'plot_no' => 'required|integer',
            'mouza_no' => 'required|integer|exists:mouzas,id',
            'plot_no_rs' => 'required|integer',
            'khatian_no' => 'required|string|max:50',
            'quantityOfLandKatha' => 'required|numeric',
            'totalLandKatha' => 'required|numeric',
            'member' => 'nullable|nullable|integer|exists:members,id',
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
