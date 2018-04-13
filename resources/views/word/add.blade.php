@extends('layouts.mainlayout')


<!--
    <form method="post" action="/words">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="text" name="name" placeholder="Enter Word Name" >
        <input type="text" name="def" placeholder="Enter Definition" >
        <input type="text" name="sentence_ex" placeholder="Enter Sentence Example" >
        <input type="text" name="tags" placeholder="Tags">

        <input type="submit" name="submit">
    </form>
>










<!------ Include the above in your HEAD tag --------->



                @section('content')

                <form action="/words" method="post" >
                    <div class="form-group">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    </div>
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">শব্দ করি যোগ </h3>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="শব্দ" required>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="def" placeholder="ব্যাখ্যা বনাম অর্থ" maxlength="80" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="sentence_ex" placeholder="উদাহরণ" maxlength="80" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <select name="taga[]" id="tags" class="form-control" multiple="multiple">
                            @foreach($tags as $key => $t)
                                <option value="{{ $key }}">{{ $t}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="words">প্রতিশব্দ জানলে বলেন নাকি উলটাপালটা শব্দ দিয়া দিসেন কে জানে </label>
                        <select name="synonym" id="syns" class="form-control">

                            @foreach($words as $key => $t)
                                <option value="{{ $key }}">{{ $t}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="words">বিপরীত শব্দ জানলে বলেন নাকি এইটাও জানেন না? </label>
                        <select name="antonym" id="ants" class="form-control">

                            @foreach($words as $key => $t)
                                <option value="{{ $key }}">{{ $t}}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">ধোঁকাও</button>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#tags').select2({
                            placeholder : 'কই পাইসেন বলেন',
                            tags: true

                    });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $('#syns').select2({
                            placeholder : 'প্রতিশব্দ জানলে বলেন নাকি উলটাপালটা শব্দ দিয়া দিসেন কে জানে'

                        });
                    });
                </script>
                <script>
                    $(document).ready(function(){
                        $('#ants').select2({
                            placeholder : 'বিপরীত শব্দ জানলে লেখেন'
                        });
                    });
                </script>
                @endsection


