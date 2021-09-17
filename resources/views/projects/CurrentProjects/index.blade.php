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
                                <th>Status</th>
                                <th>Project Lead</th>
                                <th>Completion</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>LoanStories</td>
                                <td>Esakiraj</td>
                                <td>pending</td>
                                <td>David</td>
                                <td>60%</td>
                                <td><a href="" class="btn btn-sm btn-warning"><i class="far fa-eye px-1"></i>view</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection
