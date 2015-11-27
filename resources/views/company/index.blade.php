@extends('adminlte::page')

@section('title', ' | Companies')

@section('content')

    <h1>Companies <a href="{{ route('company.create') }}" class="btn btn-primary pull-right btn-sm">Add New Company</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Detail</th><th>Active</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($companies as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/company', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->detail }}</td><td>{{ $item->active }}</td>
                    <td>
                        <a href="{{ route('company.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['company.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $companies->render() !!} </div>
    </div>

@endsection
