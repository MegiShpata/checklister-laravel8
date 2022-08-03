@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard User') }}</div>
                    <h5 class="cart-header">
                        <br>
                    </h5>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <table class="table table-hover table-borderless">
                            <thead>
                            <th>User</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>
                                        <a href="{{route('user.edit', $user->id)}}" style="color: black" >
                                            {{$user->name}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td>No User</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                            Want to go back to Tasks? <a href="{{route('todo.index')}}">here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
