@extends('layouts.master')

@section('title', 'Home')


@section('styles')


@endsection


@section('content')

    <div class="centered">
        <p>Hello World</p>
    </div>
    <ul>
        @for($i = 0; $i < 5; $i++)
            @if($i % 2 === 0) <!-- Kas antras -->

            <li>Iteration {{ $i + 1 }}</li>

            @endif
        @endfor
    </ul>

@endsection


@section('scripts')


@endsection
