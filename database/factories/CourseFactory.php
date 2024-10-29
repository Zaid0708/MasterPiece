<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => rand(1, 8), // Assuming you have 5 categories
            'instructor_id' => rand(2, 3), // Assuming you have 10 instructors
            'price' => $this->faker->randomFloat(2, 0, 200), // Random price between 0 and 200
            'created_at' => now(),
            'updated_at' => now(),
            'thumbnail_img' =>'thumbnails/uiux.jpg',
          'duration' => $this->faker->numberBetween(60, 900), // This will generate a duration between 1 hour (60 minutes) and 15 hours (900 minutes)

            'course_intro_video' => 'videos/1728641279_video_recorded-video (5) (online-video-cutter.com) (1).mp4',
            'outcomes' => $this->faker->text,
            'materials' => $this->faker->text,
           'certificate' => 'certificates/1728641279_certificate.jpg',

            'discount' => rand(0, 50), // Random discount between 0% and 50%
            'rating' => $this->faker->randomFloat(1, 3, 5), // Random rating between 3 and 5
        ];
    }
}
