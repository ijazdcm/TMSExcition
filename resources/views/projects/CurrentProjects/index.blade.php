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
                                <th>Project Name</th>
                                <th>Client Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Completion</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($projects as $porject)
                            <tr>
                                <td>{{$porject->project_tittle}}</td>
                                <td>{{$porject->client_name}}</td>
                                <td>{{$porject->start_date}}</td>
                                <td>{{$porject->end_date}}</td>
                                <td><span class="badge badge-default">{{$porject->status}}</span></td>
                                <td>{{$porject->completion_percentage}}-%</td>
                                <td><a href="{{route('Currentprojects.show',$porject->pr_id)}}" class="btn btn-sm btn-warning"><i class="far fa-eye px-1"></i>view</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{$projects->links()}}
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection
