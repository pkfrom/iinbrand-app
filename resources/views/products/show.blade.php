@extends('adminlte::page')

@section('content_header')
<div class="page-header">
        <h1>Products / Show #{{$product->id}}</h1>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('products.edit', $product->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="company_id">COMPANY_ID</label>
                     <p class="form-control-static">{{$product->company_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$product->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="detail">DETAIL</label>
                     <p class="form-control-static">{{$product->detail}}</p>
                </div>
                    <div class="form-group">
                     <label for="activate">ACTIVATE</label>
                     <p class="form-control-static">{{$product->activate}}</p>
                </div>
                    <div class="form-group">
                     <label for="picture">PICTURE</label>
                     <p class="form-control-static">{{$product->picture}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('products.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection