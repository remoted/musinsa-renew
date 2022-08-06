<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGoodsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      $user = $this->user();

      return $user != null && $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      $method = $this->method();

      if ($method == 'PUT') {
          return [
              'name' => ['required', 'nullable'],
              'comment' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
              'customer_id' => ['required', 'nullable'],
              'registed_date' => ['date_format:Y-m-d H:i:s', 'nullable'],
              'update_date' => ['date_format:Y-m-d H:i:s', 'nullable']
          ];
      } else {
          return [
              'name' => ['sometimes', 'required', 'nullable'],
              'comment' => ['sometimes', 'required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
              'customer_id' => ['sometimes', 'required', 'nullable'],
              'registed_date' => ['sometimes', 'date_format:Y-m-d H:i:s', 'nullable'],
              'update_date' => ['sometimes', 'date_format:Y-m-d H:i:s', 'nullable']
          ]; 
      }
    }

    protected function prepareForValidation() {
        if ($this->name) {
            $this->merge([
                'name' => $this->name
            ]);

        }
    }
}
