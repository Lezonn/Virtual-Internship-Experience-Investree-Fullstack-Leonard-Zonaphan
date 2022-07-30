@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $article->title }}</h1>

            <a href="/my-article" class="btn btn-success"><span data-feather="arrow-left"></span>Back to my article</a>

            <div>
                <img style="max-width:100%;" src={{ $article->image ? asset('storage/' . $article->image) : 'https://source.unsplash.com/1200x400?' . $article->category->name }} class="img-fluid mt-3" alt="{{ $article->category->name }}">
            </div>

            <article class="my-3 fs-5">
                {!! $article->content !!}
            </article>
        </div>
    </div>
</div>
@endsection
