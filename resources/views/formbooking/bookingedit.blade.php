@extends('layouts.master')
@section('menu')
@extends('sidebar.bookingedit')
@endsection
@section('content')
    <style>
        .avatar {
            background-color: #aaa;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            height: 38px;
            line-height: 38px;
            margin: -38px 10px 0 0;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 38px;
            position: relative;
            white-space: nowrap;
            z-index: 2;
        }
    </style>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Editar Reserva</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('form/booking/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Reserva ID</label>
                                    <input class="form-control" type="text" name="bkg_id" value="{{ $bookingEdit->bkg_id }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" name="name" value="{{ $bookingEdit->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Quarto</label>
                                    <select class="form-control" id="sel2" name="room_type">
                                        <option selected value="{{ $bookingEdit->room_type }}">{{ $bookingEdit->room_type }}</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Quad">Quad</option>
                                        <option value="King">King</option>
                                        <option value="Suite">Suite</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Número de Pessoas</label>
                                    <input class="form-control" type="number" name="total_numbers" value="{{ $bookingEdit->total_numbers }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Chegada</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="arrival_date" value="{{ $bookingEdit->arrival_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Partida</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="depature_date" value="{{ $bookingEdit->depature_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $bookingEdit->email }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nº de Telefone</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $bookingEdit->ph_number }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea class="form-control" rows="1.5" id="message" name="message">{{ $bookingEdit->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit">Atualizar</button>
            </form>
        </div>
    </div>
    @section('script')
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
        </script>
    @endsection
@endsection
