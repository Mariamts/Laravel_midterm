@extends('layouts/main-layout')

@section('Edit Company')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>Edit Company</h3>
  </div>

  <form action="{{ route('companies.update', ['id' => $company->id]) }}" method="post">
      
    @csrf
    
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ $company->name }}" placeholder="Enter Name" >
      </div>
      <div class="form-group">
        <label>code</label>
        <input class="form-control" type="text" name="code" value="{{ $company->code }}" placeholder="Enter code">
      </div>
      <div class="form-group">
        <label>address</label>
        <input class="form-control" type="text" name="address" value="{{ $company->address }}" placeholder="Enter address">
      </div>
      <div class="form-group">
        <label>city</label>
        <input class="form-control" type="text" name="city" value="{{ $company->city }}" placeholder="Enter city">
      </div>
      <div class="form-group">
        <label>country</label>
        <input class="form-control" type="text" name="country" value="{{ $company->country }}" placeholder="Enter country">
      </div>
    </div>

    <div class="card-footer">
      <button class="btn btn-success">Update</button>
    </div>
  </form>
  
</div>
@endsection