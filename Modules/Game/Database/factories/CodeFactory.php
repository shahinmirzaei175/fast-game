<?php
namespace Modules\Game\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Game\Entities\Code::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'           => rand(1000,1010),
            'count'          => rand(100,1000)
        ];
    }
}

