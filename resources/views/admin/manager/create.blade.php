@extends('admin.layouts.master')
@section('title', 'Add Manager')

@section('content')
<div class="content-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
            <div class="page-heading">
                <h3>Add Manager</h3>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <form method="post" action="#">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control required" id="first_name" value="" placeholder="First Name" name="first_name" autocomplete="off">
                                <label for="first_name">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control" id="last_name" value="" placeholder="Last Name" name="last_name" autocomplete="off">
                                <label for=last_name">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control required" id="email" value="" placeholder="Email" name="email" autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="password" class="form-control" id="password" value="" placeholder="Password" name="password" autocomplete="off">
                                <label for=password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control required" id="address" value="" placeholder="Address" name="address" autocomplete="off">
                                <label for="address">Address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-float-label">
                                <input type="text" class="form-control required" id="phono_no" value="" placeholder="Phone No" name="phono_no" autocomplete="off">
                                <label for="phono_no">Phone No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
