@extends('layouts.app')

@section('content')

<div>
    <a class="back__button" href="{{route('home')}}">back</a>
   
</div>

<div class="container__film">
    <p class="original__title">{{$original_title}}</p>
    <p class="title__film">"{{$title}}"</p>
    <p class="">Nationality: {{$nationality}}</p>
    <p class="">Date: {{$date}}</p>
    <p class="text__film">Desciption : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam, fugiat.</p>
    <p class="vote__film">{{$vote}}</p>
</div>

@endsection