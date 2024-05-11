
<?php
use App\Models\NewUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewUserFactory extends Factory
{
    protected $model = NewUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 60),
            'branch' => $this->faker->randomElement(['CSE', 'ME', 'CE']),
            'title' => $this->faker->jobTitle,
            'isDelete' => false,
        ];
    }
}
