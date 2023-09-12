<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Chapter;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Download;
use App\Models\Image;
use App\Models\Page;
use App\Models\Symbol;
use Illuminate\Http\Request;

class DownloadsController extends Controller
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

        $paginator = Download::paginate(10);

        return view('layouts.default.downloads')->with([

            'paginator' => $paginator,


            'topmenu' => $this->topmenu,
            'news'=> $this->news,
            'images' => $this->images,
            'classmenu' => $this->classmenu,
            'sidemenu' => $this->sidemenu,
            'chapters' => $this->chapters,
        ]);


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link',])->toArray();
        $event = Download::where('id', $id)->get()->toArray();
        $symbols = Symbol::all()->pluck('svg','id');
        return view('default.event')->with([
            'menuitems' => $menuitems,
            'event' => $event,
            'symbols' => $symbols,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
