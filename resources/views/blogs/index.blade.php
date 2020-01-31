@extends('blogs.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data all user</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success mb-3" href="{{ route('blogs.create') }}"> Create new user</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-striped" id="datatable">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="300px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->name }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

{!! $blogs->links() !!}

@endsection