@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row justify-content-between text-center">
                    <h3 class="ml-2">Your Listing</h3>
                    <a class="btn btn-primary mr-2" href="{{ route('listing.create') }}"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if(count($listings) > 0)
                    <table class="data-table table stripe hover nowrap">
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{$loop->index }}</td>
                                <td>{{ $listing->name }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{ route('listing.show', $listing->id) }}"><i class="dw dw-eye text-primary"></i> View</a>
                                            <a class="dropdown-item" href="{{ route('listing.edit', $listing->id) }}"><i class="dw dw-edit2 text-warning"></i> Edit</a>
                                            <form action="{{ route('listing.destroy', $listing->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i class="dw dw-delete-3 text-danger"></i> Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
