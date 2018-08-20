<?php

namespace GameDatabase\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReviewFormRequest extends FormRequest
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
            'title' => 'required',
            'review' => 'required',
            'review_score' => 'required'
        ];
    }
}
