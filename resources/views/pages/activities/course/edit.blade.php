@extends('theme.layout')
@section('formName','Course')
@section('content')

  <form method="POST" action="{{route('course.update',$course->id)}}">
    @csrf
    {{ method_field('PUT') }}
    @include("pages.activities.course._form",['buttonText'=>"Edit"])
  </form>
@endsection
