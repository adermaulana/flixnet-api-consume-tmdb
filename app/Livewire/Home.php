<?php

namespace App\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class Home extends Component
{

    public $responseData;
    public $imagepath;
    
    public function mount()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=' . env('TMBD_API'));
        $this->responseData = json_decode($response->getBody(), true);
        $this->imagepath = "https://image.tmdb.org/t/p/original/";
    }

    public function render()
    {   
        return view('livewire.home');
    }
}
