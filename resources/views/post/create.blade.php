@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8">


        <form style="margin-left: 50px" action="/posts/create" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Post</label>
                <textarea name="post" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="categories">
                    @foreach($categories as $catgory)
                        <option value="{{ $catgory->id }}">
                            {{ $catgory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/posts" class="btn btn-default">Back</a>
            </div>
        </form>
        </div>
    </div>

@endsection