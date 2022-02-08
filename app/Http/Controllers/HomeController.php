<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    /////FUNCTION FOR GET ALL CHARACTERS/////
    public function indexCharacter(){
        $url="";
        if (isset($_GET['page'])) {
           $url='https://rickandmortyapi.com/api/character?page='.$_GET['page'];
        }else{
           $url='https://rickandmortyapi.com/api/character'; 
        }
        $http = Http::get($url);   
        $info=$http->json('info');
        $results=$http->json('results');
        return view('character',compact('results','info'));
    }
    /////FUNCTION FOR GET ONE CHARACTER/////
    public function showCharacter($id){
        $url='https://rickandmortyapi.com/api/character/'.$id;
        $http = Http::get($url);   
        $result=$http->json();
        return view('character_show',compact('result'));
    }


    /////FUNCTION FOR GET ALL LOCATIONS/////
    public function indexLocation(){
        $url="";
        if (isset($_GET['page'])) {
           $url='https://rickandmortyapi.com/api/location?page='.$_GET['page'];
        }else{
           $url='https://rickandmortyapi.com/api/location'; 
        }
        $http = Http::get($url);   
        $info=$http->json('info');
        $results=$http->json('results');
        return view('location',compact('results','info'));
    }
    /////FUNCTION FOR GET ONE LOCATION/////
    public function showLocation($id){
        $url='https://rickandmortyapi.com/api/location/'.$id;
        $http = Http::get($url);   
        $result=$http->json();
        return view('location_show',compact('result'));
    }


    /////FUNCTION FOR GET ALL EPISODES/////
    public function indexEpisode(){
        $url="";
        if (isset($_GET['page'])) {
           $url='https://rickandmortyapi.com/api/episode?page='.$_GET['page'];
        }else{
           $url='https://rickandmortyapi.com/api/episode'; 
        }
        $http = Http::get($url);   
        $info=$http->json('info');
        $results=$http->json('results');
        return view('episode',compact('results','info'));
    }
    /////FUNCTION FOR GET ONE EPISODE/////
    public function showEpisode($id){
        $url='https://rickandmortyapi.com/api/episode/'.$id;
        $http = Http::get($url);   
        $result=$http->json();
        return view('episode_show',compact('result'));
    }
    
}
