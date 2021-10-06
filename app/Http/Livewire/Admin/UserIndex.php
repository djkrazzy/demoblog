<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Http\Resources\UserCollection;
use Livewire\Component;
use Livewire\WithPagination;
class UserIndex extends Component
{
   
     public $search;
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {    
        $users= User::where('name', 'LIKE' , '%'.$this->search.'%')
        ->orWhere('email', 'LIKE' , '%'.$this->search.'%')->paginate(10);
        return view('livewire.admin.user-index',compact('users'));
    }
}
