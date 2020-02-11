<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Exercise;


class ExerciseController extends Controller
{

	public function index(){
		return Exercise::all();
	}
	public function show($id) {
		try {
			$exercise = Exercise::findOrFail($id);
			return $exercise;
		} catch (ModelNotFoundException $e) {
			return response()->json(['Not Found' => 'Exercise not found.'], 404);
		}
	}

	public function store(Request $request) {
		try {
			return Exercise::create($request->all());
		} catch(QueryException $e){
			return response()->json(['Failure' => 'Exercise not added.'], 400);
		}
	}

	public function update(Request $request, $id) {
		try {
			$exercise = Exercise::findOrFail($id);
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'Exercise not updated.'], 400);
		}

		$exercise->update($request->all());
		return $exercise;
	}

	public function delete(Request $request, $id) {
		try {
			$exercise = Exercise::findOrFail($id);
			$exercise->delete();
			return response()->json(['Success' => 'Exercise removed.'], 200); //could also return 204 (no content)
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'Exercise not found.'], 400);
		}

	}
	//
}
