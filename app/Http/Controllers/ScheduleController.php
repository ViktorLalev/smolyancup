<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function generateScheduleByGroup($group=null)
    {
        if ($group) {
            $teams= Team::where('group',$group)->get();
        }
        else{
            $teams=Team::all();
        }
        
        

        $rows = array();

        foreach($teams as $host)
            foreach($teams as $guest)
                if($host->id != $guest->id && $host->group == $guest->group &&!in_array(array('host'=>$guest,'guest'=>$host), $rows))
                    $rows[] = array('host'=>$host,'guest'=>$guest);
        
        return view('schedule.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
