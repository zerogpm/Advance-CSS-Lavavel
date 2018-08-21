<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @group formatted-date
     *
     * @return void
     */
    public function testCanGetCreatedAtFormattedDate()
    {
        $post = Post::create([
            'title' => 'A simple title',
            'body'  => 'A simple title'
        ]);

        $formattedDate = $post->createdAt();
        $this->assertEquals($post->created_at->toFormattedDateString(), $formattedDate);
    }
}
