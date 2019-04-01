@extends('layout')

@section('title', 'home')

@section('content')

<h1>Edit</h1>


 <form method="POST" action="/assignments/{{ $assignment->id }}">

  @method('PATCH')


          <div class="form-group">
              @csrf
              <label for="name">Project name edit</label>
              <input type="text" class="form-control" name="project_name" value="$assignment->project_name" />
          </div>
          <div class="form-group">
              <label for="price">Description edit</label>
              <input type="text" class="form-control" name="description" value="$assignment->description" />
          </div>
          <div class="form-group">
              <label for="quantity">Image_url edit</label>
              <input type="text" class="form-control" name="image_url" value="$assignment->image_url" />
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>

@endsection