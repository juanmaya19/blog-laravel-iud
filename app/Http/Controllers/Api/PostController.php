<?php

namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use App\Http\Requests\Post\StoreRequest;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function all(){
        return response()->json(Cache::remember('posts_all', now()->addMinutes(10), function () {
            return Post::all();
        }));
    }


    public function index()
    {
        return response()->json(Post::paginate(10)); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Post::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('ok');
    }
}
