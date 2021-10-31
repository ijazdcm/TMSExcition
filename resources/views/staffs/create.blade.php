@extends('Layouts.Master')
@section('top-section')
<div class="container">
    <div class="row px-4">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">Add New Staff</h6>
        </div>
        <div class="col-lg-6 col-4 text-right">
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Home</a>
            <a href="{{route('staffs.index')}}" class="btn btn-sm btn-neutral">Back</a>
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
            <form action="{{route('staffs.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col col-md-3">
                        @error('name')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Name</label>
                            <input class="form-control" type="text" placeholder="Name" name="name" value="{{old('name')}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="col col-md-3">
                        @error('middle_name')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Middle Name</label>
                            <input class="form-control" type="text" placeholder="Middle Name" name="middle_name" value="{{old('middle_name')}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="col col-md-3">
                        @error('last_name')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Last Name</label>
                            <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="col col-md-3">
                        @error('phone_number')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                            <input class="form-control" type="text" id="example-text-input" name="phone_number" value="{{old('phone_number')}}" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4">
                        @error('email')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email</label>
                            <input class="form-control" type="text" id="example-text-input" name="email" value="{{old('email')}}" placeholder="Email">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="form-control-label" class="form-control-label">Choose The Role</label>
                            <select class="form-control" name="staff_role" id="">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4 ">
                        @error('profile_img')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Upload Image</label>
                            <input class="form-control" type="file" id="example-text-input" name="profile_img" value="{{old('profile_img')}}">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                        @error('Address')
                        <span class="badge badge-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-control-label">Address</label>
                            <textarea class="form-control" name="Address" id="exampleFormControlTextarea1" rows="3">{{old('Address')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-1 offset-md-10">
                        <div class="form-group">
                            <button type="submit" class="btn btn-icon btn-success" type="button">
                                <span class="btn-inner--icon"><i class="fas fa-location-arrow"></i></span>
                                <span class="btn-sm btn-inner--text">Add</span>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

@endsection
@section('js')
<script>
    $(function() {

    })

</script>
@if(Session::has('message'))
<script>
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }

</script>
@endif

@endsection
