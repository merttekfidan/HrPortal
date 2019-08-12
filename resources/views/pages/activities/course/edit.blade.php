@extends('theme.layout')
@section('formName','Course')
@section('content')

  <form class="form-edit" method="POST" action="{{route('course.update',$course->id)}}">
    @csrf
    {{ method_field('PUT') }}
    @include("pages.activities.course._form",['buttonText'=>"Edit"])
  </form>
  <form class="form-delete" method="POST" action="{{route('course.destroy',$course->id)}}">
    @csrf
    {{method_field('delete')}}
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
@endsection
