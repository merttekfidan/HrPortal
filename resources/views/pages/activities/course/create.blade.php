@extends('theme.layout')
@section('formName','Course')
@section('content')

  <form method="get" action="{{route('course.create')}}">
    @csrf
    @include("pages.activities.course._form",['buttonText'=>"Create"])
  </form>
@endsection
