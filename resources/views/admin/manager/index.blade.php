@extends('admin.layouts.master')
@section('title', 'Managers')

@section('content')
<div class="content-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <div class="page-heading">
                <h3>Managers</h3>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3 text-right">
            <a href="{{ route('admin.managers.create') }}" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Add Manager</a>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John</td>
                                            <td>Alex</td>
                                            <td>john@gmail.com</td>
                                            <td>7th Avenue, LuMs road, Near Centurus, Islamabad</td>
                                            <td>
                                                <a href="#" class="btn btn-icon btn-icon rounded-circle btn-warning mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i></a>
                                                <a href="#" class="btn btn-icon btn-icon rounded-circle btn-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
</div>
@endsection
