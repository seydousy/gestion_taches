@extends('app')

@section('title', 'Cree')
@section('content')
<div class="container mt-2">
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mb-2">
    <h2>Ajouter Entreprise</h2>
    </div>
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('companies.index') }}"> Retour</a>
    </div>
    </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('companies.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Nom de l'Entreprise:</strong>
    <input type="text" name="name" class="form-control" placeholder="Nom de l'Entreprise">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Email de l'Entreprise:</strong>
    <input type="email" name="email" class="form-control" placeholder="Email de l'Entreprise">
    @error('email')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Adresse de l'Entreprise:</strong>
    <input type="text" name="address" class="form-control" placeholder="Adresse de l'Entreprise">@error('address')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
    </div>
    <button type="submit" class="btn btn-primary ml-3">Ajouter</button>
    </div>
    </form>
@endsection
