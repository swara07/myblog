<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();

        return view('pages.display')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'

        ]);

        $post=new post;
        $post->title=$request->input('title');          // to fetch the input entered by the user
        $post->body=$request->input('body');
        $post->save();                           // save and store in the database
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a= Post ::find($id); // to get all the parmeters with id with is mentioned
        
        return view("pages.show", compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $e= Post::find($id);
        
        return view("pages.edit", compact('e'));
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
        $e=Post::find($id);
        $e->title=$request->input('title');          // to fetch the input entered by the user
        $e->body=$request->input('body');
        $e->update(); 
        $e->save();
        return redirect('/posts');
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
        $b=Post::find($id);
        $b->delete();
        return redirect('/posts');
    }
}
