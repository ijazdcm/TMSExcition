@extends('Layouts.Master')
@section('top-section')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">New Staff</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('staffs.index') }}">{{ request()->segment(2) }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ request()->segment(3) }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-neutral">Home</a>
                        <a href="{{ route('staffs.index') }}" class="btn btn-sm btn-neutral">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container mt--9">
        <div class="card">
            @if (session('error'))
                <div class="container p-2">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>Wrong!</strong>{{ session('error') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (session('success'))
                <div class="container p-2">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong>Done!</strong>{{ session('success') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('staffs.store') }}" method="POST">
                    @csrf
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Personal Information</legend>
                        {{-- First row --}}
                        <div class="row">
                            <div class="col-md-3">
                                @error('name')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" placeholder="Name" name="name"
                                        value="{{ old('name') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('father_name')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Father Name</label>
                                    <input class="form-control" type="text" placeholder="Father Name" name="father_name"
                                        value="{{ old('father_name') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('mother_name')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Mother Name</label>
                                    <input class="form-control" type="text" placeholder="Mother Name" name="mother_name"
                                        value="{{ old('mother_name') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('adhar_number')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Adhar Number</label>
                                    <input class="form-control" type="text" placeholder="Adhar Number" name="adhar_number"
                                        value="{{ old('adhar_number') }}" id="example-text-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                @error('dob')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">DOB</label>
                                    <input class="form-control" type="date" placeholder="DOB" name="dob"
                                        value="{{ old('dob') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-2">
                                @error('age')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Age</label>
                                    <input class="form-control" type="text" placeholder="Age" name="age"
                                        value="{{ old('age') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="form-control-label" class="form-control-label">Gender</label>
                                    <select class="form-control" name="gender" id="">
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Transgender">Transgender</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form-control-label" class="form-control-label">Martial Status</label>
                                    <select class="form-control" name="martial_status" id="">
                                        <option value="">Choose the status</option>
                                        <option value="Married">Married</option>
                                        <option value="UnMarried">UnMarried</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="form-control-label" class="form-control-label">Choose The Role</label>
                                    <select class="form-control" name="staff_role" id="">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @error('Address')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-control-label">Address</label>
                                    <textarea class="form-control" name="Address" id="exampleFormControlTextarea1"
                                        rows="3">{{ old('Address') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                @error('profile_img')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Upload Image</label>
                                    <input class="form-control" type="file" id="staff_img" name="profile_img"
                                        value="{{ old('profile_img') }}">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <img class="card-img-top" style="height: 90%" id="blah" src="" alt="Your Image" />
                            </div>
                        </div>
                    </fieldset>
                    {{-- contact information --}}
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Contact Infomation</legend>
                        {{-- second row --}}
                        <div class="row">
                            <div class="col-md-3">
                                @error('phone_number')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                                    <input class="form-control" type="text" id="example-text-input" name="phone_number"
                                        value="{{ old('phone_number') }}" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('email')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Personal Email</label>
                                    <input class="form-control" type="text" placeholder="Personal Email" name="email"
                                        value="{{ old('email') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('father_phone_number')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Father Phone Number</label>
                                    <input class="form-control" type="text" placeholder="Father Phone Number"
                                        name="father_phone_number" value="{{ old('father_phone_number') }}"
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('mother_phone_number')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Mother Phone Number</label>
                                    <input class="form-control" type="text" id="example-text-input"
                                        name="mother_phone_number" value="{{ old('mother_phone_number') }}"
                                        placeholder="Mother Phone Number">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    {{-- Qualification & Experience --}}
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Experience Infomation</legend>
                        {{-- Third row --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="py-2" for="">Experience : </label>
                                    <div class="custom-control custom-radio custom-control-inline experience">
                                        <input type="radio" id="customRadioInline1" name="experienceRadioBtn"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline experience">
                                        <input type="radio" id="customRadioInline2" name="experienceRadioBtn"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="if_experience">
                            <div class="row">
                                <div class="col-md-6">
                                    @error('previous_company_name')
                                        <span class="badge badge-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Previous Company
                                            Name</label>
                                        <input class="form-control" type="text" placeholder="Company Name"
                                            name="previous_company_name" value="{{ old('previous_company_name') }}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @error('previous_company_salary')
                                        <span class="badge badge-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Previous Salary</label>
                                        <input class="form-control" type="text" placeholder="Company Name"
                                            name="previous_company_salary" value="{{ old('previous_company_salary') }}"
                                            id="example-text-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                @error('education_qualification')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Qualification
                                        </label>
                                    <input class="form-control" type="text" placeholder="Qualification"
                                        name="education_qualification" value="{{ old('education_qualification') }}"
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="col-md-3">
                                @error('experience')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="form-control-label" class="form-control-label">Experience</label>
                                    <select class="form-control" name="experience" id="">
                                        <option value="">Experience</option>
                                        <option value="0">fresher</option>
                                        <option value="0.5">6-months</option>
                                        <option value="1">1-year</option>
                                        <option value="1.5">1.5 year</option>
                                        <option value="2">2-year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                @error('dob')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Date of Joining</label>
                                    <input class="form-control" type="date" placeholder="Joining date" name="doj"
                                        value="{{ old('dob') }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Skills</label>
                                    <select multiple data-live-search="true" class="form-control selectpicker"
                                        name="members[]" id="exampleFormControlSelect2">
                                        @foreach ($skills as $skill)
                                            <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            </dov>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-1 offset-md-10">
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

            //section to hide things on load
            $('#if_experience').hide();


            //section to view the user image after choosing it
            $("#staff_img").change(function() {
                readURL(this);
            });
            //end section to view the user image after choosing it

            //section handle the if_experience yes No section
            $('input[name="experienceRadioBtn"]').change(function() {
                if (!$('#customRadioInline1').prop('checked')) {
                    $('#if_experience').hide();
                } else {
                    $('#if_experience').show();
                }
            });
            //section handle the if_experience yes No section








            // uitily functions
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }








        })
    </script>

    {{-- section of showing the error msg --}}
    @if (Session::has('message'))
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
