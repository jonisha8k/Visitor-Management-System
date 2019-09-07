<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Visit;
use App\Pass;

class AppointmentsController extends Controller
{
	public function Index(){
		$visits = Visit::all();
		return view('admin.visits.index', compact('visits'));
	}

	public function form(){
		return view('appointment.form');
	}

	public function accept($id){
		$pass = new Pass;
		$pass->visit_id = $id;
		$pass->visitor_id = Visit::find($id)->visitor_id;
		$pass->description = rand(10000, 99999);
		$pass->type="daily";
		$pass->save();
		echo "<script>alert('Request Accepted')</script>";
		return redirect('/admin/visits');
	}
		
	public function delete($id){
		$apps=Visit::findOrFail($id)->delete();
			
		echo "<script>alert('Request Declined')</script>";
		return redirect('admin/visits');
		return redirect('/admin/visits');
		
	}

}
	

