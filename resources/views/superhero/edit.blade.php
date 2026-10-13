@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Edit Superhero 
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
      <form method="post" action="{{ route('superhero.update', $superhero->id) }}"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group"> 
          <label for="real_name">Real Name:</label> 
          <input type="text" class="form-control" name="real_name" value="{{ $superhero->real_name }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="hero_name">Superhero Name:</label> 
          <input type="text" class="form-control" name="hero_name" value="{{ $superhero->hero_name }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="photo">Photo URL:</label> 
          <input type="text" class="form-control" name="photo" value="{{ $superhero->photo }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="symptoms">Description :</label> 
          <textarea rows="5" columns="5" class="form-control" name="description">{{ $superhero->description }}</textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('superhero.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection 