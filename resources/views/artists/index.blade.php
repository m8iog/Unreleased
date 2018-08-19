@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <artist-index default_artists="{{$artists}}"></artist-index>

            </div>
        </div>
    </div>
@endsection
