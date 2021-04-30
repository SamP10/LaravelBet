<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Table;
use App\Models\Sport;
use App\Models\horse;
use App\Models\football;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function game(Request $request)
    {
        $games = Game::latest()->paginate (12);
        return view('gaming.index', compact('games'));
    }
    public function betting(Request $request)
    {
        return view('betting.index');
    }
    public function casino(Request $request)
    {
        $tables = Table::latest()->paginate (12);
        return view('casino.index', compact('tables'));
    }
    public function horse(Request $request)
    {
        $horses = horse::latest()->paginate (12);
        return view('betting.horse', compact('horses'));
    }
    public function league(Request $request)
    {
        $leagues = football::latest()->paginate (20);
        return view('betting.football', compact('leagues'));
    }
    public function index(){
        return view('homepage');
    }
    public function contact(){
        return view('contact');
    }
    public function promotions(){
        return view('promotions');
    }
    public function matches(){
        $matches = Sport::latest()->paginate(10);
        return view('betting.matches', compact('matches'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
