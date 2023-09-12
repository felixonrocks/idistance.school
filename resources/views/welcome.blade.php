

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>iSchool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

      body{
          padding:0;
          margin: 0;
          font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
          font-size: 1rem;
          font-weight: 400;
          line-height: 1.5;
          color: #212529;
          text-align: left;
          background-color: #fff!important;
      }

      li{
          list-style-type: none;
          padding-right: 15px;
          text-decoration: none;
      }



      .btn{
          border-radius: 7px;
          border: 1px solid #17a2b8;
          color: #17a2b8;
          background-color: white;
          padding: 5px;
          width: 70px;
          padding: 5px;
      }

      h2{color: #17a2b8;}

      input{
          border-radius: 7px;
          border: 1px solid #17a2b8;
          padding: 5px;
          color: #17a2b8;
      }



      .FI{
          width: 400px;
          display:inline;

      }

      .form-inline{
          max-height: 40px;
          display:flex;
          flex-flow: row wrap;
          align-items: center;
      }

      .form-control, .btn{
          margin: 0;
          padding: .375rem .75rem;
          font-size: 1rem;
          line-height: 1.5;
          color: #495057;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          border-radius: .25rem;
          transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }

      .btn{
          color: #17a2b8;
        background-color: transparent;
        background-image: none;
        border-color: #28a745;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid #17a2b8;
        padding: .375rem .75rem;
        margin-left: 7px;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }

      .modules, .themes{
        color: #369;
        text-decoration: none;
        text-decoration-line: none;
        text-decoration-thickness: initial;
        text-decoration-style: initial;
        text-decoration-color: initial;
        /*display: block;*/



      }

      .themes{
          font-size: .8em;

      }


      .maincontainer{
        max-width: 80%;

      }

      .sidecontainer{
        padding-top: 40px;
        padding-left:-40px;

      }

      .SM{
        padding:0;
      }

      ul{
        margin-top: 0px;
        padding-top: 0;
      }

      .container-xxl{
          margin:0
      }

      .tm1{
        padding:0;
        margin:0;
      }

      a{
        text-decoration:none;
        text-decoration-line: none;
        text-decoration-thickness: initial;
        text-decoration-style: initial;
        text-decoration-color: initial;
        color: #369;
      }

      a:active {
          color: none;
      }
      a:hover{
        color: #007bff;
      }

      .collapsible{outline: none;}

      .content{ display: none;
          overflow: hidden; cursor: pointer; outline: none; padding: 0 18px;}

      details > summary {
          list-style: none;
      }

      details > summary::marker, /* Latest Chrome, Edge, Firefox */
      details > summary::-webkit-details-marker /* Safari */ {
          display: none;
      }



      /* SMALL DEVICES */
      @media only screen and (max-width: 667px){
        .maincontainer{
          max-width:870px;
          /* margin-top:500px; */
          /* padding-top: 400px; */
          }
        .topcontainer, .MTC {
          min-height: 60px;
          margin-top:0px;
          padding-top:0;
          max-height:150px;
        }
        .sidecontainer {
          /* min-width: 700px; */
          padding-left: 0
        }

        .body, .container, .row{
          font-size: 19px;
        }
        .MCC{
          /* padding-top: 200px; */
          padding-left:60px;
        }


        .TM, .TM1{
          max-height: 50px;
          max-width: 375px;
          margin-top: 0;
          justify-content:center;
        }

        .nav-link{
          margin-top:-5px;
        }

        .FI{

        }
        .form-inline{
          justify-content:center;
        }
        h2{
          font-size: 30px;
        }
        .footer{
          max-height: 30px!important;


        }
        .F{
          padding-top:10px;
        }

        li{
          padding-top: 3px;
          padding-bottom:3px;
        }
      }



      /* MEDIUM DEVICES */
      @media only screen and (max-width: 991px){

        .maincontainer{
          max-width:370px;
          /* padding-top: 600px; */
          /* margin-top:500px; */
        }


        .topcontainer, .MTC{
          /* min-height: 210px; */
          margin-top:0;
          padding-top:0;

        }

        .TM{
          min-height:60px;
        }

        .sidecontainer{
          /* min-width: 200px; */

        }
        .body, .container, .row{
          margin:0;
          padding:0;
        }
        .MCC{
          /* padding-top: 200px; */
        }

        .form-control{
          width: 160px;
          padding-right: 10px;
        }
        .F{
          padding-top:17px;
          font-size: 17px;
        }
      }


    </style>


</head>


<body class=" ">



<!-- MAIN SECTION -->

<header class="bg-light">
<div class="col-sm-1 col-md-8 py-1 maincontainer h-full flex inline-flex text-center items-center bg-gray-50 w-[100%]">

{{--    TOPMENU--}}
    <nav class="flex inline-flex text-center items-center bg-light">
        <a href="{{ env('APP_URL') }}"><img src="{{ env('APP_URL').'/img/logo1.png' }}" class="w-[40px]"></a>
        <h2>Ischool<?php //=$title; ?><!----></h2>
        @foreach($topmenu as $item)
            <a href="{{ env('APP_URL').'/'.$item['link'] }}"><p class="px-2 text-[#007bff]">{{ $item['title_'.app()->getLocale()]  }}</p></a>
        @endforeach

    {{--SEARCH--}}
        <form class="flex inline-flex items-center text-center h-[100%] my-2 my-lg-0  " action="#" method="POST">
            @CSRF

            <input class="rounded h-[25px] my-auto border-gray-300 mr-sm-2" type="search" name="search" placeholder="Search" >
            <button class="btn success text-success border-success h-[25px] text-center items-center my-2 my-sm-0" type="submit" name="search">search</button>
        </form>

    {{--    LANGAUGE TOGGLE--}}
        <div class="fixed top-0 right-2 px-3 py-1 sm:block bg-light ">
            @foreach(config('app.available_locales') as $area)
                <a href="{{request()->url() }}?language={{ $area }}"
                   class="@if ( app()->getLocale() == $area ) border-b border-white border-b-2  @endif inline-flex items-center px-1">
                    {{strtoupper($area)}}
                </a>
            @endforeach
        </div>
    </nav>
{{--    LOGIN--}}
    <div class="relative flex items-top justify-center  sm:items-center sm:pt-0 " >
                    @if (Route::has('login'))
                        <div class="hidden fixed top-11 right-7  sm:block ">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700  underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700  underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
            </div>

</div>


{{--CLASSES MENU--}}
<nav class="flex inline-flex shadow-sm py-2 w-full bg-white">
    @foreach($classmenu as $item)
        <a href="{{ route('classes.show', $item['id']) }}"><div class="px-4 text-[#007bff]"> {{ $item['title'] }}</div></a>


    @endforeach


</nav>
</header>

{{--MAIN--}}
<section class="flex inline-flex  w-full min-h-full   ">
    {{--LEFT MENU--}}
        <nav class="px-4 w-[200px] pt-12  bg-light text-[#369] modules   flex flex-col  items-start h-screen ">


            @foreach($sidemenu as $course)
                <details >
                        <summary  class="list-unstyled  mb-1 nav-item">
                            {{ $course->{'title_'.app()->getLocale()} }}
                        </summary>
                                @foreach( $chapters->where('course_id', $course->id) as $chapter)


                                        <li class="ml-8  ">
                                            <a href="{{ route('chapters.show', $chapter->id) }}" class=" themes">
                                                <p>{{ $chapter->title_ru }}</p>
                                            </a>
                                        </li>
                                @endforeach
                </details>
            @endforeach




        </nav>
    <main class="w-full ml-4 ">
     @yield('content')
    </main>
</section>




</body>

<footer class="flex inline-flex bg-gray-50  text-gray-500 h-[50px] text-sm  items-center m-auto w-full mb-2 pl-2" >


    <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>

                                <a href="#" class="ml-1 underline">
                                    Shop
                                </a>
    </div>

    {{--                            FB--}}
                            <a href="#" class="m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>

   <p class="pl-2"> &copy; 2018-2023 idistance.school</p>
</footer>
</html>





{{--<script>--}}
{{--    var coll = document.getElementsByClassName("collapsible");--}}
{{--    var i;--}}

{{--    for (i = 0; i < coll.length; i++) {--}}
{{--        coll[i].addEventListener("click", function() {--}}
{{--            this.classList.toggle("active");--}}
{{--            var content = this.nextElementSibling;--}}
{{--            if (content.style.display === "block") {--}}
{{--                content.style.display = "none";--}}
{{--            } else {--}}
{{--                content.style.display = "block";--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}
