@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    <h3>Create Listing</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('listing.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Website</label>
                            <input type="url" name="website" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Bio</label>
                            <textarea class="form-control" name="bio" rows="4" cols="50"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection