<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavingRequest extends FormRequest
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
            'customer_id' => 'required|numeric|exists:App\Customer,id',
            'amount' => 'required|numeric'
        ];
    }

    public function updateRules()
    {
        return [
            'customer_id' => 'required|numeric|exists:App\Customer,id',
            'amount' => 'required|numeric'
        ];
    }
}