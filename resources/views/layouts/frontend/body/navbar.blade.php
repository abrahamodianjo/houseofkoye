<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{url('/')}}" class="logo">
            
            <img src="{{asset('frontend/assets/img/logos/logo-1.png')}}" class="logo-one" alt="Logo">
            <img src="{{asset('frontend/assets/img/logos/footer-logo1.png')}}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('frontend/assets/img/logos/logo-1.png')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('frontend/assets/img/logos/footer-logo1.png')}}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">
                                Home 
                               
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Restaurant 
                            </a>
                          
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Recreation
                                <i class='bx bx-chevron-down'></i>
                            </a>
                         
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class='bx bx-chevron-down'></i>
                            </a>
                        
                        </li>
@php 
        $room = App\models\Room::latest()->get();
@endphp
                        <li class="nav-item">
                            <a href="{{route('froom.all')}}" class="nav-link">
                                All Rooms
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($room as $item)
                             
                                <li class="nav-item">
                                    <a href="room.html" class="nav-link">
                                        {{$item['type']['name']}} 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item-btn">
                            <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="#" class="default-btn btn-bg-one border-radius-5">Book Now</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>