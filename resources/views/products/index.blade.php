@extends('adminlte::page')

@section('title', ' | Products')

@section('content_header')
    <div class="page-header clearfix">
            <i class="glyphicon glyphicon-align-justify"></i> Products
            <a class="btn btn-success pull-right" href="{{ route('products.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Product</h3>
                </div><!-- /.box-header -->
            @if($products->count())
                <!--<table class="table table-condensed table-striped">-->
                    <table id="dataex" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>COMPANY_ID</th>
                        <th>NAME</th>
                        <th>DETAIL</th>
                        <th>ACTIVATE</th>
                        <th>PICTURE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->company_id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td>{{$product->activate}}</td>
                    <td>{{$product->picture}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('products.show', $product->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('products.edit', $product->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $products->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{(config('adminlte.plugin').'datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{(config('adminlte.plugin').'datatables/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#dataex').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true
            });
        });
    </script>
@stop