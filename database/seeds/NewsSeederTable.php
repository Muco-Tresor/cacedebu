<?php

use App\Model\News;
use Faker\Factory;
use Illuminate\Database\Seeder;

class NewsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i < 6; $i++)
        {
            
            News::create([
                
                'title' => $faker->realText(25),
                'image' => 'images/posts/'.$i.'.jpg',
                'body'  => $faker->realText(4000),
                'body_description'  => $faker->realText(255),
            ]);      
        }
    }
}
