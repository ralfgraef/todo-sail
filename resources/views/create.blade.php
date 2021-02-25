@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section class="flex-shrink-0">
  <div class="container">
    <h3 class="mt-5">Create new Todo</h3>
    <form method="post" action="/create" enctype="multipart/form-data">
      @csrf
      <div class="input-group mb-3">
          <input type="text" name="title" class="form-control" value="" placeholder="Add new todo...">
          <button type="submit" class="btn btn-primary">Add</button>
      </div>
  </form>
  </div>
</section>

@endsection