<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' => ['required', 'string'],
            'type_id' => ['required'],
            'action' => ['required', 'string'],
            'session_id' => ['required'],
            'message' => ['required']
        ];
    }

    public function messages(){
        return [
            'type.required' => 'The field type is mandatory',
            'type_id.required' => 'The field type_id is mandatory',
            'action.required' => 'The field action is mandatory',
            'session_id.required' => 'The field session_id is mandatory' 
        ];
    }
}
