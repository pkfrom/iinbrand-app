@extends('adminlte::page')

@section('title', ' | People')

@section('content_header')
    <div class="page-header clearfix">
        <i class="fa fa-check-circle"></i> Person
        <a href="{{ route('person.index') }}" class="btn bg-purple pull-right"style="margin-bottom: 5px;"><i class="fa fa-backward"></i> Back</a>
    </div>
@stop
@section('content')
    <div class="box box-primary">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Email</th><th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $person->id }}</td> <td> {{ $person->name }} </td><td> {{ $person->email }} </td><td> {{ $person->age }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
    </div>

@endsection