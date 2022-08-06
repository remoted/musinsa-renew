<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkStoreGoodsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user != null && $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '*.customerId' => ['required', 'integer'],
            '*.name' => ['required', 'string'],
            '*.comment' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
            '*.registedDate' => ['required', 'date_format:Y-m-d H:i:s'],
            '*.updateDate' => ['date_format:Y-m-d H:i:s', 'nullable'],
        ];
    }

    protected function prepareForValidation() {
        $data = [];

        foreach ($this->toArray() as $obj) {
            $obj['customer_id'] = $obj['customerId'] ?? null;
            $obj['registed_date'] = $obj['registedDate'] ?? null;
            $obj['update_date'] = $obj['updateDate'] ?? null;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
