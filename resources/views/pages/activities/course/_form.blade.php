<div class="form-group">
  <label for="accountinPeriod">Accounting Period</label>
  <select class="form-control form-control-sm" id="accountinPeriod" name="accountinPeriod">
    @foreach ($accountingPeriods as $value)
      <option value="{{$value->id}}" {{isset($accPerArr) && $accPerId===$value->id ? 'selected':''}}>{{$value->period}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="semester">Semester</label>
  <select class="form-control form-control-sm" id="semester" name="semester">
    @foreach ($semesters as $value)
      <option value="{{$value->id}}" {{isset($semesterId) && $semesterId===$value->id ? 'selected':''}}>{{$value->semester_name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="term">Term</label>
  <select class="form-control form-control-sm" id="term" name="term">
    @foreach ($terms as $value)
      <option value="{{$value->id}}" {{isset($termId) && $termId===$value->id ? 'selected':''}}>{{$value->term_name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="nameOfSubject">Name of subject</label>
  <input type="text" class="form-control form-control-sm" id="nameOfSubject" name="nameOfSubject" value="{{isset($nameOfSubject) ? $nameOfSubject : ''}}">
</div>
<button type="submit" class="btn btn-primary">{{$buttonText}}</button>
