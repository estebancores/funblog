 <?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(200),
        'file' => $faker->imageUrl($width = 800 , $heitgh = 500 ),
        'status' => $faker->randomElement(['DRAFT','PUBLISHED'])

    ];
});
