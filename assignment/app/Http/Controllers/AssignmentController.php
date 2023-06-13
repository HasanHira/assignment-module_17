<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller {


    // Task: 1:
    // Answer include in pdf

    //Task 2:
    function ExcerptDes() {
        $posts = DB::table( 'posts' )->select( 'excerpt', 'description' )->get();
        return $posts;
    }

    //Task 3:
    function DistinctTitle() {
        $posts = DB::table( 'posts' )->select( 'title' )->distinct()->get();
        return $posts;
    }

    // Task 4:
    function FirstRecord() {
        $posts = DB::table( 'posts' )->where( 'id', '=', 2 )->first();

        return $posts->description;
    }

    // Task 5:
    function DesFromPost() {
        $posts = DB::table( 'posts' )->where( 'id', 2 )->pluck( 'description' );
        return $posts;
    }

    // Task: 6:
    // Answer include in pdf

    // Task 7:
    function PostTitle() {
        $posts = DB::table( 'posts' )->select( 'title' )->get();
        return $posts;
    }

    // Task 8:
    function InsertNew() {
        $posts = DB::table( 'posts' )->insert( [
            'title'        => 'X',
            'slug'         => 'X',
            'excerpt'      => 'excerpt',
            'description'  => 'description',
            'is_published' => true,
            'min_to_read'  => 2,
        ] );
        return $posts;
    }

    // Task 9:
    function UpdateData() {
        $DataUpdate = DB::table( 'posts' )
            ->where( 'id', 2 )
            ->update( [
                'excerpt'     => 'Laravel 10',
                'description' => 'Laravel 10',
            ] );
        return $DataUpdate;
    }

    // Task 10:
    function DeleteData() {
        $delete = DB::table( 'posts' )
            ->where( 'id', 3 )
            ->delete();
        return "Affected Rows are: " . $delete;
    }

    // Task 11:
    // Answer include in pdf

    // Task 12:
    // Answer include in pdf

    // Task 13:
    // Answer include in pdf

    // Task 14:
    function IncReadTime() {
        $incReadTime = DB::table( 'posts' )->where( 'id', 3 )
        ->increment('min_to_read', 1);

        return $incReadTime;
    }

}
