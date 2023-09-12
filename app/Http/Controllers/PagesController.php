<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Chapter;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Download;
use App\Models\Image;
use App\Models\Message;
use App\Models\Page;
use App\Models\Product;
use App\Models\Type;
use Doctrine\DBAL\Query\QueryException;
use Illuminate\Http\Request;

class PagesController extends Controller
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
        $this->sidemenu = Course::where('class_id', 1)-> orderBy('created_at', 'asc')->get();
        $this->chapters = Chapter::orderBy('class_id')->get();
    }

    public function index()
    {
       // dd($this->sidemenu[6]);
//        $chapters = $this->chapters;
//        $sideitems = $this->sidemenu->mapToGroups(function ($chapters, $lesson) {
//            return [$lesson['course_id'] => $chapters];
//        })->toArray();

        //dd($this->sidemenu);
        return view('layouts.default.main')->with([
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
        $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link'])->toArray();
        $page = Page::where('id', '1')->pluck('name')->implode('');
        echo $page;
//        return view("default.$page")->with([
//            'menuitems'=> $menuitems,
//
//        ]);
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

    public function ml(){
        $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link'])->toArray();
        return view('default.ML')->with([
            'menuitems' => $menuitems,
        ]);
    }


    public function contact(){
            $message="";
            $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link'])->toArray();
            return view('default.contact')->with([
                'menuitems' => $menuitems,
                'message'=>$message,
                'chapters' => $this->chapters,
            ]);
    }
    public function types(){
        $types = Type::all()->pluck('type', 'id')->toArray();
        //dd($types);
        $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link'])->toArray();
        $paginator1 = Product::where('type_id', 1)->paginate(6);
        $paginator2 = Product::where('type_id', 2)->paginate(6);
        $paginator3 = Product::where('type_id', 3)->paginate(6);
        $paginator4 = Product::where('type_id', 4)->paginate(6);
        $paginator5 = Product::where('type_id', 5)->paginate(6);
        $paginator6 = Product::where('type_id', 6)->paginate(6);
        $paginator7 = Product::where('type_id', 7)->paginate(6);
        $paginator8 = Product::where('type_id', 8)->paginate(6);
        $paginator9 = Product::where('type_id', 9)->paginate(6);
        $paginator10 = Product::where('type_id', 10)->paginate(6);
        $paginator11 = Product::where('type_id', 11)->paginate(6);
        //dd($products);
        return view('default.types')->with([
            'menuitems' => $menuitems,
            'types' => $types,
            'paginator1' => $paginator1,
            'paginator2' => $paginator2,
            'paginator3' => $paginator3,
            'paginator4' => $paginator4,
            'paginator5' => $paginator5,
            'paginator6' => $paginator6,
            'paginator7' => $paginator7,
            'paginator8' => $paginator8,
            'paginator9' => $paginator9,
            'paginator10' => $paginator10,
            'paginator11' => $paginator11,
        ]);
    }


    public function contactus(Request $request, )
    {
        $menuitems = Page::orderBy('orderby', 'asc')->get(['id', 'title', 'link'])->toArray();
        $email = new Message();
        $message = 'we have received your message, thank you!';
        try{
            $email->name = $request->name;
            $email->surname =  $request->surname;
            $email->email = $request->email;
            $email->message = $request->message;
            $email->save();
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
        return view('default.contact')->with([
            'menuitems' => $menuitems,
            'message' => $message,
        ]);
    }


    //выводит страницу About
    public function about(){
        //$result = $this->model->gettext('main', 'about');
        $text = Page::where('id', 5)->get()->toArray();

        return view ('layouts.default.about')->with([
            'text' => $text,

            'topmenu' => $this->topmenu,
            'news'=> $this->news,
            'images' => $this->images,
            'classmenu' => $this->classmenu,
            'sidemenu' => $this->sidemenu,
            'chapters' => $this->chapters,
        ]);

    }
}
