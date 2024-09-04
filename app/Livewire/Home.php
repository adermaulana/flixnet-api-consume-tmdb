<?php

namespace App\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class Home extends Component
{
   
    public $responseData = [];
    public $imagepath;
    public $page = 1;

    public function mount()
    {
        $this->fetchMovies();
    }

    public function fetchMovies()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie', [
            'query' => [
                'api_key' => env('TMBD_API'),
                'page' => $this->page
            ]
        ]);
        
        $data = json_decode($response->getBody(), true);

        // Merge new results with existing ones
        $this->responseData = array_merge_recursive($this->responseData, $data);
        $this->imagepath = "https://image.tmdb.org/t/p/original/";
    }

    public function nextPage()
    {
        if ($this->page < $this->responseData['total_pages']) {
            $this->page++;
            $this->fetchMovies();
        }
    }

    public function render()
    {   
        return view('livewire.home');
    }
}
