@php

$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
    
@endphp



<div class="service-side-bar">                    
    <div class="services-bar-widget">
        <h3 class="title">Menu</h3>
        <div class="side-bar-categories">
         
            <br>
            
      
       
            <ul> 
                
                <li>
                    <a href="{{route('dashboard')}}"> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('user.booking') }}">Booking Details </a>
                </li>
                <li>
                    <a href="{{route('user.profile')}}">View Profile </a>
                </li>
                <li>
                    <a href="{{route('user.change.password')}}">Change Password</a>
                </li>
                
                <li>
                    <a href="{{route('user.logout')}}">Logout </a>
                </li>
            </ul>
        </div>
    </div>

   
</div>