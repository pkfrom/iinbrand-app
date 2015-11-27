@extends('adminlte::page')

@section('content')

    <h1>Company</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Detail</th><th>Active</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $company->id }}</td> <td> {{ $company->name }} </td><td> {{ $company->detail }} </td><td> {{ $company->active }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection