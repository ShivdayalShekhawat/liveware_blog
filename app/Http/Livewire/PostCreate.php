<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Str;

use Livewire\Component;

class PostCreate extends Component
{
	public $saveSuccess = false;
	public $post;
	public $modelVal;

	protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ]; 

    public function mount(){
    	$this->post = new Post;
    }


  public function savePost(){
     //  'user_id' => 'required',
    //$validateData = $this->validate([
    //  
    //    'title'   => 'required|min:6',
    //    'body'    => 'required'
    //]);

    $this->validate();

    $this->post->user_id = 1;
    $this->post->slug = Str::slug($this->post->title);
    $this->post->save();


  	$this->saveSuccess = true;
  }



    public function render()
    {
        return view('livewire.post-create')->extends('welcome')->section('content');
    }
}
