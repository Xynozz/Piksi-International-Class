@extends('layouts.admin.dashboard')

@section('content')
{{-- <div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Potential growth</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$17.34</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Revenue current</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$12.34</h3>
                            <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Daily Income</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">$31.53</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Expense current</h6>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="span6" style="float: none; margin: 0 auto;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h3 class="card-title">Piksi International</h3>
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('admin/assets/img/illustrations/man-with-laptop-light.png') }}"
                                alt="Card Image" width="150">
                        </div>
                        <div class="col-10">
                            <h2>Welcome, {{ Auth::user()->name }} Have a nice day🎉</h2>
                            <p>
                                Today is a gift. Use your time wisely and with gratitude.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
