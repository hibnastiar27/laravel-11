<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

  public $data = [];

  public function index()
  {
    $title = 'Blog';
    $slug = 'blog';
    $posts = [
      [
        'id' => 1,
        'slug' => 'reservable-models-in-laravel',
        'title' => 'Reservable models in Laravel',
        'created_at' => '2024-12-28',
        'content' => "As I'm in the process of rebuilding my personal site, I'm orchestrating a lot of 3rd party services. Pulling videos down from YouTube. Transcribing audio. Asking OpenAI for summaries of the transcripts, etc. I rely on Eloquent's scopes a lot to figure out what needs to be done. For example, here are several scopes from my Video model.",
      ],
      [
        'id' => 2,
        'slug' => 'make-5x-faster-outbound-requests-in-laravel',
        'title' => 'Make 5x faster outbound requests in Laravel',
        'created_at' => '2024-12-28',
        'content' => "Laravel Octane is well-known for speeding up your app by booting it once and serving multiple requests from that same booted application. We're not here to talk about that. Instead, I've got a weird little trick using Laravel Octane that can make your outbound HTTP requests up to 5x times faster! (Or 10x. Yes, really.)",
      ],
    ];
    return view('blog', compact('slug', 'title', 'posts'));
  }


  public function show($id)
  {
    $title = 'Blog';
    $slug = 'blog';
    $artikel = array_search($id, array_column($this->data, 'id'));
    return view('blogDetail', compact('slug', 'title', 'artikel'));
  }
}
