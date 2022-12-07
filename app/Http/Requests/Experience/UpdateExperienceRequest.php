<?php

namespace App\Http\Requests\Experience;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdateExperienceRequest extends FormRequest
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
            'job_title' => 'required|max:300',
            'start_date' => 'required|date_format:m/d/Y',
            'end_date' => 'sometimes|date_format:m/d/Y|after:start_date',
            'is_present' => 'sometimes|boolean',
            'description' => 'required|max:1000',
        ];
    }
}
