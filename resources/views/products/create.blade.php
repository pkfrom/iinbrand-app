@extends('adminlte::page')

@section('content_header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Products / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('products.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('company_id')) has-error @endif">
                       <label for="company_id-field">Company_id</label>
                    <input type="text" id="company_id-field" name="company_id" class="form-control" value="{{ old("company_id") }}"/>
                       @if($errors->has("company_id"))
                        <span class="help-block">{{ $errors->first("company_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('detail')) has-error @endif">
                       <label for="detail-field">Detail</label>
                    <textarea class="form-control" id="detail-field" rows="3" name="detail">{{ old("detail") }}</textarea>
                       @if($errors->has("detail"))
                        <span class="help-block">{{ $errors->first("detail") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('activate')) has-error @endif">
                       <label for="activate-field">Activate</label>
                    <input type="text" id="activate-field" name="activate" class="form-control" value="{{ old("activate") }}"/>
                       @if($errors->has("activate"))
                        <span class="help-block">{{ $errors->first("activate") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('picture')) has-error @endif">
                       <label for="picture-field">Picture</label>
                    <input type="text" id="picture-field" name="picture" class="form-control" value="{{ old("picture") }}"/>
                       @if($errors->has("picture"))
                        <span class="help-block">{{ $errors->first("picture") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('products.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection