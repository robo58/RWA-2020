@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <form method="POST" action="{{route('posts.store')}}">
                    @csrf
                    <label for="title"><h2>Title:</h2></label>
                    <input type="text" name="title" id="title" class="form-control">
                    <label for="text"><h2">Text:</h2></label>
                    <textarea name="text" id="mytextarea" cols="100" rows="5" ></textarea>
                    <label for="category"><h2 class="text-white">Category:</h2></label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>    
                    <button type="submit" class="btn btn-success btn-lg btn-block">Create Post</button>
                </form>
    
            </div>
        </div>
    </div>
</div>

@endsection