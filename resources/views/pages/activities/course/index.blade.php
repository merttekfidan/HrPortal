@extends('theme.layout')
@section('formName','Courses')
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Accounting Period</th>
        <th scope="col">Semester</th>
        <th scope="col">Term</th>
        <th scope="col">Language</th>
        <th scope="col">Name of Subject</th>
        <th scope="col">Number Of Hours Planned</th>
        <th scope="col">Number Of Hours Real Conducted</th>
        <th scope="col">Rooms</th>
        <th scope="col">Type of Class</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($course as $value)
        <tr>
          <td>{{$value->accounting_periods->period}}</td>
          <td>{{$value->semesters->semester_name}}</td>
          <td>{{$value->terms->term_name}}</td>
          <td>{{$value->languages->language}}</td>
          <td>{{$value->name_of_subject}}</td>
          <td>{{$value->number_of_hours_planned}}</td>
          <td>{{$value->number_of_hours_real_conducted}}</td>
          <td>{{$value->rooms}}</td>
          <td>@foreach($value->classes as $typeOfClass)
                {{$typeOfClass->type_name}}
              @endforeach
          </td>
          <td><div class="ml-auto"><a href="{{route('course.edit',$value->id)}}" class="btn btn-sm btn-outline-info">Edit</a></div></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
