<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logout extends Component
{
    public function render(): View|Closure|string
    {
        return view('admin.components.logout');
    }
}
