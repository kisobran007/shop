@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-4 offset-4">
        <h1>Sign Up</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{!! $errors->first() !!}</p>
                @endforeach
            </div>
        @endif
        <form action="{{route('postsignup')}}" method="POST">
            <div class="form-group">
              <label for="email"></label>
              <input class="form-control" type="text" id="email" name="email" value="{{old('email')}}">
              <small id="helpId" class="text-muted">Input your email</small>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input class="form-control" type="password" id="password" name="password">
                <small id="helpId" class="text-muted">Input your password</small>
              </div>
              <button type="submit" class="btn btn-primary">Sign Up</button>
              {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection
