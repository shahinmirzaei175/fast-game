<?php
namespace Modules\Game\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WinnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Game\Entities\Winner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mobile'         => $this->faker->phoneNumber(),
            'code'           => rand(1000,1010),
        ];
    }
}

