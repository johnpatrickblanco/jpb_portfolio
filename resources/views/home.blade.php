@extends('layouts.app')

@section('content')
    <main>
        @include('partials.header')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('partials.hero')
            @include('partials.about')
            @include('partials.education')
            @include('partials.projects')
            @include('partials.cta')
            @include('partials.footer')
        </div>
    </main>
@endsection