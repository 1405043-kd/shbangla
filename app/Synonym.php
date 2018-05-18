<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Synonym extends Model
{
    //
    protected $table = 'synonym';

    public function store(Request $request)
    {
        // Validate the request...

        //    $word = new Word;

        //    $word->name = $request->name;

        //  $word->save();
    }
}
