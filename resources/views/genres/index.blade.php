@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        Genres
                    </div>
                    <div class="card-body">
                        <div class="row">

                            @foreach(range(1, 100) as $i)
                                <div class="col-md-2">
                                    <ul>
                                        <li><a href="#">Hardstyle</a></li>
                                        <li><a href="#">Hardcore</a></li>
                                        <li><a href="#">UK Hardcore</a></li>
                                        <li><a href="#">Rawstyle</a></li>
                                    </ul>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
