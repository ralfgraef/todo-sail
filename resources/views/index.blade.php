@extends('layouts.master')
@section('title', 'Home')
@section('content')

<section class="flex-shrink-0 mb-5">
  <div class="container">
    <h3 class="mt-5">Create new Todo</h3>
    <form method="post" action="/create" enctype="multipart/form-data">
      @csrf
      <div class="input-group mb-3">
          <input type="text" name="title" class="form-control" value="" placeholder="Add new todo...">
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
<section class="flex-shrink-0">
  <div class="container">
    <h3>Todos:</h3>
      <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Checked</th>
            <th scope="col">Created Date</th>
            <th scope="col">Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todos as $todo)
            
            <tr>

              <td>{{ $todo['id'] }}</td>
              <td>{{ $todo['title'] }}</td>
              <td>{{ $todo['is_checked'] }}</td>
              <td>{{ $todo['created_at'] }}</td>
              <td>
                <a href={{ "edit/".$todo['id'] }} type='button' class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
              
                <form action={{ "delete/".$todo['id'] }} id="deleteForm" method="post" style="display: inline-block;">
                  @csrf
                  <input type="hidden" name="id" value="{{ $todo['id'] }}">
                  <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
     
  </div>
</section>
@endsection