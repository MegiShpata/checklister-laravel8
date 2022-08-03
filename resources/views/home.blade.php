@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Task') }}</div>
               <h5 class="cart-header">
                   <br>
                   <a href="{{route('todo.create')}}" class="btn btn-sm btn-outline-primary">Add Task</a>
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
                        <th>Task</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @forelse($todos as $todo)
                            <tr>
                                @if($todo->completed)
                                    <td>
                                        <a href="{{route('todo.edit', $todo->id)}}" style="color: black" >
                                        <s>{{$todo->title}}</s></a></td>
                                @else
                                    <td>
                                        <a href="{{route('todo.edit', $todo->id)}}">
                                        {{$todo->title}}</a></td>
                                @endif

                                <td>
                                    <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{route('todo.show', $todo->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                                @empty
                            <tr>
                                <td>No Task</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                        Want to Update users? <a href="{{route('user.index')}}">here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
