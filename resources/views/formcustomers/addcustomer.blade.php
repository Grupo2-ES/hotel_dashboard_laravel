@extends('layouts.master')
@section('menu')
@extends('sidebar.addcustomer')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Acicionar Cliente</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('form/addcustomer/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row formtype">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <select class="form-control @error('name') is-invalid @enderror" id="sel1" name="name" value="{{ old('name') }}">
                                                <option selected disabled> --Select Name-- </option>
                                                @foreach ($user as $users )
                                                <option value="{{ $users->name }}">{{ $users->name }}</option>
                                                @endforeach
                                            </select>
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
                                            <label>Contacto Telefónico</label>
                                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>File Upload</label>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input @error('fileupload') is-invalid @enderror" id="customFile" name="fileupload">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Adicionar Clientes</button>
            </form>
        </div>
    </div>
@endsection