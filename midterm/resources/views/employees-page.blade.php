@extends('layouts/main-layout')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>lastname</th>
            <th>birthdate</th>
            <th>personal_id</th>
            <th>salary</th>
        </thead>
        <tbody>
            <form action="{{ route('employees.save') }}" method="post">
                @csrf
                <tr>
                    <td></td>
                    <td><input type="text" name="name" class="form-control"></td>
                    <td><input type="text" name="lastname" class="form-control"></td>
                    <td><input type="date" name="birthdate" class="form-control"></td>
                    <td><input type="number" name="personal_id" class="form-control"></td>
                    <td><input type="number" name="salary" class="form-control"></td>
                    <td><button type="submit" class="btn btn-danger">add</button></td>
                </tr>
            </form>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->birthdate }}</td>
                <td>{{ $employee->personal_id }}</td>
                <td>{{ $employee->salary }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('employees.edit', ['id' => $employee->id]) }}">Edit</a>
                    <form action="{{ route('employees.delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$employee->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
@endsection