@extends('layoutApp.app')

@section('content')
<div class="background">
    <div class="container gap-3 py-5">
        <a href="#" class="btn  button p-2  px-4">current series</a>

        @foreach($comics as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{$item['thumb']}}" alt="...">
            <div class="card-body">
                <p class="card-text">{{$item['title']}}</p>
                <p class="card-text">{{$item['price']}}</p>

            </div>
        </div>

        @endforeach

        <a href="#" class="load p-2  px-5">load more</a>
    </div>

    <div class="section-icon bg-primary">
        <div class="container">
            <div class="rows">
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
                <div class="icon-item">
                    <img class="icon-img" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p class="text-white p-icon">DIGITAL COMICS</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection