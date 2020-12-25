<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
=======

class PostController extends Controller
>>>>>>> 4ecd089f6978ff2ffbc4633cc1a09a416db3caf3
{
    /**
     * Display a listing of the resource.
     *
<<<<<<< HEAD
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $request->perpage ? $perPage = $request->perpage : $perPage = 10;
        $posts = DB::table('posts')->paginate($perPage);
        $posts->withPath('/api/posts'.(($request->perpage) ? '?perpage='.$request->perpage : ''));
        return response()->json($posts);
=======
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
>>>>>>> 4ecd089f6978ff2ffbc4633cc1a09a416db3caf3
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
