@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">F.A.Q</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All F.A.Q questions </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
               
                <a href="{{route('add.faq')}}" class="btn btn-primary">Add F.A.Q Questions</a>
                
            </div>
        </div>
    </div>
    
    <h6 class="mb-0 text-uppercase">All F.A.Q Questions</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Question</th>
                            <th>Answer</th>
                     
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faq as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->short_desc}}</td>
                            <td>{{$item->long_desc}}</td>
                            <td>
                           
                            <i><a href="{{route('edit.faq',$item->id)}}" class="btn btn-warning radius-30 bx bx-edit"></a></i>
                      
                     
                            <a href="{{ route('delete.faq',$item->id) }}" class="btn btn-danger px-3 radius-30 bx bx-trash" id="delete"> </a>
                             
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