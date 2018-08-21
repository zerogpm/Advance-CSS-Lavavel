<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewAllBlogPostsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testViewAllBlogPosts()
    {
        $post1 = Post::create([
            'title' => 'A simple title',
            'body'  => 'A simple title'
        ]);

        $post2 = Post::create([
            'title' => 'A simple two',
            'body'  => 'A simple two'
        ]);

        $resp = $this->get("/post/all");
        $resp->assertStatus(200);
        $resp->assertSee($post1->title);
        $resp->assertSee($post2->title);
        $resp->assertSee(str_limit($post1->body));
        $resp->assertSee(str_limit($post2->body));
    }
}
