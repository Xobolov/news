<?php

namespace App\Http\Requests\Panel\Post;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
            'azlocale' => 'required|max:255',
            'enlocale' => 'required|max:255',
            'aztitle' => 'required|max:255',
            'entitle' => 'required|max:255',
            'azcontent' => 'required|max:255',
            'encontent' => 'required|max:255',
        ];
    }
}
