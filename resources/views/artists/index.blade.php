@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        Artists
                    </div>
                    <div class="card-body">
                        @forelse($artists as $artist)
                            <div class="media">
                                <img class="mr-3" src="..." alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        @empty
                            <i>No artists has been added yet</i>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
