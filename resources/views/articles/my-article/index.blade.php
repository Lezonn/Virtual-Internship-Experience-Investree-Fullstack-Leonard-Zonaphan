@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Articles</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/my-article/create" class="btn btn-primary mb-3">Create new article</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($articles as $article)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->category->name }}</td>
            <td>
                <a href="/my-article/{{ $article->id }}" class="badge bg-info"><i class="size-16" data-feather="eye"></i></a>
                <a href="/my-article/{{ $article->id }}/edit" class="badge bg-warning"><i class="size-16" data-feather="edit"></i></a>
                <form action="/my-article/{{ $article->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="size-16" data-feather="x-circle"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

@endsection
