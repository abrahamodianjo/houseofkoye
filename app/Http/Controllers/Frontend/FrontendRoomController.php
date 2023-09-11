<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\MultiImage;
use App\Models\Facility;
use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;

class FrontendRoomController extends Controller
{
    public function AllFrontendRoomList(){

        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));

    }//End method

    public function RoomDetailsPage($id){

        $roomdetails = Room::find($id);
        $multiImage = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->get();

        //when other rooms display, dont display current room details on other rooms section
        $otherRooms = Room::where('id' ,'!=', $id)->orderBy('id', 'DESC')->limit(2)->get();
        return view('frontend.room.room_details',compact('roomdetails','facility','multiImage', 'otherRooms'));
    }//End Method

    public  function BookingSearch(Request $request){

        $request->flash();

        if($request->checkin == $request->check_out){
            
            $notification = array(
                'message' => 'Something Went Wrong',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        $sdate = date('Y-m-d',strtotime($request->check_in));
        $edate = date('Y-m-d',strtotime($request->check_out));
        $alldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate,$alldate);


    }//End Method
}
