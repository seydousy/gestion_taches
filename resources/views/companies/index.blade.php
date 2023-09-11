@extends('app')

@section('title', 'Administration')
@section('content')
<div class="container mt-2">
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2>Liste des Entreprises  </h2>
    </div>
    <div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('companies.create') }}"> Cree une
    Entreprise</a>
    </div>
    </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
    <tr>
    <th>Numero</th>
    <th>Nom de l'Entreprise</th>
    <th>Email de l'Entreprise</th>
    <th>Adresse de l'Entreprise</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($data as $companies)
    <tr>
    <td>{{ $companies->id }}</td>
    <td>{{ $companies->name }}</td>
    <td>{{ $companies->email }}</td>
    <td>{{ $companies->address }}</td>
    <td>
    <form action="{{ route('companies.destroy',$companies->id) }}" method="Post">
    <a class="btn btn-primary" href="{{ route('companies.edit',$companies->id)
    }}">Editer</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    </td>
    </tr>
    @endforeach
    </table>
    {!! $data->links() !!}
@endsection
