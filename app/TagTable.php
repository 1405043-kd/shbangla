<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTable extends Model
{
    protected $table = 'TagTable';

    public function store(Request $request)
    {
        // Validate the request...

        //    $word = new Word;

        //    $word->name = $request->name;

        //  $word->save();
    }
}
