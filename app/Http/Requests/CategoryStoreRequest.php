<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,archived',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'description.max' => 'A description must be less than 255 characters',
            'image.required' => 'An image is required',
            'image.image' => 'An image must be an image',
            'image.mimes' => 'An image must be a file of type: jpeg, png, jpg, gif, svg',
            'status.required' => 'A status is required',
            'status.enum' => 'A status must be an enum',
            'status.in' => 'A status must be in: active, archived',
        ];
    }
}
