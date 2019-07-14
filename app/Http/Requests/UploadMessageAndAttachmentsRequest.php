<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadMessageAndAttachmentsRequest extends FormRequest
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
            'subject' => 'required',
            'body' => 'required',
        ];

        $attachmentsCount = count($this->file('attachments'));
        foreach(range(0, $attachmentsCount) as $index) {
            $rules['attachments.' . $index] = 'file|mimes:doc,jpeg,bmp,png,pdf,docx,txt|max:5000';
        }

        return $rules;
    }
}
