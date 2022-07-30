@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $article->title }}</h1>

            <p>By. {{ $article->user->name }} in {{ $article->category->name }}</p>

            <img src={{ $article->image ? asset('storage/' . $article->image) : 'https://source.unsplash.com/1200x400?' . $article->category->name }} class="img-fluid" alt="...">

            <article class="my-3 fs-5">
                {!! $article->content !!}
            </article>


            <a href="/" class="mt-3 d-block">Back to Articles</a>
        </div>
    </div>
</div>

@endsection
