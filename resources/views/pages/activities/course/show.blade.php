@extends('theme.layout')
@section('formName','Course')
@section('content')

  <form method="post" action="/course">
    @csrf
    <div class="form-group">
      <label for="accountinPeriod">Accounting Period</label>
      <select class="form-control form-control-sm" id="accountinPeriod" name="accountinPeriod">
        @foreach ($accountingPeriods as $value)
          <option value="{{$value->id}}">{{$value->period}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="semester">Semester</label>
      <select class="form-control form-control-sm" id="semester" name="semester">
        @foreach ($semesters as $value)
          <option value="{{$value->id}}">{{$value->semester_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="term">Term</label>
      <select class="form-control form-control-sm" id="term" name="term">
        @foreach ($terms as $value)
          <option value="{{$value->id}}">{{$value->term_name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="nameOfSubject">Name of subject</label>
      <input type="text" class="form-control form-control-sm" id="nameOfSubject" name="nameOfSubject">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
