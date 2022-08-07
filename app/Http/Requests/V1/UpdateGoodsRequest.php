<?php

namespace App\Http\Requests\V1;

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
            'name' => ['required'],
            'comment' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
            'customerId' => ['required'],
            'registedDate' => ['required', 'date_format:Y-m-d H:i:s'],
            'updateDate' => ['required', 'date_format:Y-m-d H:i:s']
          ];
      } else {
          return [
            'name' => ['sometimes', 'required'],
            'comment' => ['sometimes', 'required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
            'customerId' => ['sometimes', 'required'],
            'registedDate' => ['sometimes', 'required', 'date_format:Y-m-d H:i:s'],
            'updateDate' => ['sometimes', 'required', 'date_format:Y-m-d H:i:s']
          ]; 
      }
    }

    protected function prepareForValidation() {
      if($this->customerId){
        $this->merge([
          'customer_id' => $this->customerId
        ]);
      }

      if($this->updateDate){
        $this->merge([
          'update_date' => $this->updateDate
        ]);
      }

      if ($this->registedDate) {
          $this->merge([
              'registed_date' => $this->registedDate
          ]);
      }
    }
}
