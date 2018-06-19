@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-darker text-white">
                    <div class="card-header">
                        Recently added tracks
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Artist</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Genre</th>
                            <th>Added</th>
                            <th>Source</th>
                            <th>Release status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(range(1,10) as $track)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>HeadHunterz</td>
                                <td>TBA</td>
                                <td>Edit</td>
                                <td>Hardstyle</td>
                                <td>{{ now()->subDays(random_int(1,100))->diffForHumans() }}</td>
                                <td><a href="#">Hard with style #42</a></td>
                                <td>
                                    <div class="badge badge-success">Unreleased</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
