<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Chapter;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $topmenu;
    public $classmenu;
    public $images;
    public $news;
    public $sidemenu;
    public $chapters;

    public function __construct(){
        $this->topmenu = Page::orderBy('order_n', 'asc')->get()->toArray();
        $this->classmenu = Classe::orderBy('id')->get(['id', 'title'])->toArray();
        $this->news = Blog::orderBy('created_at', 'asc')->take(3)->get();
        $this->images =  Image::orderBy('created_at', 'asc')->take(8)->get();
        $this->sidemenu = Course::orderBy('created_at', 'asc')->take(8)->get();
        $this->chapters = Chapter::orderBy('class_id')->get();
    }
    public function index()
    {
        //
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
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        $chapitre = Chapter::where('id', $request)->get();
        $currentclass = $request;
        //Classe::where('class_id', $request)->get();

        return view('layouts.default.lesson')->with([
            'currentclass' => $currentclass,
            'chapitre' => $chapitre,

            'topmenu' => $this->topmenu,
            'news'=> $this->news,
            'images' => $this->images,
            'classmenu' => $this->classmenu,
            'sidemenu' => $this->sidemenu,
            'chapters' => $this->chapters,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
