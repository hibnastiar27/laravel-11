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
    public function __construct($columns = [], $rows = [])
    {
        $this->columns = $columns;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-table');
    }
}
