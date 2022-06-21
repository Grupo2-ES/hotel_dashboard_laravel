@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h3 class="page-title mt-3">Bem Vindo, {{ Auth::user()->name }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center">
                                    <thead>
                                        <tr>
                                            <th>ID da Reserva</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th class="text-center">Room Type</th>
                                            <th class="text-right">Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBookings as $bookings )
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>{{ $bookings->bkg_id }}</div>
                                            </td>
                                            <td class="text-nowrap">{{ $bookings->name }}</td>
                                            <td><a href="#" class="__cf_email__">{{ $bookings->email }}</a></td>
                                            <td class="text-center">{{ $bookings->room_type }}</td>
                                            <td class="text-right">
                                                <div>{{ $bookings->ph_number }}</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection