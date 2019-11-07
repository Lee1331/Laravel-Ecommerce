<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackRequest extends FormRequest
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
        //specify inital validation rules
        $rules = [
            'tags' => 'nullable'
        ];

        //depending on the request type, add different validation to the email and name fields
        switch($this->method()){
            case 'POST':
                $rules['name'] = 'required|unique:packs| min:3';
                $rules['description'] = 'required|min:30';
                $rules['cover_image'] = 'required|file|image|max:2500';
            case 'PUT':
                if($this->route('pack')){
                    $rules['name'] = 'required|min:3|unique:packs,name,'. $this->route('pack')->id;
                    $rules['cover_image'] = 'required|min:3|unique:packs,cover_image,'. $this->route('pack')->id;
                }
                else{
                    $rules['name'] = 'required|unique:packs| min:3';
                    $rules['description'] = 'required|min:30';
                    $rules['cover_image'] = 'required|max:2500';
                }
            break;
        }
        return $rules;
    }
}
