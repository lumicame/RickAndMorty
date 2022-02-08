<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

use App\Models\Episode;
use App\Models\Character;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url='https://rickandmortyapi.com/api/episode';
        $http = Http::get($url);
        $info=$http->json('info');
        
        for ($i=1; $i <= $info["pages"]; $i++) { 
            $url='https://rickandmortyapi.com/api/episode?page='.$i;
            $http = Http::get($url);
            $results=$http->json('results');
            foreach($results as $result){
                $episode=new Episode();
                $episode->name=$result["name"];
                $episode->air_date=$result["air_date"];
                $episode->episode=$result["episode"];
                $episode->url=$result["url"];
                $episode->save();
                foreach($result["characters"] as $character){
                    $c=Character::find(substr(strrchr($character, '/'), 1 ));
                    $episode->characters()->attach($c);
                }
            }
        }
    }
}
