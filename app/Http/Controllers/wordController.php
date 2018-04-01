<?php

namespace App\Http\Controllers;

use App\Word;
use App\Def;
use App\Tag;
use App\TagTable;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Controllers\View;
use Auth;

class wordController extends Controller
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
        //return \View::make('word/add');
        return view('word.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->middleware('auth');
        $word= new Word();
        $def= new Def();
        $tag = new Tag();
        $tagtable = new TagTable();

        $tag->name=$request->tags;
        $tag->save();



        $result = DB::table('Words')
            ->select('id')
            ->where('name', '=', $request->name)
            ->first();
        $user = Auth::user();
        $word['name']=$request->name;
        $word['adder_id']=auth()->user()->id;
        if(!$result)
            $word->save();
        $result2 = DB::table('Words')
            ->select('id')
            ->where('name', '=' , $word['name'])
            ->get();
      //  dd($word->name);
      //  dd($request->name);
     //   dd($result2[0]);
       // dd($result2);
      //  dd($word['name']);
        $array = json_decode(json_encode($result2[0]), true);
       // dd($array['id']);

        $def['adder_id']=auth()->user()->id;
        $def['word_id']=$array['id'];
        $def['def']=$request->def;
        $def['sentence_ex']=$request->sentence_ex;
        $def['like_count']=0;
        $def['dislike_count']=0;
        $def->save();


        $tag_id = DB::table('Tags')
            ->select('id')
            ->where('name', '=', $tag->name)
            ->get();

        $array_tag = json_decode(json_encode($tag_id[0]), true);

        $def_id = DB::table('Defs')
            ->select('id')
            ->where('def', '=', $request->def)
            ->get();

        $array_def = json_decode(json_encode($def_id[0]), true);

        $tagtable['def_id']=$array_def['id'];
        $tagtable['tag_id']=$array_tag['id'];
        $tagtable->save();


        //return $request->all();
        return "fuck you :)";
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
        $def = DB::select('select * from Defs where word_id = ?', [$id]);
        $word= DB::table('Words')->where('id', $id)->first();
    //    $def=4;

        // show the view and pass the nerd to it
        $data = [
            'Def'  => $def,
            'nam'   => $word
        ];

        return \View::make('word/index')
            ->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "LoL, words are sour ;)";
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
