@extends('Layouts.Master')
@section('top-section')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Login Management</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('admin.staffs.index') }}">{{ request()->segment(2) }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ request()->segment(3) }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-neutral">Home</a>
                    <a href="{{ route('admin.staffs.index') }}" class="btn btn-sm btn-neutral">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt--9">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center text-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($staffs as $staff)
                            <tr>
                                <td>{{$staff->name}}</td>
                                <td>{{$staff->phone_number}}</td>
                                <td>{{$staff->email }}</td>
                                <td>
                                    <a href="{{route('admin.staffsLogin.create',["staff_id"=>$staff->id])}}" class="btn btn-sm btn-warning"><i class="fas fa-door-open px-1"></i>New Login</a>
                                    <a href="{{route('admin.staffsList.show',$staff->id)}}" class="btn btn-sm btn-primary"><i class="far fa-eye px-1"></i>Existing </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{$staffs->links()}}
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection
