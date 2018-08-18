@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header bg-dark text-white">Add new track</div>

          <div class="card-body">
            {!! Form::open(['method' => 'POST', 'action' => 'TrackController@store', 'class' => 'form-horizontal']) !!}
            <div class="row">

              <div class="col-md-4">
                <div class="form-group{{ $errors->has('artist') ? ' has-error' : '' }}">
                  {!! Form::label('artist', 'Input label') !!}
                  <artist-selector></artist-selector>
                  <small class="text-danger">{{ $errors->first('artist') }}</small>
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  {!! Form::label('title', 'Title (if known, else use TBA)') !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'TBA']) !!}
                  <small class="text-danger">{{ $errors->first('title') }}</small>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                  {!! Form::label('genre', 'Primary Genre') !!}
                  {!! Form::select('genre',$genres, null, ['class' => 'form-control',  'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('genre') }}</small>
                </div>
              </div>

            </div>

            <div class="row">

              <div class="col-md-6">
                <div class="form-group{{ $errors->has('source_url') ? ' has-error' : '' }}">
                  {!! Form::label('source_url', 'Source link') !!}
                  {!! Form::url('source_url', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>"https://www.youtube.com/watch?v=loyCp6_HZEA"]) !!}
                  <small class="text-danger">{{ $errors->first('source_url') }}</small>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group{{ $errors->has('source_description') ? ' has-error' : '' }}">
                  {!! Form::label('source_description', 'Source Description') !!}
                  {!! Form::text('source_description', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>"Hard With Style #55"]) !!}
                  <small class="text-danger">{{ $errors->first('source_description') }}</small>
                </div>
              </div>
            </div>


            <div class="btn-group pull-right">
              {!! Form::submit("Add track", ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
