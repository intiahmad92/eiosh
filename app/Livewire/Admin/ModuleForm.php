<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ModuleForm extends Component
{
    public $module = null;
    public function render()
    {
        return view('livewire.admin.moduleform');
    }
}
