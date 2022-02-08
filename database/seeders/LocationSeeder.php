<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

use App\Models\Location;


class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url='https://rickandmortyapi.com/api/location';
        $http = Http::get($url);
        $info=$http->json('info');
        
        for ($i=5; $i <= $info["pages"]; $i++) { 
            $url='https://rickandmortyapi.com/api/location?page='.$i;
            $http = Http::get($url);
            $results=$http->json('results');
            foreach($results as $result){
                $location=new Location();
                $location->name=$result["name"];
                $location->type=$result["type"];
                $location->dimension=$result["dimension"];
                $location->url=$result["url"];
                $location->save();
            }
        }
       
    }
}
