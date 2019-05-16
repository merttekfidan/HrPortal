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
    public function index()
    {
        return 'Go to /course/create';
    }
    public function create()
    {
        $accountingPeriods = AccountingPeriod::all();
        $semesters = Semester::all();
        $terms = Term::all();
        return view('pages.activities.course.create', compact('accountingPeriods', 'terms', 'semesters'));
    }
    public function store()
    {
        return request()->all();
    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('pages.activities.course.show', compact('courses'));
    }
}
