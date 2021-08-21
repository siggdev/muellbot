<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrashTypesCreate extends Component
{
    public $name;
    public $color;
    public $text_color;

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->color = '#000000';
        $this->text_color = '#ffffff';
    }

    public function render()
    {
        return view('livewire.trash-types-create')
            ->with([
                'trash_color' => $this->color,
                'text_color' => $this->text_color,
                'trash_name' => $this->name,
            ]);
    }
}
