<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserController extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('admin.user.index',[
            'users' => $users
        ]);
    }
}
