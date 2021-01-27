@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between text-center">
                    <h4 class="ml-2">Latest Business Listings</h4>
                </div>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if(count($listings) > 0)
                        @foreach($listings as $listing )
                            <div class="list-group">
                                <a href="{{ route('listing.show', $listing->id) }}" class="list-group-item list-group-item-action">{{ $listing->name }}</a>
                            </div>
                        @endforeach
                    @else
                    <p>No List Found</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
