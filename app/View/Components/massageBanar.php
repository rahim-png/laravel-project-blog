<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function Termwind\style;

class massageBanar extends Component
{
    /**
     * Create a new component instance.
     */
    public $msg;
    public $sty;
 
    public function __construct($msg, $sty)
    {
        //
        $this->msg = $msg;
        $this->sty = $sty;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.massage-banar');
    }
}
