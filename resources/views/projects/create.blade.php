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
        <div class="card-body">
            <div class="row">
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Project Name</label>
                        <input class="form-control" type="text" value="John Snow" id="example-text-input">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Client Name</label>
                        <input class="form-control" type="text" value="John Snow" id="example-text-input">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Client Phone Number</label>
                        <input class="form-control" type="text" value="John Snow" id="example-text-input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Project Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">From Date</label>
                        <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Project Lead</label>
                        <select class="form-control">
                            <option>Select Lead</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-1 offset-md-10">
                    <div class="form-group">
                        <button class="btn btn-icon btn-success" type="button">
                            <span class="btn-inner--icon"><i class="fas fa-location-arrow"></i></span>
                            <span class="btn-inner--text">Add</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
