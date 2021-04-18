<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'code' => 'required | unique:products,code',
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required | numeric',
        ];

        if($this->route()->named('products.update')) {
            $rules['code'] .= ', ' . $this->route()->parameter('product')->id;
        }

        return $rules;
    }
}