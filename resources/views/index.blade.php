@extends('app.layouts')
@section('title', 'Home')
@section('content')
    <main class="container mx-auto px-4 py-8">
        @include('partials.home.intro')

        @include('partials.home.play_matka')

        @include('partials.home.secure_bet')

        @include('partials.home.betting_trend')

        @include('partials.home.doubt_check')

    </main>
@endsection
