<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

use App\Models\Character;
class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url='https://rickandmortyapi.com/api/character';
        $http = Http::get($url);
        $info=$http->json('info');
        
        for ($i=1; $i <= $info["pages"]; $i++) { 
            $url='https://rickandmortyapi.com/api/character?page='.$i;
            $http = Http::get($url);
            $results=$http->json('results');
            foreach($results as $result){
                $character=new Character();
                $character->name=$result["name"];
                $character->status=$result["status"];
                $character->species=$result["species"];
                $character->gender=$result["gender"];
                $character->origin_name=$result["origin"]["name"];
                $character->origin_url=$result["origin"]["url"];
                $character->location_id=substr(strrchr($result['location']['url'], '/'), 1 );
                $character->image=$result["image"];
                $character->url=$result["url"];
                $character->save();
            }
        }
    }
}
