@extends('layouts.master')
@section('menu')
@extends('sidebar.bookingadd')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Adicionar Reserva</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('form/booking/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <select class="form-control @error('name') is-invalid @enderror" id="sel1" name="name" value="{{ old('name') }}">
                                        <option selected disabled> --Selecionar Nome-- </option>
                                        @foreach ($user as $users )
                                        <option value="{{ $users->name }}">{{ $users->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Quarto</label>
                                    <select class="form-control @error('room_type') is-invalid @enderror" id="sel2" name="room_type">
                                        <option selected disabled> --Selecionar o Tipo de Quarto-- </option>
                                        @foreach ($data as $items )
                                        <option value="{{ $items->room_name }}">{{ $items->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Número de Pessoas</label>
                                    <input type="number" class="form-control @error('total_numbers') is-invalid @enderror"name="total_numbers" value="{{ old('total_numbers') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Chegada</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker @error('arrival_date') is-invalid @enderror" name="arrival_date" value="{{ old('arrival_date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Partida</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker @error('depature_date') is-invalid @enderror" name="depature_date" value="{{ old('depature_date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nº de Telefone</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" rows="1.5" id="message" name="message" value="{{ old('message') }}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Criar Reserva</button>
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
