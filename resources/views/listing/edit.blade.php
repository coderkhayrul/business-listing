@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <h3>Update Listing</h3>
                        <a class="btn btn-primary mr-2" href="{{ route('dashboard') }}"><i class="fas fa-backward"></i> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('listing.update',$listing->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="" class="col-form-label">Name</label>
                            <input value="{{ $listing->name }}" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror

                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Email</label>
                            <input value="{{ $listing->email }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Phone</label>
                            <input value="{{ $listing->phone }}" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
                            @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Address</label>
                            <input value="{{ $listing->address }}" type="text" name="address" class="form-control @error('address') is-invalid @enderror">
                            @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Website</label>
                            <input value="{{ $listing->website }}" type="url" name="website" class="form-control @error('website') is-invalid @enderror">
                            @error('website') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Bio</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" rows="4" cols="50">{{ $listing->bio }}</textarea>
                            @error('bio') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success"><i class="fas fa-sync"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection