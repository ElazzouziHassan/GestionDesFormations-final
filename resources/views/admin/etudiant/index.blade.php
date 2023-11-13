@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    @if (session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
      <div class="card-header">
        <h2>
          Etudiants,
          <a href="{{ url('admin/etudiant/create') }}" class="btn btn-primary btn-sm float-right">Add Etudiant</a>
        </h2>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
</div>

@endsection