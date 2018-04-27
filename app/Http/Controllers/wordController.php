<?php

namespace App\Http\Controllers;

use App\Antonym;
use App\Synonym;
use App\Word;
use App\Def;
use App\Tag;
use App\TagTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
    public function likeDef(Request $request){
        dd($request);
        $dd = $request['def_id'];
        $is_like = $request['isLike'] === 'true';
        $ant = new Word();
        $ant->name=$dd;
        $ant->adder_id=Auth::user()->id;
        $ant->save();


    }


    public function index(Request $request)
    {
        $def = DB::table('Defs')->where('word_id', $request->s)->paginate(5);

        $users= DB::select('select id,name from users');
        //  print($def[0]->name);
        $w= DB::table('Words')->where('id', $request->s)->first();
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $tag= DB::select('select * from tagtable tt join tags t on t.id=tt.tag_id where def_id = ?', [$def[0]->id]);
        //    $def=4;
        //dd($word);
        // show the view and pass the nerd to it
        //$def[0]['user_name']=$def->name;

//        $def['user_name']=$def->name;
     //   dd($def);
//        $def['user_name']=$def->name;

        $ancestors = DB::select('select @pv := t.word_id from
                    (select * from synonym order by syn_id desc) t join 
                     (select @pv := ?) tmp where t.syn_id = @pv', [$request->s]);


        $data = ['Def'  => $def, 'words'=>$word, 'nam'=>$w, 'tags'=> $tag, 'user'=> $users, 'synonym'=>$ancestors];

        if ($request->ajax()) {
            return Response::json(\View::make('word/index')->with($data));
        }
        return \View::make('word/index')
            ->with($data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return \View::make('word/add');
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $tag = DB::table('tags')->pluck('name','id')->toArray();
        return view('word.add', ['words' => $word, 'tags'=>$tag]);
        //return view('word.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function messages()
    {
        return [
            'title.required' => 'খালি রাখলে হবে না মামা',
            'sentence_ex.required'  => 'কি ভাবসো? এইটা ফাঁকা রাখতে দিবো?',
        ];
    }
    public function store(Request $request)
    {
        //$this->middleware('auth');
        $word= new Word();
        $def= new Def();
        $tag = new Tag();
        $tagtable = new TagTable();
        $ant= new Antonym();
        $syn=new Synonym();
        $tagd[] = $request->taga;

        for($i=0;$i<sizeof($tagd[0]);$i++){
            if(!is_numeric($tagd[0][$i])) {
                echo($tagd[0][$i]);
                $tag = new Tag();
                $tag->name=$tagd[0][$i];
                $tag->save();
            }
        }

        $result = DB::table('Words')
            ->select('id')
            ->where('name', '=', $request->name)
            ->first();
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


        $def_id = DB::table('Defs')
            ->select('id')
            ->where('def', '=', $request->def)
            ->get();

        $array_def = json_decode(json_encode($def_id[0]), true);

        for($i=0;$i<sizeof($tagd[0]);$i++) {
            $tagtable = new TagTable();
            $tagtable['def_id']=$array_def['id'];
            if(!is_numeric($tagd[0][$i])) {
                $tag_id = DB::table('Tags')
                    ->select('id')
                    ->where('name', '=', $tagd[0][$i])
                    ->get();
                $array_tag = json_decode(json_encode($tag_id[0]), true);
                $tagtable['tag_id']=$array_tag['id'];
            }
            else{
                $tagtable['tag_id']=$tagd[0][$i];
            }
            $tagtable->save();
            }

        $synonym=$request->synonym;

        if ($synonym) {
            $syn['syn_id']=$synonym;
            $syn['word_id']=$array['id'];
            $syn->save();
        }

        $antonym=$request->antonym;
        if ($antonym) {
            $ant['ant_id']=$antonym;
            $ant['word_id']=$array['id'];
            $ant->save();
        }


        //return $request->all();
        $word = DB::table('Words')->pluck('name','id')->toArray();
        return view('layouts.mainlayout', ['words' => $word]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $def = $def = DB::table('Defs')->where('word_id', $id)->paginate(5);


        //  print($def[0]->name);
        $w= DB::table('Words')->where('id', $id)->first();
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $users= DB::select('select id,name from users');
        $tag= DB::select('select * from tagtable tt join tags t on t.id=tt.tag_id where def_id = ?', [$def[0]->id]);
        //    $def=4;
        //dd($word);
        // show the view and pass the nerd to it
        //$def[0]['user_name']=$def->name;

//        $def['user_name']=$def->name;
        //   dd($def);
//        $def['user_name']=$def->name;

       // dd(0123);
        $ancestors = DB::select('select @pv := t.word_id from
                    (select * from synonym order by syn_id desc) t join 
                     (select @pv := ?) tmp where t.syn_id = @pv', [$id]);


        //dd(reset($ancestors[0]));








$data = ['Def'  => $def, 'words'=>$word, 'nam'=>$w, 'tags'=> $tag, 'user'=>$users, 'synonym'=>$ancestors];

        return \View::make('word/index')
            ->with($data);

    }



    public function showName($name){


        $id= DB::table('Words')->where('name', $name)->first();
        $id=$id->id;

        $def = $def = DB::table('Defs')->where('word_id', $id)->paginate(5);


        //  print($def[0]->name);
        $w= DB::table('Words')->where('id', $id)->first();
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $users= DB::select('select id,name from users');
        $tag= DB::select('select * from tagtable tt join tags t on t.id=tt.tag_id where def_id = ?', [$def[0]->id]);
        //    $def=4;
        //dd($word);
        // show the view and pass the nerd to it
        //$def[0]['user_name']=$def->name;

//        $def['user_name']=$def->name;
        //   dd($def);
//        $def['user_name']=$def->name;

        // dd(0123);
        $ancestors = DB::select('select @pv := t.word_id from
                    (select * from synonym order by syn_id desc) t join 
                     (select @pv := ?) tmp where t.syn_id = @pv', [$id]);


        //dd(reset($ancestors[0]));








        $data = ['Def'  => $def, 'words'=>$word, 'nam'=>$w, 'tags'=> $tag, 'user'=>$users, 'synonym'=>$ancestors];

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
