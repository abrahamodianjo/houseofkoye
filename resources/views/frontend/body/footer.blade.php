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
                            {{ $setting->copyright }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="social-icon text-align2">
                        <ul class="social-link">
                            <li>
                                <a href="{{ $setting->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                            </li> 
                         
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li> 
                            
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>