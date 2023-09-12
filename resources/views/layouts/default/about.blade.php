@extends('welcome')

@section('content')

    <div class="p-10 font-bold text-3xl">{{ $text[0]['title_ru'] }}</div>

    <div class="lead container">
        {!!  $text[0]['content_ru'] !!}

    </div>








    </div>

    </div>
    </div>







@endsection
