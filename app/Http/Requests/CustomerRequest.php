<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return $this->createRules();
        } else if ($this->isMethod('put')) {
            return $this->updateRules();
        }
    }

    public function createRules()
    {
        return [
            'id_card' => 'required|numeric|unique:App\Customer,id_card',
            'name' => 'required|string',
            'couple_name' => 'required|string',
            'birth_place' => 'required|string',
            'birth_date' => 'required',
            'whatsapp' => 'required',
            'job' => 'required|string',
            'address' => 'required|string'
        ];
    }

    public function updateRules()
    {
        return [
            'name' => 'required|string',
            'couple_name' => 'required|string',
            'birth_place' => 'required|string',
            'birth_date' => 'required',
            'whatsapp' => 'required',
            'job' => 'required|string',
            'address' => 'required|string'
        ];
    }
}