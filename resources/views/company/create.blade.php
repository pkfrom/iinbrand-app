@extends('adminlte::page')

@section('title', ' | Company')

@section('content_header')
<div class="page-header clearfix">
    <i class="fa fa-check-circle"></i> Company
    <a href="{{ route('company.index') }}" class="btn bg-purple pull-right"style="margin-bottom: 5px;"><i class="fa fa-backward"></i> Back</a>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Company</h3>
            </div>
<div class="box-body">
    {!! Form::open(['route' => 'company.store', 'class' => 'form-horizontal']) !!}
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-group">
                        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('detail', 'Detail: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::radio('status', '1', ['class' => 'form-control']) !!}Yes
                            {!! Form::radio('status', '0', true, ['class' => 'form-control']) !!}No
                        </div>
                    </div>
</div>

 <div class="box-footer">
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-success form-control']) !!}
        </div>
    </div>
</div>
    {!! Form::close() !!}


        </div>
    </div>
</div>
@endsection