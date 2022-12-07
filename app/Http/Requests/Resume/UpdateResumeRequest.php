<?php

namespace App\Http\Requests\Resume;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // auth not implemented
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:300',
            'email' => 'required|email|max:300',
            'location' => 'required|max:300',
            'job_title' => 'required|max:300',
            'portfolio_url' => 'sometimes|max:300',
            'phone' => 'required|max:300',
            'about_me' => 'sometimes|max:1000',
        ];
    }
}
