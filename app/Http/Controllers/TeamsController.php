<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;
use Slugify;

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

        return view('theme.teams.index',compact('teams'));
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
        return view('theme.teams.showByGroup',compact('teams','group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('theme.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        
           
        $team= new Team;
        $team->name=$request->get('name');
        $team->slug=$this->generateSlug($team->name);
        $team->email=$request->get('email');
        $team->phone=$request->get('phone');
        
        $team->save();

        $playersArray=$request->get('players');

        
        $i=0;
        $players=null;
        foreach ($playersArray as $p) {

              $players[$i] =new Player;
              $players[$i]->name=$p;
              $players[$i]->team_id=$team->id;
              $i++;
        }   
       

      $team->players()->saveMany($players);

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
        return view('theme.teams.show',compact('team','players'));
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
     * Generate Slug
     *
     * @param  string  $name
     * @return Response
     */
    protected function generateSlug($name)
    {
        $url = Slugify::slugify($this->transliterate($name));
        return $url;
    }
    protected function transliterate($name)
    {
        $char_map = array(
        
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E',  'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '',  'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e',  'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '',  'ь' => '',  'ю' => 'yu',
        'я' => 'ya',
        
    );

       return str_replace(array_keys($char_map), $char_map, $name);

    }

}
