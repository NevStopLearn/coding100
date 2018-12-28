<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'title'     => 'required|unique:posts|min:6',
            'body'      => 'required|min:30'
        ];
    }

    public function messages()
    {
        return [
            'title.required'    => '标题不能为空！',
            'title.unique'      => '标题已被占用！',
            'title.min'         => '标题不能少于6位字符！',
            'body.required'     => '文章内容不能为空！',
            'body.min'          => '文章内容不能少于30位字符！'
        ];
    }
}
