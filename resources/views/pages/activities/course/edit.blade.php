@extends('theme.layout')
@section('formName','Course')
@section('content')

  <form method="get" action="{{route('course.edit',$course->id)}}">
    @csrf
    @include("pages.activities.course._form",
    ['buttonText'=>"Edit",
    'accPerId'=>$course->accounting_period_id,
    'semesterId'=>$course->semester_id,
    'termId'=>$course->term_id,
    'nameOfSubject'=>$course->name_of_subject])
  </form>
@endsection