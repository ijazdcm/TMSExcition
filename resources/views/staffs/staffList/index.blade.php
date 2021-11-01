@extends('Layouts.Master')
@section('top-section')
<div class="container">
    <div class="row px-4">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">Current Projects</h6>
        </div>
        <div class="col-lg-6 col-4 text-right">
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Home</a>
            <a href="{{route('projects.index')}}" class="btn btn-sm btn-neutral">Back</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt--6">
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
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($staffs as $staff)
                            <tr>
                                <td>{{$staff->name}}</td>
                                <td>{{$staff->phone_number}}</td>
                                <td>{{$staff->email }}</td>
                                <td>{{$staff->staff_Role->role_name}}</td>
                                @if ($staff->active_status==1)
                                <td><span class="badge badge-success">Active</span></td>
                                @else
                                <td><span class="badge badge-danger">InActive</span></td>
                                @endif
                                <td><a href="{{route('staffsList.show',$staff->id)}}" class="btn btn-sm btn-warning"><i class="far fa-eye px-1"></i>view</a></td>
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