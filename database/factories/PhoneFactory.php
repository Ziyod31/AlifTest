<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->unique()->numerify('9# ###-##-##'),
            'contact_id' => random_int(1, 20),
        ];
    }
}