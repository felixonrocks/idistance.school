<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Chapter;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Email;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class EmailsController extends Controller
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
        return view('layouts.default.contact')->with([
            'topmenu' => $this->topmenu,
            'news'=> $this->news,
            'images' => $this->images,
            'classmenu' => $this->classmenu,
            'sidemenu' => $this->sidemenu,
            'chapters' => $this->chapters,
        ]);
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
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
