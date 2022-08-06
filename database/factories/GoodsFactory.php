<?php

namespace Database\Factories;


use App\Models\Customer;
use App\Models\Goods;

use Illuminate\Database\Eloquent\Factories\Factory;

class GoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    protected $model = Goods:: class;

    public function definition()
    {
        $comment = $this->faker->randomElement(['B', 'P', 'V']);
      
        return [
            'name' => $this->faker->bothify('?###??##'),
            'customer_id' => Customer::factory(),
            'comment' => $comment,
            'registed_date' => $this->faker->dateTImeThisDecade(),
            'update_date' => $this->faker->dateTimeThisDecade()
        ];
    }
}
