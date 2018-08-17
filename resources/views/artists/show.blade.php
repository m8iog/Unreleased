@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Tracks by {{$artist->stage_name}}
                    </div>
                    <div class="card-body">
                      @forelse ($artist->tracks as $t)
                        {{$t->title}}
                      @empty
                        No
                      @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
