<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Matericourse;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;

class CourseUserController extends Controller
{
    public function showCourse($id)
    {
        $materi = Matericourse::where('course_id', '=', $id)->get();
        $read = Course::find($id);
        return view('user.course.read_course',compact('read', 'materi'));
    }

    public function moreCourse()
    {
        $ct = Category::all();
        $sct = Subcategory::all();
        return view('user.course.all_course', [
            'more' => Course::latest()->paginate(8),
            'ct' => $ct,
            'sct' => $sct,
        ]);
    }

    public function sortByCategory($id)
    {
        $ct = Category::all();
        $sct = Subcategory::all();
        $itemCt = DB::table('courses')->where('id_subcategory', '=', $id)->get();
        return view('user.course.bySubcategory', compact('itemCt', 'ct', 'sct'));
    }

    public function readKelas($id)
    {
        $materi = Matericourse::where('course_id', '=', $id)->get();
        $read = Course::find($id);
        return view('user.kelas.read_kelas',compact('read', 'materi'));
    }
}
