@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Task</div>
                    <h5 class="cart-header" style="margin-left: 20px">
                        <br>
                        <a href="{{route('user.index')}}" class="btn btn-sm btn-outline-primary" >Go Back</a>
                    </h5>
                    <div class="card-body">

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-form-label text-md-right">Name</label>

                                <input id="name" type="title" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-form-label text-md-right">email</label>

                                <input id="email" type="title" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                                <br>
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

