<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class melancholyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "q1" => 'required',
            "q2" => 'required',
            "q3" => 'required',
            "q4" => 'required',
            "q5" => 'required',
            "q6" => 'required',
            "q7" => 'required',
            "q8" => 'required',
            "q9" => 'required',
            "q10" => 'required',
            "q11" => 'required',
            "q12" => 'required',
            "q13" => 'required',
            "q14" => 'required',
            "q15" => 'required',
            "q16" => 'required',
            "q17" => 'required',
            "q18" => 'required',
            "q19" => 'required',
            "q20" => 'required',
        ];
    }
}