@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h2>
          Add New Etudiant,
          <a href="{{ url('admin/etudiant') }}" class="btn btn-primary text-white btn-sm float-right">Go Back</a>
        </h2>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/etudiant') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label>CIN :</label>
            <input type="text" name="cin" class="form-control">
          </div>
          <div class="mb-3">
            <label>Last Name :</label>
            <input type="text" name="nom" class="form-control">
          </div>
          <div class="mb-3">
            <label>First Name :</label>
            <input type="text" name="prenom" class="form-control">
          </div>
          <div class="mb-3">
            <label>Birth Date :</label>
            <input type="date" name="date_naissance" class="form-control">
          </div>
          <div class="mb-3">
            <label>Adress Mail :</label>
            <input type="email" name="adresse_email" class="form-control">
          </div>
          <div class="mb-3">
            <label>Phone Number :</label>
            <input type="tele" name="numero_telephone" class="form-control">
          </div>
          <div class="mb-3">
            <label>Adress :</label>
            <textarea name="adresse" cols="30" rows="10" class="form-control">
            </textarea>
          </div>
          <div class="col-md-12 mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection