@extends('layouts.master')
@section('menu')
@extends('sidebar.addroom')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Adicionar Quarto</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('form/room/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <select class="form-control @error('name') is-invalid @enderror" id="sel1" name="name" value="{{ old('name') }}">
                                        <option selected disabled> --Selecionar Quarto-- </option>
                                        @foreach ($user as $users )
                                        <option value="{{ $users->name }}">{{ $users->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Quarto</label>
                                    <select class="form-control @error('room_type') is-invalid @enderror" id="room_type" name="room_type">
                                        <option selected disabled> --Selecionar tipo de quarto-- </option>
                                            @foreach ($data as $items )
                                            <option value="{{ $items->room_name }}">{{ $items->room_name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>AC/NON-AC</label>
                                    <select class="form-control @error('ac_non_ac') is-invalid @enderror" id="ac_non_ac" name="ac_non_ac">
                                        <option disabled selected>--Selecionar--</option>
                                        <option value="AC">AC</option>
                                        <option value="NON-AC">NON-AC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comida</label>
                                    <select class="form-control @error('food') is-invalid @enderror" id="food" name="food">
                                        <option disabled selected>--Selecionar--</option>
                                        <option value="Pequeno-Almoço">Pequeno-Almoço</option>
                                        <option value="Lanche">Lanche</option>
                                        <option value="Jantar">Jantar</option>
                                        <option value="Pequeno-Almoço e Jantar">Pequeno-Almoço e Jantar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nº de Camas</label>
                                    <select class="form-control @error('bed_count') is-invalid @enderror" id="bed_count" name="bed_count">
                                        <option disabled selected>--Selecionar--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Taxas de Cancelamento</label>
                                    <select class="form-control @error('charges_for_cancellation') is-invalid @enderror" id="charges_for_cancellation" name="charges_for_cancellation">
                                        <option disabled selected> --Selecionar--</option>
                                        <option value="Free">Grátis</option>
                                        <option value="5% Before 24Hours">5% Antes de 24Horas</option>
                                        <option value="No Cancellation Allow">Não é permitido cancelamento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Preço</label>
                                    <input type="text" class="form-control @error('rent') is-invalid @enderror" id="rent" name="rent" value="{{ old('rent') }}">
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
                <button type="submit" class="btn btn-primary buttonedit ml-2">Guardar</button>
                <button type="button" class="btn btn-primary buttonedit">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
