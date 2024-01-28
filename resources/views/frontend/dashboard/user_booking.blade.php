@extends('frontend.main_master')
@section('main')

@php
$totalBookings = $allData->count();
$pendingBookings = $allData->where('status', 0)->count();
$completedBookings = $allData->where('status', 1)->count();

session(['bookingStatistics' => [
    'total' => $totalBookings,
    'pending' => $pendingBookings,
    'completed' => $completedBookings,
], 'allData' => $allData]);

@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Booking Details</li>
            </ul>
            <h3>Booking details</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
             <div class="col-lg-3">

                @include('frontend.dashboard.user_menu')

            </div>


            <div class="col-lg-9">
                <div class="service-article">

                   
    <section class="checkout-area pb-70">
    <div class="container">
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                       
                        <h1 class="title">Booking Information </h1>

                        <div class="row">
    
                            <div class="col-md-4">
                                <div class="card text-white bg-primary mb-3" style="max-width: 14rem;">
                                    <div class="card-header">Total Booking</div>
                                    <div   div class="card-body">
                                        <h1 class="card-title" style="font-size: 20px;">{{ $totalBookings }} Total</h1>
    
                                    </div>
                                </div>                   
                            </div>
    
                            <div class="col-md-4">
                                <div class="card text-white bg-warning mb-3" style="max-width: 14rem;">
                                            <div class="card-header">Pending Booking </div>
                                                <div class="card-body">
                                                    <h1 class="card-title" style="font-size: 20px;">{{ $pendingBookings }} Pending</h1>
    
                                                </div>
                                </div>                   
                            </div>
    
    
                            <div class="col-md-4">
                                <div class="card text-white bg-success mb-3" style="max-width: 14rem;">
                                        <div class="card-header">Complete Booking</div>
                                    <div class="card-body">
                                        <h1 class="card-title" style="font-size: 20px;">{{ $completedBookings }} Complete</h1>
                                    </div>
                                </div>                   
                            </div>
    
                        
                        </div>
    

                        <div class="service-article-content">

                            

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">B No</th>
                                <th scope="col">B Date</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Room</th>
                                <th scope="col">Check In/Out</th>
                                <th scope="col">Total Room</th>
                                <th scope="col">Status</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $item) 
                                <tr>
                                <td> <a href="{{ route('user.invoice',$item->id) }}">{{ $item->code }}</a> </td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item['user']['name'] }}</td>
                                <td>{{ $item['room']['type']['name'] }}</td>
                                <td> <span class="badge bg-primary">{{ $item->check_in }}</span>  <span class="badge bg-warning text-dark">{{ $item->check_out }}</span> </td>
                                <td>{{ $item->number_of_rooms }}</td>
                                <td> 
                                @if ($item->status == 1)
                                <span class="badge bg-success">Complete</span>
                                    @else
                                    <span class="badge bg-info text-dark">Pending</span>
                                @endif
                    
                                </td>
                                </tr>
                                @endforeach
                    
                            </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </form>      

             </div>
             </section>

        </div>
    </div>


</div>
    </div>
</div>
<!-- Service Details Area End -->




@endsection