<?php

namespace App\Http\Requests;

use App\Job;
use Illuminate\Foundation\Http\FormRequest;

class JobUpdateRequest extends FormRequest
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
            'title' => 'sometimes|required',
            'customer_name' => 'sometimes|required',
            'inquiry_number' => 'nullable',
            'type' => 'sometimes|in:' . implode(',', Job::JOB_TYPES),
            'amount' => 'nullable|numeric',
            'quantity' => 'nullable|numeric',
            'material' => 'nullable',
            'weight' => 'nullable',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
        ];
    }
}
