<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $resp = $this->post('/post/store-post', [
            'title' => 'store man',
            'body'  => 'hahah'
        ]);

        $this->assertDatabaseHas('posts', [
            'title' => 'store man',
            'body'  => 'hahah'
        ]);

        $post = Post::find(2);
        $this->assertEquals('store man', $post->title);
        $this->assertEquals('hahah', $post->body);
    }
}
