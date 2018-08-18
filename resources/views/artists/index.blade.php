@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                      <div class="row">
                        <div class="col-md-10">
                          Artists

                        </div>
                        <div class="col-md-2">
                          <a href="{{route('artist.create')}}" class="btn btn-info">Create artist</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                        @forelse($artists as $artist)
                            <div class="media">
                                <img class="mr-3" src="{{ $artist->getAvatarUrl() }}" alt="Generic placeholder image">
                                <div class="media-body">
                                  <a href="{{route("artist.show", $artist->id)}}">
                                    <h5 class="mt-0">{{ $artist->stage_name }}</h5>
                                    </a>
                                    <strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid aut autem dolores et eveniet explicabo fuga fugiat ipsam, laboriosam
                                    maiores non optio, perspiciatis recusandae, rerum tempore ut vel voluptatem.
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
