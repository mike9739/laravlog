<?php

use App\Post;
use App\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();
        $post = Post::all();

        foreach ($post as $key => $p) {
                PostImage::create(
                        [
                            'image'=> "1578192784.jpeg",
                            'post_id'=>$p->id,
                        ]

                    );

        }

    }
}
