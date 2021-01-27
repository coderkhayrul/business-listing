@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h3>Show List</h3>
                        <a class="btn btn-primary mr-2" href="{{ route('dashboard') }}"><i class="fas fa-backward"></i> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('listing.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="col-form-label">Name</label>
                            <input disabled value="{{ $listing->name }}" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror

                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Email</label>
                            <input disabled value="{{ $listing->email }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Phone</label>
                            <input disabled value="{{ $listing->phone }}" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Address</label>
                            <input disabled value="{{ $listing->address }}" type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                            @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Website</label>
                            <input value="{{ $listing->website }}" type="url" name="website" class="form-control @error('website') is-invalid @enderror" disabled>
                            @error('website') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Bio</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" rows="4" cols="50" disabled>{{ $listing->bio }}</textarea>
                            @error('bio') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection