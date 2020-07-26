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
       $title = array();
       $content = [];

        foreach (config("app.locales") as $name)
        {
            $title['title'][$name] = ['required'];
            $content['content'][$name] = ['required'];
        }
        $return = array_merge( $title, $content );
        return $return;
    }
}
