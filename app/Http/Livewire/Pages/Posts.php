<?php

namespace App\Http\Livewire\Pages;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('admin.post.index', [
            'posts' => Post::paginate(10),
        ]);
    }

    public function create()
    {
        return view('admin.post.create', [
            'posts' => Post::paginate(10),
        ]);
    }

    // public function mount()
    // {
    //     if (!auth()->user()->hasRole('admin')) {
    //         return redirect()->route('dashboard');
    //     }
    // }

    public function demoteUser($id)
    {
        $user = User::find($id);
        $user->detachRole('admin');
        $user->attachRole('user');
        session()->flash('success', $user->name . ' has been demoted to user');
    }

    public function deletePost($id)
    {
        $user = Post::find($id);
        $user->delete();
        session()->flash('success', $user->name . ' has been deleted');
    }

}