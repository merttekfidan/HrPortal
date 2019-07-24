<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountingPeriod;
use App\Models\Term;
use App\Models\Semester;
use App\Models\Language;
use App\Models\TypeOfClass;
use App\Models\Course;

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
    public function index()
    {
        $course= Course::all();
        return view('pages.activities.course.index')
        ->with('course', $course);
    }
    public function create()
    {
        $accPerArr=$this->getAccountinPeriods();
        $semesterArr=$this->getSemesters();
        $termArr=$this->getTerms();
        return view('pages.activities.course.create')
        ->with('accountingPeriods', $accPerArr)
        ->with('semesters', $semesterArr)
        ->with('terms', $termArr);
    }
    public function edit($id)
    {
        $accPerArr=$this->getAccountinPeriods();
        $semesterArr=$this->getSemesters();
        $termArr=$this->getTerms();
        $course = Course::find($id);
        return view('pages.activities.course.edit')
        ->with('accountingPeriods', $accPerArr)
        ->with('semesters', $semesterArr)
        ->with('terms', $termArr)
        ->with('course', $course);
    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('pages.activities.course.show', compact('courses'));
    }
    public function update(Request $requests)
    {
        return redirect('/course')->with('success', 'Updated');
    }
}
