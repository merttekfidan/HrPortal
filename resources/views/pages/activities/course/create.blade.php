@extends('theme.layout')
@section('formName','Course')
@section('content')
  <form method="post" action="{{route('course.store')}}">
    @csrf
    @include("pages.activities.course._form",['buttonText'=>"Create"])
  </form>
@endsection
