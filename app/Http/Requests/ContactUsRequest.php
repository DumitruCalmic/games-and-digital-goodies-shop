<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUsRequest extends FormRequest
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
                'name' => [
                    'required',
                    'string',
                    'min:3',
                    'max:256'
                          ],
                'email' => 'required|email',
                'number' => 'required|integer',
                'subject' => 'required|string',
                'department' => [
                    'nullable',
                    'string',
                     Rule::in(['technical','selling','help',]),
                                ],
                'textarea' => [
                    'string',
                    'min:10',
                    'max:1000'
                              ],
        ];
    }
}
