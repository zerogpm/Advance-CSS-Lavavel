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
    public function testCreatePost()
    {
        $resp = $this->post('/post/store-post', [
            'title' => 'store man',
            'body'  => 'hahah'
        ]);

        $resp->assertStatus(200);

        $this->assertDatabaseHas('posts', [
            'title' => 'store man',
            'body'  => 'hahah'
        ]);

        $post = Post::find(2);
        $this->assertEquals('store man', $post->title);
        $this->assertEquals('hahah', $post->body);
    }

    /**
     * @group validation
     */
    public function testTitleIsRequiredToCreatePost()
    {
        $resp = $this->post('/post/store-post', [
            'title' => null,
            'body'  => 'we need body'
        ]);

        $resp->assertSessionHasErrors('title');
    }
}
