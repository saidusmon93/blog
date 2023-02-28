<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::create([
            'title' => 'What is does come from ? ',
            'slug' => 'what-is-does-come-from',
            'description' => 'Contrary to popular belief, 
            Lorem Ipsum is not simply random text. It 
            has roots in a piece of classical Latin
            literature from 45 BC, making it over
            2000 years old.',
            'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it 
            over 2000 years old. Richard McClintock, a Latin professor at 
            Hampden-Sydney College in Virginia, looked up one of the
            more obscure Latin words, consectetur, from a Lorem 
            Ipsum passage, and going through the cites of the
            word in classical literature, discovered the 
            undoubtable source. Lorem Ipsum comes from
            sections 1.10.32 and 1.10.33 of "de 
            Finibus Bonorum et Malorum" (The 
            Extremes of Good and Evil) by
            Cicero, written in 45 BC.
            This book is a treatise.',
            'category_id' => 1,
        ]);
        $post->tags()->sync(1);
    }
}
