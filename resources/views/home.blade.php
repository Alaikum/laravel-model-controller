@extends('layouts.app')
@section('metaTitle', 'Homa Page')

@section('content')
    <div class="container">

        <h1>Homepage</h1>
        <div class="cards">

            @foreach ($movies as $item)
                <div class="row">

                    <a href="{{ route('movie.show', $item) }}">
                        <h2>
                            {{ $item->title }}
                        </h2>
                    </a>
                    <p>{{ $item->vote }}</p>
                </div>
            @endforeach
        </div>

    </div>
@endsection
