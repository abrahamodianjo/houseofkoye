@php

$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
    
@endphp



<div class="service-side-bar">                    
    <div class="services-bar-widget">
        <h3 class="title">Sidebar Menu</h3>
        <div class="side-bar-categories">
            <img src="{{(!empty($profileData->photo))  ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')  }}" 
            class="rounded mx-auto d-block" alt="Image" style="width:100px; height:100px;">
            <br>
            <center>
            <p>Hi <b>{{ $profileData->name}}</b>, please feel free to select one of the menus below</p>
            
             </center>
      
       
            <ul> 
                
                <li>
                    <a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('user.profile')}}">View Profile </a>
                </li>
                <li>
                    <a href="{{route('user.change.password')}}">Change Password</a>
                </li>
                <li>
                    <a href="{{ route('user.booking') }}">Booking Details </a>
                </li>
                <li>
                    <a href="{{route('user.logout')}}">Logout </a>
                </li>
            </ul>
        </div>
    </div>

   
</div>