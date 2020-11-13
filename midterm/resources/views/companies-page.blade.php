@extends('layouts/main-layout')
@section('content')
    <table class="table">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
        </thead>
        <tbody>
            <form action="{{ route('companies.save') }}" method="post">
                @csrf
                <tr>
                    <td></td>
                    <td><input type="text" name="name" class="form-control"></td>
                    <td><input type="text" name="code" class="form-control"></td>
                    <td><input type="text" name="address" class="form-control"></td>
                    <td><input type="text" name="city" class="form-control"></td>
                    <td><input type="text" name="country" class="form-control"></td>
                    <td><button type="submit" class="btn btn-danger">add</button></td>
                </tr>
            </form>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->code }}</td>
                <td>{{ $company->address }}</td>
                <td>{{ $company->city }}</td>
                <td>{{ $company->country }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('companies.edit', ['id' => $company->id]) }}">Edit</a>
                     <form action="{{ route('companies.delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$company->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
@endsection