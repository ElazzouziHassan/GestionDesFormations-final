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
          Formateurs,
          <a href="{{ url('admin/formateur/create') }}" class="btn btn-primary btn-sm float-right">Add Formateur</a>
        </h2>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
</div>

@endsection