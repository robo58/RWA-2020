@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url()->previous()}}" class="btn btn-primary" style="margin-bottom:20px;">Back</a>

                    <table class="table rounded"  style="background:white;">
                        <thead class="rounded" style="background:white;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="rounded" style="background:white;">
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ implode(', ' , $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    @can('is-admin')
                                    <a href="{{route('users.edit',$user->id)}}"><button type="button"
                                            class="btn btn-primary float-left">Edit</button></a>
                                    @endcan
                                    @can('is-admin')
                                    <form action="{{route('users.destroy', $user)}}" method="POST"
                                        class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                    @endcan
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