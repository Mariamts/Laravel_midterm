@extends('layouts/main-layout')

@section('Edit Employee')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>Edit EMPLOYEE</h3>
  </div>

  <form action="{{ route('employees.update', ['id' => $employee->id]) }}" method="post">
      
    @csrf
    
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ $employee->name }}" placeholder="Enter Name" >
      </div>
      <div class="form-group">
        <label>lastname</label>
        <input class="form-control" type="text" name="lastname" value="{{ $employee->lastname }}" placeholder="Enter lastname">
      </div>
      <div class="form-group">
        <label>birthdate</label>
        <input class="form-control" type="date" name="birthdate" value="{{ $employee->birthdate }}" placeholder="Enter birthdate">
      </div>
      <div class="form-group">
        <label>personal_id</label>
        <input class="form-control" type="number" name="personal_id" value="{{ $employee->personal_id }}" placeholder="Enter personal_id">
      </div>
      <div class="form-group">
        <label>salary</label>
        <input class="form-control" type="number" name="salary" value="{{ $employee->salary }}" placeholder="Enter salary">
      </div>
    </div>

    <div class="card-footer">
      <button class="btn btn-success">Update</button>
    </div>
  </form>
  
</div>
@endsection