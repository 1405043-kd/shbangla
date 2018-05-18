<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antonym;
use App\Synonym;
use App\Word;
use App\Def;
use App\Tag;
use App\TagTable;
use DB;
use App\Quotation;
use App\Http\Controllers\View;
use Auth;

class UserController extends Controller
{
    //
    public function index($id)
    {
        $def = DB::select('select * from Defs where adder_id = ?', [$id]);

        //  print($def[0]->name);
       // dd($def);
        $adder_name= DB::select('select name from Users where id= ?', [$id]);
       // dd($adder_name[0]);
        $word = DB::table('Words')->pluck('name','id')->toArray();
        $users= DB::select('select id,name from users');
        $tag= DB::select('select * from tagtable tt join tags t on t.id=tt.tag_id where def_id = ?', [$def[0]->id]);
        //    $def=4;
       // dd($word);
        // show the view and pass the nerd to it
        //$def[0]['user_name']=$def->name;

//        $def['user_name']=$def->name;
    //    dd($tag);
//        $def['user_name']=$def->name;




        $data = ['Def'  => $def, 'words'=>$word, 'nam'=>$adder_name[0], 'tags'=> $tag, 'user'=>$users];
       // dd($data['nam']);
        return \View::make('member')
            ->with($data);

    }
}
