@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <div class="card-title">Recently added</div>
                    </div>
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Arist</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Genre</th>
                            <th>Added</th>
                            <th>Source</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(range(1,100) as $track)
                            <tr>
                                <td>{{ $loop->index }}</td>
                                <td>HeadHunterz</td>
                                <td>TBA</td>
                                <td>Edit</td>
                                <td>Hardstyle</td>
                                <td>{{ now()->subDays(random_int(1,100)) }}</td>
                                <td><a href="#">Hard with style #42</a></td>
                                <td>Unreleased</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
