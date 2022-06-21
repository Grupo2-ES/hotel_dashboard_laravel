@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <img class="rounded-circle" alt="User Image" src="images/charmandash.png">
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-3">{{ Auth::user()->name }}</h4>
                                <h6 class="text-muted mt-1">Manager</h6>
                                <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i> Portugal</div>
                                <div class="about-text">Esta é a página do administrador</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a> </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Detalhes</span>
                                                </h5>
                                            <div class="row mt-5">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Nada a mostrar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="password_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control"> </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control"> </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control"> </div>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
