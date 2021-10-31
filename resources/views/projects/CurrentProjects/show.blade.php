@extends('Layouts.Master')
@section('top-section')
<div class="container mt--4">
    <div class="row px-4">
        <div class="col-lg-6 col-4">

        </div>
        <div class="col-lg-6 col-4 text-right">
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Home</a>
            <a href="{{route('Currentprojects.index')}}" class="btn btn-sm btn-neutral">Back</a>
        </div>
    </div>
</div>
<div class="container p-2 mt-3">
    <div class="row">
        <div class="col col-md-10 offset-md-1">
            <div>
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase display-4 mb-0">{{$project->project_tittle}}</h5>
                                <span class="lead mb-0"><small>{{$project->description}}</small></span>
                            </div>
                            <div class="col">
                                <h3>Project Members</h3>
                                <div class="container">
                                    @foreach($project->project_members as $members)
                                    {{$loop->iteration}}.{{$members->name}}|| {{ $members->staff_Role->role_name}}<br>
                                    @endforeach
                                    {{-- <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                        </a>
                                    </div> --}}

                                </div>
                            </div>
                            <div class="col-auto">

                                <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <span class="text-success mr-2"><i class="fa fa-arrow-up px-2"></i>{{$project->completion_percentage}}%</span>
                            <span class="text-nowrap">{{$project->updated_at->diffForHumans()}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt--7">
    <div class="row">
        <div class="col col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title display-5">Last Update Remarks</h5>
                    <p class="card-text lead">{{$project->update_remarks}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
