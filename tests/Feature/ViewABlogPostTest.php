<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class ViewABlogPostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanViewABlogPost()
    {
        $post = Post::create([
            'title' => 'A simple title',
            'body'  => 'A simple title'
        ]);

        $resp = $this->get("/post/{$post->id}");
        $resp->assertStatus(200);
        $resp->assertSee($post->title);
        $resp->assertSee($post->body);
        $resp->assertSee($post->created_at->toFormattedDateString());
    }

    /**
     * @group post-not-found
     */
    public function testViewsA404PageWhenPostIsNotFound()
    {
        $resp = $this->get('post/INVALID_ID');
        $resp->assertStatus(404);
        $resp->assertSee("The page you are looking for could not be found");
    }
}
