<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Store::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
     // $factory->define(\App\Models\Store::class, function(Faker $faker){
     //   return [
     //     'name' => $faker->name,
     //     'description' => $faker->setence,
     //     'phone' => $faker->phonenumber,
     //     'nmobile_phone' => $faker->phonenumber,
     //     'slug' => $faker->slug
     //   ];
     //   }
     // )

    public function definition()
    {
      return [
        'name' => $this->faker->name,
        'description' => $this->faker->sentence,
        'phone' => $this->faker->phonenumber,
        'mobile_phone' => $this->faker->phonenumber,
        'slug' => $this->faker->slug

      ];
    }
}
