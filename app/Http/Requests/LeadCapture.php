<?php

namespace App\Http\Requests;

//use App\Traits\CaptchaTrait;
use Illuminate\Foundation\Http\FormRequest;

class LeadCapture extends FormRequest
{
    //use CaptchaTrait;

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
            'firstname'                 => 'required|max:255|string',
            'lastname'                  => 'required|max:255|string',
            'email'                     => 'required|email',
            'phone'                     => 'required|max:255|string|nullable',
            'placeoflife'               => 'required|max:255|string',
            'dealer'                    => 'required|max:255|string',
            'checkbox'                  => 'accepted',
            'information_processing'    => 'required|string',
            'g-recaptcha-response'      => 'recaptcha',
        ];
    }
}
