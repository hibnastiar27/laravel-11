<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */

    public $gambar, $judul, $url;
    public function __construct($gambar, $judul, $url)
    {
        $this->gambar = $gambar;
        $this->judul = $judul;
        $this->url = $url;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
