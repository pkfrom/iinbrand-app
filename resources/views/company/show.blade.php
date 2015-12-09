@extends('adminlte::page')

@section('title', ' | Company')

@section('content_header')
<div class="page-header clearfix">
    <i class="fa fa-check-circle"></i> Company
    <a href="{{ route('company.index') }}" class="btn bg-purple pull-right"style="margin-bottom: 5px;"><i class="fa fa-backward"></i> Back</a>
</div>
@stop

@section('content')
<div class="box box-primary">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Detail</th><th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $company->id }}</td> <td> {{ $company->name }} </td><td> {{ $company->detail }} </td><td> {{ $company->status }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
</div>

@endsection