@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-dark text-white">Add new track</div>

                    <div class="card-body">

                        <form method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Artist</label>
                                            <artist-selector></artist-selector>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Title (if known, else use TBA)</label>
                                            <input type="text" name="title" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Primary Genre</label>
                                            <select name="genre_id" class="form-control">
                                                @foreach($genres as $genre)
                                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Source Link</label>
                                            <input type="url" name="source_url" class="form-control" placeholder="https://www.youtube.com/watch?v=loyCp6_HZEA">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Source Description</label>
                                            <input type="text" name="source_description" class="form-control" placeholder="Hard With Style #55">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group text-right">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-yellow">Add track</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
