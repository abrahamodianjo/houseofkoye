@php
    $faq = App\Models\Faq::latest()->get();
@endphp

<div class="faq-area pt-100 pb-70 section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-content faq-content-bg2">
                    <div class="section-title">
                        <span class="sp-color">FEEL FREE TO ASK QUESTION</span>
                        <h2>Let's Start a Free of Questions and Get a Quick Support</h2>
                        <p>We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
                    </div>
                    @foreach ($faq as $item)
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    {{ ($item->short_desc) }}
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        {{ ($item->long_desc) }}
                                    </p>
                                </div>
                            </li>          
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-img-3">
                    <img src="{{asset('frontend/assets/img/faq/faq-img3.jpg')}}" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>