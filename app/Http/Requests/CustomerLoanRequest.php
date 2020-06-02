<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerLoanRequest extends FormRequest
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
            'application_id' => 'required|numeric|exists:App\Application,id',
            'total_amount' => 'required|numeric',
            'each_amount' => 'required|numeric',
            'period' => 'required|numeric',
            'is_active' => 'required'
        ];
    }

    public function updateRules()
    {
        return [
            'customer_id' => 'required|numeric|exists:App\Customer,id',
            'application_id' => 'required|numeric|exists:App\Application,id',
            'total_amount' => 'required|numeric',
            'each_amount' => 'required|numeric',
            'period' => 'required|numeric',
            'is_active' => 'required'
        ];
    }
}