<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'Tags';

    public function store(Request $request)
    {
        // Validate the request...

        //    $word = new Word;

        //    $word->name = $request->name;

        //  $word->save();
    }
}
