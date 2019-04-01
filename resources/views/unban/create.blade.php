@extends('layout')

@section('title', 'home')

@section('content')

<h1>Create</h1>



   <form method="POST" action="{{ route('unban.store') }}">
 	


          <div class="form-group">
              @csrf
              <label for="firstname">Voornaam</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <div class="form-group">
              <label for="lastname">Achternaam</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
              <label for="description">Beschrijving</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>




@endsection