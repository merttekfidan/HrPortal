<div class="form-group">
  <label for="accountingPeriod">Accounting Period</label>
  <select class="form-control form-control-sm" id="accountingPeriod" name="accountingPeriod">
    @foreach ($accountingPeriods as $value)
      <option value="{{$value->id}}" {{isset($course->accounting_period_id) && $course->accounting_period_id===$value->id ? 'selected':''}}>{{$value->period}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="semester">Semester</label>
  <select class="form-control form-control-sm" id="semester" name="semester">
    @foreach ($semesters as $value)
      <option value="{{$value->id}}" {{isset($course->semester_id) && $course->semester_id===$value->id ? 'selected':''}}>{{$value->semester_name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="term">Term</label>
  <select class="form-control form-control-sm" id="term" name="term">
    @foreach ($terms as $value)
      <option value="{{$value->id}}" {{isset($course->term_id) && $course->term_id===$value->id ? 'selected':''}}>{{$value->term_name}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="language">Language</label>
  <select class="form-control form-control-sm" id="language" name="language">
    @foreach ($languages as $value)
      <option value="{{$value->id}}" {{isset($course->language_id) && $course->language_id===$value->id ? 'selected':''}}>{{$value->language}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="languageIfOthers">Other language</label>
  <input type="text" class="form-control form-control-sm" id="languageIfOthers" name="languageIfOthers" value="{{isset($course->language_if_others) ? $course->language_if_others : ''}}">
</div>
<div class="form-group">
  <label for="nameOfSubject">Name of subject</label>
  <input type="text" class="form-control form-control-sm" id="nameOfSubject" name="nameOfSubject" value="{{isset($course->name_of_subject) ? $course->name_of_subject : ''}}">
</div>
<div class="form-group">
  <label for="numberOfHoursPlanned">Number of hours planned</label>
  <input type="text" class="form-control form-control-sm" id="numberOfHoursPlanned" name="numberOfHoursPlanned" value="{{isset($course->number_of_hours_planned) ? $course->number_of_hours_planned : ''}}">
</div>
<div class="form-group">
  <label for="hoursOfConductedLessons">Hours of conducted</label>
  <input type="text" class="form-control form-control-sm" id="hoursOfConductedLessons" name="hoursOfConductedLessons" value="{{isset($course->hours_of_conducted_lessons) ? $course->hours_of_conducted_lessons : ''}}">
</div>
<div class="form-group">
  <label for="numberOfHoursRealConducted">Number of hours real conducted</label>
  <input type="text" class="form-control form-control-sm" id="numberOfHoursRealConducted" name="numberOfHoursRealConducted" value="{{isset($course->number_of_hours_real_conducted) ? $course->number_of_hours_real_conducted : ''}}">
</div>
<div class="form-group">
  <label for="otherInformation">Other information</label>
  <input type="text" class="form-control form-control-sm" id="otherInformation" name="otherInformation" value="{{isset($course->other_information) ? $course->other_information : ''}}">
</div>
<div class="form-group">
  <label for="studentSemester">Student semester</label>
  <select class="form-control form-control-sm" id="studentSemester" name="studentSemester">
    @for ($i=1; $i<8; $i++)
      <option value="{{$i}}" {{isset($course->student_semester) && $course->student_semester===$i ? 'selected':''}}>{{$i}}</option>
    @endfor
  </select>
</div>
<div class="form-group">
  <label for="day">Day</label>
  <input type="text" class="form-control form-control-sm" id="day" name="day" value="{{isset($course->day) ? $course->day : ''}}">
</div>
<div class="form-group">
  <label for="dates">Dates</label>
  <input type="text" class="form-control form-control-sm" id="dates" name="dates" value="{{isset($course->dates) ? $course->dates : ''}}">
</div>
<div class="form-group">
  <label for="rooms">Rooms</label>
  <input type="text" class="form-control form-control-sm" id="rooms" name="rooms" value="{{isset($course->rooms) ? $course->rooms : ''}}">
</div>
<button type="submit" class="btn btn-primary">{{$buttonText}}</button>
