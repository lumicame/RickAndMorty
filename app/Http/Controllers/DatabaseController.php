<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Location;
use App\Models\Episode;


class DatabaseController extends Controller
{
     /////FUNCTION FOR GET ALL CHARACTERS/////
    public function indexCharacter(){
        $characters=Character::simplePaginate(20);
        return view('database.character',compact('characters'));
    }
    /////FUNCTION FOR GET ONE CHARACTER/////
    public function showCharacter($id){
         $character=Character::find($id);
        return view('database.character_show',compact('character'));
    }
/////FUNCTION FOR GET ONE CHARACTER AND RETURN RENDER VIEW/////
    public function RenderCharacter($id){
        $character=Character::find($id);
        $episodes=$character->episodes;
        return view('database.components.list_episodes',compact('episodes'))->render();
    }


    /////FUNCTION FOR GET ALL LOCATIONS/////
    public function indexLocation(){
        $locations=Location::simplePaginate(20);
        return view('database.location',compact('locations'));
    }
    /////FUNCTION FOR GET ONE LOCATION/////
    public function showLocation($id){
        $location=Location::find($id);
        return view('database.location_show',compact('location'));
    }
    /////FUNCTION FOR GET ONE LOCATION AND RETURN RENDER VIEW/////
    public function RenderLocation($id){
        $location=Location::find($id);
        $characters=$location->characters;
        return view('database.components.list_characters',compact('characters'))->render();
    }
   


    /////FUNCTION FOR GET ALL EPISODES/////
    public function indexEpisode(){
        $episodes=Episode::simplePaginate(20);
        return view('database.episode',compact('episodes'));
    }
    /////FUNCTION FOR GET ONE EPISODE/////
    public function showEpisode($id){
        $episode=Episode::find($id);
        return view('database.episode_show',compact('episode'));
    }
    /////FUNCTION FOR GET ONE EPISODE AND RETURN RENDER VIEW/////
    public function RenderEpisode($id){
        $episode=Episode::find($id);
        $characters=$episode->characters;
        return view('database.components.list_characters',compact('characters'))->render();
    }
    
}
