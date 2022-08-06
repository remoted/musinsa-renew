<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class GoodsFilter extends ApiFilter {

  protected $safeParms = [
      'customerId' => ['eq'],
      'name' => ['eq', 'ne'],
      'comment' => ['eq', 'ne'],
      'registedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
      'updateDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
  ];

  protected $columnMap = [
      'customerId' => 'customer_id',
      'registedDate' => 'registed_date',
      'updateDate' => 'update_date',
  ];

  protected $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '>=',
      'ne' => '!='
  ];
}