<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tweet;

class ShowTweets extends Component
{
    public $infoName;
    public function render(){
        $tweets = Tweet::with('user')->get();
        return view('livewire.show-tweets', compact('tweets'));
    }
}