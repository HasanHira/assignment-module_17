<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    //Task 2:
    function ExcerptDes(){
        $posts = DB::table('posts')->select('excerpt', 'description')->get();
        return $posts;
    }

    //Task 3:
    function DistinctTitle(){
        $posts = DB::table('posts')->select('title')->distinct()->get();
        return $posts;
    }

    // Task 4:
    function FirstRecord(){
        $posts = DB::table('posts')->where('id', '=', 2)->first();

        return $posts->description;
    }

    // Task 4:
    function DesFromPost(){
        $posts = DB::table('posts')->where('id', 2)->pluck('description');
        return $posts;
    }

}
