<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sort extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $field;
    public $sort;

    public function __construct($name, $field, $sort='')
    {
        $this->name = $name;
        $this->field = $field;
        if($sort == 'desc'){
            $this->sort = '';
        } else {
            $this->sort = ( $sort == 'asc' ) ? 'desc' : 'asc';
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sort');
    }
}
