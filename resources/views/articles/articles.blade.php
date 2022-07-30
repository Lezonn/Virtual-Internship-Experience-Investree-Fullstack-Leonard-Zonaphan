@extends('layouts.main')

@section('container')
    @if ($articles->count())
        <div class="card mb-3">
            <div style="max-height: 350px; overflow:hidden;">
                <img src={{ $articles[0]->image ? asset('storage/' . $articles[0]->image) : 'https://source.unsplash.com/1200x400?' . $articles[0]->category->name }} class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/{{ $articles[0]->id }}" class="text-decoration-none text-dark">{{ $articles[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. {{ $articles[0]->user->name }} in {{ $articles[0]->category->name }} {{ $articles[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <a href="/{{ $articles[0]->id }}" class="btn btn-primary text-decoration-none">Read article</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($articles->skip(1) as $article)
                    <div class="col-md-4 mb-3">
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7);">{{ $article->category->name }}</div>
                            <img src={{ $article->image ? asset('storage/' . $article->image) : 'https://source.unsplash.com/1200x600?' . $article->category->name }} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="/{{ $article->id }}" class="text-decoration-none text-dark">{{ $article->title }}</a>
                                </h3>
                                <p>
                                    <small class="text-muted">
                                        By. {{ $article->user->name }} {{ $article->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            <a href="/{{ $article->id }}" class="btn btn-primary">Read article</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="fs-4 text-center">No article found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>



@endsection
