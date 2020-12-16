@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('posts.update',$post->id)}}">
            @method('PUT')
            @csrf
            
            <div class="col-md-8">
                <label for="title"><h2 >Title:</h2></label>
                <input type="text" name="title" id="title" cols="50" class="form-control" value="{{$post->title}}">
                <label for="category"><h2 >Category:</h2></label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <label for="text"><h2 >Text:</h2></label>
                <textarea name="text" id="mytextarea" cols="50" rows="10" style="width:637px; height:196px;">{{$post->text}}</textarea>
            </div>
            <div class="col-md-4">
                <div class="well bg-grey rounded">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>

@endsection