<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $title;
    public $name;
    

    // ✅ Mover $type al final
    public function __construct($type = "info",$title, $name)
    {
        $this->type = $type;
        $this->title = $title;
        $this->name = $name;
        
    }

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
