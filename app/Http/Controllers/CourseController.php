<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\SelectboxGet;

class CourseController extends Controller
{
    public function index()
    {
        $course= Course::all();
        return view('pages.activities.course.index')
        ->with('course', $course);
    }

    public function create(SelectboxGet $selectboxGet)
    {
        $selectboxes= array('accountingPeriods', 'semesters', 'terms', 'languages');
        return view('pages.activities.course.create')->with($selectboxGet->fillSelectbox($selectboxes));
    }
    private function mergeFields($request)
    {
        $course = new Course;
        $course->accounting_period_id = $request->accountingPeriod;
        $course->semester_id = $request->semester;
        $course->term_id = $request->term;
        $course->language_id = $request->language;
        $course->language_if_others = $request->languageIfOthers;
        $course->name_of_subject = $request->nameOfSubject;
        $course->number_of_hours_planned = $request->numberOfHoursPlanned;
        $course->hours_of_conducted_lessons = $request->hoursOfConductedLessons;
        $course->number_of_hours_real_conducted = $request->numberOfHoursRealConducted;
        $course->other_information = $request->otherInformation;
        $course->student_semester = $request->studentSemester;
        $course->day = $request->day;
        $course->dates = $request->dates;
        $course->rooms = $request->rooms;
        return $course;
    }
    public function store(Request $request, Entity $entity)
    {
        $entity->user_id = "1";
        $entity->entity_form_id = "1";
        $entity->save();
        $course= $this->mergeFields($request);
        $entity->courses()->save($course);


        return redirect()->route('course.index')->with('success', 'A new course is added');
    }

    public function edit($id, SelectboxGet $selectboxGet)
    {
        $course = Course::find($id);
        $selectboxes= array('accountingPeriods', 'semesters', 'terms', 'languages');
        return view('pages.activities.course.edit')->with($this->fillSelectbox($selectboxes))
        ->with('course', $course);
    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('pages.activities.course.show', compact('courses'));
    }
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $entity = Entity::find($course->entity_id);
        $entity->user_id = "1";
        $entity->entity_form_id = "1";
        //to update updated_at column
        $entity->touch();
        $entity->save();

        $course= $this->mergeFields($request);
        $entity->courses()->save($course);
        return redirect()->route('course.index')->with('success', 'Updated');
    }
}
