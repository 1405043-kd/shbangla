<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Def;
use App\Tag;
use App\TagTable;
use DB;
use App\Quotation;
use App\Http\Controllers\View;
use Auth;

class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $def = DB::select('SELECT * from defs r join words w on r.word_id=w.id where r.id
                          IN (SELECT def_id FROM `tagtable` WHERE tag_id=?) ', [$id]);

        //dd($def);
        $users= DB::select('select id,name from users');
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $tag= DB::select('SELECT name from tags where id=?',[$id]);
        //dd($tag);


        //    $def=4;
        // show the view and pass the nerd to it
        $data = ['Def'  => $def, 'words'=>$word, 'tags'=>$tag, 'user'=>$users];
        return \View::make('word/showtag')->with($data);
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
