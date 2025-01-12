<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminTable extends Component
{
    /**
     * Create a new component instance.
     */
    public array $columns;
    public array $rows;
    public  $route;

    public $kategori;
    public function __construct($columns = [], $rows = [], $route, $kategori)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->route = $route;
        $this->kategori = $kategori;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-table');
    }
}
