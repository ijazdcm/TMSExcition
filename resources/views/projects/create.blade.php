@extends('Layouts.Master')
@section('top-section')
<div class="container">
    <div class="row px-4">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">Add New Project</h6>
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
        @if(session('error'))
        <div class="container p-2">
            <div class="row">
                <div class="col col-md-6">
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                       <span class="alert-text"><strong>Wrong!</strong>{{session('error')}}</span>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                </div>
            </div>
        </div>
        @endif
        @if(session('success'))
        <div class="container p-2">
            <div class="row">
                <div class="col col-md-6">
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                       <span class="alert-text"><strong>Done!</strong>{{session('success')}}</span>
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                </div>
            </div>
        </div>
        @endif
        <div class="card-body">
        <form action="{{route('projects.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col col-md-4">
                    @error('project_tittle')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Project Tittle</label>
                        <input class="form-control" type="text" placeholder="Project Tittle" name="project_tittle" value="{{old('project_tittle')}}" id="example-text-input">
                    </div>
                </div>
                <div class="col col-md-4">
                    @error('Client_name')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Client Name</label>
                        <input class="form-control" type="text"  id="example-text-input" name="Client_name" value="{{old('Client_name')}}" placeholder="Client Name">
                    </div>
                </div>
                <div class="col col-md-4">
                    @error('days')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Days</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="days" value="{{old('days')}}" placeholder="No of Days">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">days</span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    @error('project_description')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Project Description</label>
                        <textarea class="form-control" name="project_description" id="exampleFormControlTextarea1" rows="3">{{old('project_description')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-3">
                    @error('start_date')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Start Date</label>
                        <input class="form-control" type="date" value="{{old('start_date')}}" name="start_date" id="example-date-input">
                    </div>
                </div>
                <div class="col col-md-3">
                    @error('end_date')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">End Date</label>
                        <input class="form-control" type="date" name="end_date" value="{{old('end_date')}}" id="example-date-input">
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Developer</label>
                        <select class="form-control" name="developer">
                            <option value="">Select Developer</option>
                            @foreach ($developers as $developer)
                            @if($developer->staff_role==1)
                            <option value="{{$developer->id}}">{{$developer->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Designer</label>
                        <select class="form-control" name="designer">
                            <option value="">Select Designer</option>
                            @foreach ($developers as $developer)
                            @if($developer->staff_role==2)
                            <option value="{{$developer->id}}">{{$developer->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-1 offset-md-10">
                    <div class="form-group">
                        <button type="submit" class="btn btn-icon btn-success" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-location-arrow"></i></span>
                            <span class="btn-inner--text">Add</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>

@endsection
