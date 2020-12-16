@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card-body">
                        
                    <h4>Title: {{ $post->title }}</h4>

                    <br />

                    <p>Text: {{ $post->text }}</p>

                    <p>Category: {{ $post->category->name }}</p>

                    <form method="POST" action="{{route('posts.destroy',$post->id)}}">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-block">Delete</button>
                  </form>
            </div>
        </div>
    </div>
</div>



@endsection
