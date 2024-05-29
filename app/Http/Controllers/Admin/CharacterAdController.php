<?php

namespace App\Http\Controllers\Admin;

use App\Character;
use App\Classchar;
use App\Damagetype;
use App\Http\Controllers\Controller;
use App\Rank;
use App\Stigmataset;
use App\Weapon;
use Illuminate\Http\Request;

class CharacterAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $charas = Character::all();
        return view('admin/characters')->with('charas', $charas);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        //Получаем данные из БД
        $chara = Character::get()->find($id);
        $stigset = Stigmataset::where('id', $chara['stigset_id'])->first();
        $rankchara = Rank::where('id', $chara['charrank'])->first();
        $dmgtype = Damagetype::where('id', $chara['chartype'])->first();
        $classtype = Classchar::where('id', $chara['charclass'])->first();
        $weap = Weapon::where('id', $chara['weap_id'])->first();
        //Возвращаем "вид" с этими данными
        return view('admin/character')
            ->with('chara', $chara)->with('stigset', $stigset)
            ->with('rankchara', $rankchara)
            ->with('dmg', $dmgtype)
            ->with('classtype', $classtype)
            ->with('weap', $weap);
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
