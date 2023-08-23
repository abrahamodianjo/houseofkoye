@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        
        <div class="ms-auto">
            <div class="btn-group">
               
                <a href="{{route('add.room.type')}}" class="btn btn-primary ">Add Room type</a>
                
            </div>
        </div>
    </div>
    
    <h6 class="mb-0 text-uppercase">Room Type List</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allData as $key => $item)
                        @php
                            $rooms = App\Models\Room::where('roomtype_id', $item->id)->get();                            
                        @endphp

                        <tr>
                            <td>{{$key+1}}</td>
                            <td> <img src="{{ (!empty($item->room->image)) ? url('upload/roomimg/'.$item->room->image) : url('upload/no_image.jpg') }}" alt="" style="width: 50px; height:30px;"></td>
                            <td>{{$item->name}}</td>
                            <td>
                            <i><a href="{{route('edit.team',$item->id)}}" class="btn btn-warning radius-30 bx bx-edit"></a></i>
                            <i><a href="{{route('delete.team',$item->id)}}" class="btn btn-danger radius-30 bx bx-trash " id="delete"></a></i>        
                            </td>
                            
                        </tr>

                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>

@endsection