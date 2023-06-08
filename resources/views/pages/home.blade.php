@extends('layoutApp.app')

@section('content')
<h1>home page</h1>
<div class="background">
    <div class="banner"></div>
    <div class="container gap-3 py-5">
        <a href="#" class="btn  button p-2  px-4">current series</a>

        @foreach($comics as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{$item['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$item['title']}}</p>
            </div>
        </div>

        @endforeach

        <a href="#" class="load p-2  px-5">load more</a>

    </div>
</div>

@endsection