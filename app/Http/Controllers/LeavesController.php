<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendence;
use App\Models\Bonus;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Salary;
use App\Models\month;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
class LeavesController extends Controller
{
   public function leave(){
      $users = User::where('status',1)->where('type','employee')->get();
      $months = month::get();
      $leaves=Leave::paginate(3);
    return view('admin.pages.include.leave',compact('users','months','leaves'));
   }

   public function leavestore(Request $request){
      $rules=[
         'user_id' => 'required|unique:leaves', 
         'month' => 'required', 
         'leave' => 'required', 
        
 
     ];
     $this->validate($request,$rules);
 
      $leave= new Leave();
      $leave->user_id=$request->input('user_id');
      $leave->month=$request->input('month');
      $leave->leave=$request->input('leave');
      $leave->create_by= Auth::User()->name;
     $leave->save();
      Toastr::success('leave create successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }

   public function leaveStatus($id){
      $leaveStatus= Leave::select('status')->where('user_id', $id)->first();
      if($leaveStatus->status==0){
         $status=1;
      }
      else{
         $status=0;
      }
      Leave::where('user_id', $id)->update(['status'=> $status]);
      return redirect()->back()->with('status','status update success');

   }
   public function delete($id)
   {
      $leaveDelete = Leave::find($id);
      $leaveDelete->delete();
      Toastr::Error('Delete successfully', 'success', [
         "positionClass" => "toast-top-right", "closeButton"
         =>
         "true", "progressBar" => "true"
      ]);
      return redirect()->back();
   }

   //  user leave

   public function userLeave(){
      $users= User::where('type','employee')->get();
      $months = month::get();
      $leaves=Leave::get();
      return view('user.pages.include.leave',compact('users','months','leaves'));
   }
}
