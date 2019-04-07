@extends('layout')

@section('title', 'home')

@section('content')

<h1>Create</h1>



   <form method="post" action="{{ route('assignment.store') }}">
 	

  {{ csrf_field() }}

          <div class="form-group">
              
              <label for="name">Project_nameeee</label>
              <input type="text" class="form-control" name="project_name"/>
          </div>
          <div class="form-group">
              <label for="price">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="quantity">Image_url</label>
              <input type="text" class="form-control" name="image_url"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>

@endsection