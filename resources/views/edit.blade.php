@extends('layouts.master')
@section('title', 'Edit Todo')
@section('content')

<section class="flex-shrink-0 mb-5">
  <div class="container">
    <h3 class="mt-5">Edit Todo</h3>
    <form method="post" action="{{ "/edit/".$todo['id'] }}" enctype="multipart/form-data">
      @csrf
      <div class="input-group mb-3">
          <input type="text" name="title" class="form-control" value="{{ $todo['title'] }}" placeholder="Add new todo...">
          <button type="submit" class="btn btn-primary">Add</button>
      </div>
  </form>
 
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  </div>
</section>
@endsection