@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View Superhero 
    </div> 

    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 

      <div class="form-group"> 
        <label for="real_name">Real Name:</label> 
        <input type="text" class="form-control" name="real_name" value="{{ $superhero->real_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="hero_name">Superhero Name:</label> 
        <input type="text" class="form-control" name="hero_name" value="{{ $superhero->hero_name }}" disabled /> 

      </div> 
      <div class="form-group"> 
        <label for="symptoms">Description :</label> 
        <textarea rows="5" columns="5" class="form-control" name="description" disabled>{{ $superhero->description }}</textarea> 
      </div> 
      <div class="form-group">
        <label>Photo:</label>
        <div><img src="{{ $superhero->photo }}" alt="{{ $superhero->hero_name }}" width="200" /></div>
      </div>
      <a href="{{ route('superhero.edit', $superhero->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('superhero.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 