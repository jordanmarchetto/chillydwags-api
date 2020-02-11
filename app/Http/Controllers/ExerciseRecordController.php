<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\ExerciseRecord;


class ExerciseRecordController extends Controller
{

	public function index(){
		return ExerciseRecord::all();
	}
	public function show($id) {
		try {
			$record = ExerciseRecord::findOrFail($id);
			return $record;
		} catch (ModelNotFoundException $e) {
			return response()->json(['Not Found' => 'ExerciseRecord not found.'], 404);
		}
	}

	public function store(Request $request) {
		try {
			return ExerciseRecord::create($request->all());
		} catch(QueryException $e){
			return response()->json(['Failure' => 'ExerciseRecord not added.'], 400);
		}
	}

	public function update(Request $request, $id) {
		try {
			$record = ExerciseRecord::findOrFail($id);
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'ExerciseRecord not updated.'], 400);
		}

		$record->update($request->all());
		return $record;
	}

	public function delete(Request $request, $id) {
		try {
			$record = ExerciseRecord::findOrFail($id);
			$record->delete();
			return response()->json(['Success' => 'ExerciseRecord removed.'], 200); //could also return 204 (no content)
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'ExerciseRecord not found.'], 400);
		}

	}
	//
}

