<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\faq;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class FaqController extends Controller
{
    public function AllFaq()
    {
        $faq = Faq::latest()->get();

        return view('backend.faq.all_faq', compact('faq'));
    } //end method

    public function AddFaq()
    {
        return view('backend.faq.add_faq');
    } // End Method 
    public function StoreFaq(Request $request)
    {
        faq::insert([

            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'F.A.Q Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.faq')->with($notification);
    } // End Method 

    public function EditFaq($id){

        $faq = Faq::findOrFail($id);
        return view('backend.faq.edit_faq',compact('faq'));

    }// End Method 

    public function UpdateFaq(Request $request){

        $faq_id = $request->id;

            Faq::findOrFail($faq_id)->update([

                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'F.A.Q Data Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.faq')->with($notification);

        } // End Method 

        public function DeleteFaq($id){

            $faq_id = Faq::findOrFail($id);
    
    
            Faq::findOrFail($faq_id)->delete();
            $notification = array(
                'message' => 'F.A.Q deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    
    
    
        }// End Method




    }// End Method 

