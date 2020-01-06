<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        $categories = Category::all();

        foreach ($categories as $key => $value) {
            for ($i=0; $i <20; $i++) {
                Post::create(
                        [
                            'title'=> "Post $i $key",
                            'url_clean'=>"Post-$i $key",
                            'content'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada imperdiet ligula, eu maximus eros dictum eu. Sed semper ex ligula, vel tempus lacus porta nec. Phasellus nec porta enim, at porta sem. Mauris sed lacinia urna. Vivamus vestibulum varius suscipit. Phasellus imperdiet auctor lobortis. Proin et est turpis. Aliquam posuere ullamcorper mauris sed luctus. Pellentesque rhoncus commodo ante quis rutrum. Mauris ac arcu erat. Mauris nisi ex, auctor in lectus eget, congue bibendum eros. Sed venenatis tellus et lectus aliquam maximus. Vivamus facilisis nunc orci, id rutrum est ullamcorper ac. Praesent fermentum, elit nec consequat vestibulum, erat urna vulputate ante, sed sollicitudin ante orci nec felis. Suspendisse euismod suscipit tortor, sed tincidunt mauris viverra sed. Integer at tincidunt ante. ",
                            'posted'=> 'yes',
                            'category_id'=> $value->id
                        ]

                    );
                }
        }



    }
}
