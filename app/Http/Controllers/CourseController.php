<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountingPeriod;
use App\Models\Term;
use App\Models\Semester;
use App\Models\Language;
use App\Models\TypeOfClass;
use App\Models\Course;
use App\Models\Entity;

class CourseController extends Controller
{
    private function getAccountinPeriods()
    {
        $accountingPeriods = AccountingPeriod::all();
        return $accountingPeriods;
    }
    private function getSemesters()
    {
        $semesters = Semester::all();
        return $semesters;
    }
    private function getTerms()
    {
        $terms = Term::all();
        return $terms;
    }
    private function getLanguages()
    {
        $languages = Language::all();
        return $languages;
    }
    public function index()
    {
        $course= Course::all();
        return view('pages.activities.course.index')
        ->with('course', $course);
    }
    public function create()
    {
        $accPer=$this->getAccountinPeriods();
        $semester=$this->getSemesters();
        $term=$this->getTerms();
        $language=$this->getLanguages();
        return view('pages.activities.course.create')
        ->with('accountingPeriods', $accPer)
        ->with('semesters', $semester)
        ->with('terms', $term)
        ->with('languages', $language);
    }
    public function store(Request $request)
    {
        $course = new Course;
        $entity = new Entity;
        $entity->user_id = "1";
        $entity->entity_form_id = "1";
        $entity->save();

        $course->accounting_period_id = $request->accountingPeriod;
        $course->semester_id = $request->semester;
        $course->term_id = $request->term;
        $course->name_of_subject = $request->nameOfSubject;
        $course->language_id = $request->language;
        $entity->courses()->save($course);
        return redirect()->route('course.index')->with('success', 'A new course is added');
    }
    public function edit($id)
    {
        $accPer=$this->getAccountinPeriods();
        $semester=$this->getSemesters();
        $term=$this->getTerms();
        $language=$this->getLanguages();
        $course = Course::find($id);
        return view('pages.activities.course.edit')
        ->with('accountingPeriods', $accPer)
        ->with('semesters', $semester)
        ->with('terms', $term)
        ->with('languages', $language)
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

        $course->accounting_period_id = $request->accountingPeriod;
        $course->semester_id = $request->semester;
        $course->term_id = $request->term;
        $course->name_of_subject = $request->nameOfSubject;
        $course->language_id = $request->language;
        $entity->courses()->save($course);
        return redirect()->route('course.index')->with('success', 'Updated');
    }
}
