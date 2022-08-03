@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Task</div>
                    <h5 class="cart-header" style="margin-left: 20px">
                        <br>
                        <a href="{{route('todo.index')}}" class="btn btn-sm btn-outline-primary">Go Back</a>
                    </h5>
                    <div class="card-body">


                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('todo.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-form-label text-md-right">Title</label>

                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('email') }}" required autocomplete="title" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-form-label text-md-right">Description</label>

                                <textarea name="description" id="description" cols="10" rows="5" class="form-control @error('password') is-invalid @enderror" autocomplete="description" value="{{ old('description') }}"></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="completed" id="completed" value="{{ old('completed')}}">

                                    <label class="form-check-label" for="completed">
                                        Completed?
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

