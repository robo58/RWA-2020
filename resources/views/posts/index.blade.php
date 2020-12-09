@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            <a href="{{ route('posts.create') }} " class="btn btn-block btn-primary">Create new post</a>

                @foreach ($posts as $post)

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            
                        <h4>Title: {{ $post->title }}</h4>

                        <br />

                        <p>Text: {{ $post->text }}</p>


                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection