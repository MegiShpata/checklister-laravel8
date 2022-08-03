@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Delete {{$user->name}}</div>
                    <h5 class="cart-header">
                        <br>
                        <a href="{{route('user.index')}}" class="btn btn-sm btn-outline-primary">Go Back</a>
                    </h5>
                    <div class="card-body">

                        <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                            @csrf
                            @method('Delete')
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <h4>Are you sure you want to delete{{$user->delete}}?</h4>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        Yes
                                    </button>
                                    <a href="{{route("user.index")}}" class="btn btn-info">No</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
