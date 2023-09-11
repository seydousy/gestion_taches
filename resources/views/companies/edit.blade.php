@extends('app')

@section('title', 'Editer')
@section('content')
<div class="container mt-2">
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2>Editer Entreprise</h2>
    </div>
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('companies.index') }}"
    enctype="multipart/form-data"> Retour</a>
    </div>
    </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('companies.update',$company->id) }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Nom de l'Entreprise:</strong>
    <input type="text" name="name" value="{{ $company->name }}" class="form-control"
    placeholder="Nom de l'Entreprise">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>@enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Email de l'Entreprise:</strong>
    <input type="email" name="email" class="form-control" placeholder="Email de l'Entreprise"
    value="{{ $company->email }}">
    @error('email')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Adresse de l'Entreprise:</strong>
    <input type="text" name="address" value="{{ $company->address }}" class="formcontrol" placeholder="Adresse de l'Entreprise">
    @error('address')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Modifier</button>
    </div>
    </form>
</div>
@endsection
