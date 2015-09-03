<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teams= Team::all();

        return view('teams.index',compact('teams'));
    }
    /**
     * Display the specified group.
     *
     * @param  int  $id
     * @return Response
     */
    public function showByGroup($group)
    {
        $teams= Team::where('group',$group)->latest('points')->get();
        //return $teams;
        return view('teams.showByGroup',compact('teams','group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $input=Request::all();

        $team= new Team;
        $team->name=Request::get('name');
        $team->slug=Request::get('slug');
        $team->email=Request::get('email');
        $team->phone=Request::get('phone');
        $team->save();


        $player=new Player;
        $player->name=Request::get('player_name');
        $player->team_id=$team->id;

        $team->players()->save($player);



       // Player::insert();

        return redirect('teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $team= Team::where('slug',$slug)->first();
        $players=$team->players;
        return view('teams.show',compact('team','players'));
    }
    
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
