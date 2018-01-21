@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/category/create" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>action</th>
            </tr>
            @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <form action="delete id }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
        <div class="text-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>
    @endsection