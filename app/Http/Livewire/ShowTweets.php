<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tweet;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    public $content;
    protected $rules = [
        'content' => 'required|min:1|max:280'
    ];

    public function render(){
        $tweets = Tweet::with('user')->latest()->get();
        return view('livewire.show-tweets', [
            'tweets' => Tweet::paginate(3),
        ]);
    }

    public function create(){
        $this->validate();

        // Tweet::create([
        //     'content'=>$this->content,
        //     'user_id'=>1,
        // ]);

        auth()->user()->tweets()->create([
            'content' => $this->content,
        ]);
        
        $this->content = '';
    }
}
