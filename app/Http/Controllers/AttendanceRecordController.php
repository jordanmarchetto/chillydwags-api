<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\AttendanceRecord;
use App\Player;
use App\User;
use DB;
use Log;

class AttendanceRecordController extends Controller
{
	 public function index(){
                return AttendanceRecord::all();
        }
	 public function all_csv(){
		 $output = "";
		 $all_players = Player::all();
		 $all_attendance = AttendanceRecord::all();

		 $output.= "Player,";
		 foreach($all_attendance as $record){
			 $output.=$record->created_at . ",";
		 }
		 $output.= "<br>";

		 foreach($all_players as $player){
			 $output.=$player->first_name . " " . $player->last_name . ",";
			 foreach($all_attendance as $record){
				$attendance_data = $record->attendance;
				foreach($attendance_data as $attendee){
					if($player->id == $attendee['id']){
						$output.=$attendee['present'] . "," ;
					}
				}
				//$t=json_decode($data[0][0]);
				//$output.=print_r($data[0],true);

			 //$output.= $player->first_name;
			}
			 $output.="<br>";
		 }
		 $output.= "Notes,";
		 foreach($all_attendance as $record){
			 $output.=$record->notes . ",";
		 }
		 $output.= "<br>";


		 $output.= "Recorded By,";
		 foreach($all_attendance as $record){
			 $user = User::where('id', $record->recorded_by)->first();
			 $output.=$user->name . ",";
		 }
		 $output.= "<br>";

		 return $output;
	 }

	 public function latest_csv(){
		$output = "";
		$latest = DB::table('attendance_records')->orderBy('created_at', 'desc')->first();

		$record = json_decode($latest->attendance);
		Log::debug($record);
			$output.="player_name,present, date created: " . $latest->created_at . "<br>";
		foreach($record as $player){
			$output.=$player->first_name . " " . $player->last_name . "," . $player->present;
			$output.="<br>";
			//Log::debug($player);
		}
		return $output;
	 }
        public function show($id) {
                try {
                        $player = AttendanceRecord::findOrFail($id);
                        return $player;
                } catch (ModelNotFoundException $e) {
                        return response()->json(['Not Found' => 'Attendance Record not found.'], 404);
                }
        }

        public function store(Request $request) {
                try {
                        return AttendanceRecord::create($request->all());
                } catch(QueryException $e){
                        return response()->json(['Failure' => 'Attendance Record not added.'], 400);
                }
        }

        public function update(Request $request, $id) {
                try {
                        $player = AttendanceRecord::findOrFail($id);
                } catch (ModelNotFoundException $e) {
                        return response()->json(['Failure' => 'Attendance Record not updated.'], 400);
                }

                $player->update($request->all());
                return $player;
        }
	 public function delete(Request $request, $id) {
                try {
                        $player = AttendanceRecord::findOrFail($id);
                        $player->delete();
                        return response()->json(['Success' => 'Attendance Record removed.'], 200); //could also return 204 (no content)
                } catch (ModelNotFoundException $e) {
                        return response()->json(['Failure' => 'Attendance Record not found.'], 400);
                }

        }
    //
}
