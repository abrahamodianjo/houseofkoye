@php
    $setting = App\Models\SiteSetting::find(1);
@endphp



<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{url('/')}}" class="logo">
            
            <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
            <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
                    <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">
                                Home 
                               
                            </a>
                        </li>
                    

                        <li class="nav-item">
                            <a href="{{ route('show.gallery') }}" class="nav-link">
                                Our Property
                              </a>
                         
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.list') }}" class="nav-link">
                                Blog
                               
                            </a>
                        
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('contact.us') }}" class="nav-link">
                                Contact
                            </a>
                        </li>
                        @auth
                        <li class="nav-item-btn">
                            @php
                            $id = Auth::user()->id;
                            $profileData = App\Models\User::find($id);
                                
                            @endphp
                            
                            
                            <a  class="default-btn btn-bg-one border-radius-5" href="{{route('dashboard')}}">Dashboard</a>
                            
                        </li>
                            @else
                        
                        <li class="nav-item-btn">
                            <a  class="default-btn btn-bg-one border-radius-5" href="{{route('login')}}">Sign in</a>
                            
                        </li>
                        @endauth
                       
                    </ul>

                
                @auth
                    
                    <div class="nav-btn">
                        @php
                            $id = Auth::user()->id;
                            $profileData = App\Models\User::find($id);
                                
                            @endphp
                        
                        <a  class="default-btn btn-bg-one border-radius-5" href="{{route('dashboard')}}">Dashboard</a>
                        
                        @else
                        
                    </div>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
</div>