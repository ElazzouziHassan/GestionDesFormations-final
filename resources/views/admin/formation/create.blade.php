@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h2>
          Add New Formateur,
          <a href="{{ url('admin/formateur') }}" class="btn btn-primary text-white btn-sm float-right">Go Back</a>
        </h2>
      </div>
      <div class="card-body">
        <form action="{{ url('admin/formateur') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label>Formation Label :</label>
            <input type="text" name="intitule" class="form-control">
          </div>
          <div class="mb-3">
            <label>Start At :</label>
            <input type="date" name="date_debut" class="form-control">
          </div>
          <div class="mb-3">
            <label>Price :</label>
            <input type="number" name="prix" class="form-control">
          </div>
          <div class="mb-3">
            <label>Duration :</label>
            <input type="number" name="duree_en_mois" class="form-control">
          </div>
          <div class="mb-3">
            <label>Description :</label>
            <textarea name="description" cols="30" rows="10" class="form-control">
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