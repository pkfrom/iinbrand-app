@extends('adminlte::page')

@section('title', ' | People')

@section('content_header')
    <div class="page-header clearfix">
        <i class="fa fa-check-circle"></i> Person
        <a href="{{ route('person.index') }}" class="btn bg-purple pull-right"style="margin-bottom: 5px;"><i class="fa fa-backward"></i> Back</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Product</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
    {!! Form::model($person, [
        'method' => 'PATCH',
        'route' => ['person.update', $person->id],
        'class' => 'form-horizontal'
    ]) !!}

    <div class="form-group">
                        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('age', 'Age: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::number('age', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('message', 'Message: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
</div>
<div class="box-footer">
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
</div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
        </div>
    </div>
@endsection