@extends('adminlte::page')

@section('title', ' | People')

@section('content_header')
    <div class="page-header clearfix">
        <i class="fa fa-check-circle"></i> Person
        <a href="{{ route('person.create') }}" class="btn btn-primary pull-right"style="margin-bottom: 5px;"><i class="fa fa-plus"></i> New Person</a>
        </div>
@stop

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">All Product</h3>
                </div>
                <div class="box-body">
        <table id="dataex" class="table table-bordered table-striped table-hover">

            <thead>
                <tr>
                    <th>#</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($people as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/person', $item->id) }}">{{ $item->name }}</a></td>
                    <td>{{ $item->email }}</td><td>{{ $item->age }}</td>
                    <td>
                        <a href="{{ route('person.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['person.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
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