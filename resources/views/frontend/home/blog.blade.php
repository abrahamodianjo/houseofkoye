@php
    $blog = App\Models\BlogPost::latest()->limit(3)->get();
@endphp

<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">BLOGS</span>
            <h2>Our Latest Blogs to the Intranational Journal at a Glance</h2>
        </div>
        <div class="row pt-45">

            @foreach ($blog as $item ) 


            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset($item->post_image) }}" alt="Images">
                    </a>
                    <div class="content">
                        <ul>
                            <li>{{ $item->created_at->format('M d Y')  }}</li>
                          
                        </ul>
                        <h3>
                            <a href="blog-details.html">{{ $item->post_titile }}</a>
                        </h3>
                        <p>{{ $item->short_descp }}</p>
                        <a href="{{ url('blog/details/'.$item->post_slug) }}" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>