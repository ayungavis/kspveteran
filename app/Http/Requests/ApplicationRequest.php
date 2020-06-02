<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'loan_amount' => 'required|numeric',
            'loan_application' => 'required|string',
            'loan_requirement' => 'required|string',
            'loan_item' => 'required|string',
            'loan_period' => 'required|numeric',
            'application_status_id' => 'required|numeric|exists:App\ApplicationStatus,id',
            'approved_by' => 'nullable|exists:App\User,id',
            'approved_at' => 'nullable',
            'approved_invitation_date' => 'nullable',
            'rejected_by' => 'nullable|exists:App\User,id',
            'rejected_at' => 'nullable',
            'rejected_reason' => 'nullable|string'
        ];
    }

    public function updateRules()
    {
        return [
            'customer_id' => 'numeric|exists:App\Customer,id',
            'loan_amount' => 'numeric',
            'loan_application' => 'string',
            'loan_requirement' => 'string',
            'loan_item' => 'string',
            'loan_period' => 'numeric',
            'application_status_id' => 'numeric|exists:App\ApplicationStatusm,id',
            'approved_by' => 'nullable|exists:App\User,id',
            'approved_at' => 'nullable',
            'approved_invitation_date' => 'nullable',
            'rejected_by' => 'nullable|exists:App\User,id',
            'rejected_at' => 'nullable',
            'rejected_reason' => 'nullable|string'
        ];
    }
}