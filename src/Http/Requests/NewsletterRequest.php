<?php

namespace Scaffolder\Newsletter\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Description of NewsletterRequest
 *
 * @author Amoungui
 */
class NewsletterRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|max:50'
        ];
    }
}
