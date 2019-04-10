<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Player;

class PlayerController extends Controller {
	public function index(){
		return Player::all();
	}
	public function show($id) {
		try {
			$player = Player::findOrFail($id);
			return $player;
		} catch (ModelNotFoundException $e) {
			return response()->json(['Not Found' => 'Player not found.'], 404);
		}
	}

	public function store(Request $request) {
		try {
			return Player::create($request->all());
		} catch(QueryException $e){
			return response()->json(['Failure' => 'Player not added.'], 400);
		}
	}

	public function update(Request $request, $id) {
		try {
			$player = Player::findOrFail($id);
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'Player not updated.'], 400);
		}

		$player->update($request->all());
		return $player;
	}

	public function delete(Request $request, $id) {
		try {
			$player = Player::findOrFail($id);
			$player->delete();
			return response()->json(['Success' => 'Player removed.'], 200); //could also return 204 (no content)
		} catch (ModelNotFoundException $e) {
			return response()->json(['Failure' => 'Player not found.'], 400);
		}

	}
}
