@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<footer class="footer-area footer-bg">
    <div class="container">
       
        <div class="copy-right-area">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="copy-right-text text-align1">
                        <p>
                            House of Koye © 2023. All Rights Reserved. 
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class=" copy-right-text text-align2">

                        <p>
                            {{ $setting->copyright }} <a href="https://www.linkedin.com/in/abraham-odianjo/" target="_blank">Abraham Odianjo</a>
                        </p>
                        {{-- <ul class="social-link"> social-icon
                            <li>
                                <a href="{{ $setting->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                            </li> 
                         
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li> 
                            
                            </li> 
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>