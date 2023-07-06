@extends('layout.app');

@section('title')
    Packages
@endsection

@section('content')
 <h1>Your on the Packages Page</h1>
 @if(auth()->check())
  <div>
     Para lang sa mga nakalogin
  </div>
 @endif
@endsection
