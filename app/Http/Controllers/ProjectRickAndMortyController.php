<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use Session;

class ProjectRickAndMortyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // 

        return view('project.index');
    }

    public function getAllCharacters(Request $request){

        $lnk = 'https://rickandmortyapi.com/api/character?page=1';
        $response = Http::get($lnk);
        $characters = json_decode($response->getBody());

        $nextlink = strval($characters->info->next);
        $prev = strval($characters->info->prev);
        
        session()->put('nextlink',$nextlink );
        
       
        session()->get('prev', $prev);
      
        return view('project.characters', ['characters'=>$characters])->with('nextlink', $nextlink, 'prev', $prev);
    }

    public function nextPage(Request $request)
    {
        $lnks = session()->get('nextlink');
        if ($lnks === "") {
            return redirect()->route('characters');
        
        }else{
            $response = Http::get($lnks);
            $characters = json_decode($response->getBody());
            $nextlink = strval($characters->info->next);
            $prev = strval($characters->info->prev);
            session()->put('nextlink',$nextlink);
            session()->put('prev', $prev );

            return view('project.characters', ['characters'=>$characters])->with('nextlink', $nextlink);

        }
       
       
    }
   
    public function previousPage(Request $request){
        $lnks = session()->get('prev');
       
        if ($lnks === "") {
            return redirect()->route('characters');
        }else{

            $response = Http::get($lnks);
            $characters = json_decode($response->getBody());
            $prev = strval($characters->info->prev);
            $nextlink = strval($characters->info->next);
            session()->put('nextlink',$nextlink);
            session()->put('prev',$prev);
            return view('project.characters', ['characters'=>$characters])->with('nextlink', $nextlink);
        }
        
        
    }

    public function getCharacter(Request $request){
        $haracter = $request->$character->url;
        dd($character);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
