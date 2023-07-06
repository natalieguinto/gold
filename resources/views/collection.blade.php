@extends('layout.app');

@section('title')
    Collection
@endsection

@section('content')
 <h1>>You are on the Collection Page</h1>
@if(auth()->check())
 <div>
    Para lang sa mga nakalogin
 </div>
 @endif
@endsection
