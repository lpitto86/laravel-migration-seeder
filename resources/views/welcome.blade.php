@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($trains as $index => $train)
                    <div class="col-3 pb-4">
                        <div class="card h-100" style="width: 18rem;">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Company: {{$train->company}}</li>
                                    <li class="list-group-item">Date: {{$train->date}}</li>
                                    <li class="list-group-item">Departure station: {{$train->departure_station}}</li>
                                    <li class="list-group-item">Arrival station: {{$train->arrival_station}}</li>
                                    <li class="list-group-item">Departure time: {{$train->departure_time}}</li>
                                    <li class="list-group-item">Arrival time: {{$train->arrival_time}}</li>
                                    <li class="list-group-item">Train code: {{$train->train_code}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('trains') }}" class="btn btn-primary">TODAY'S TRAINS</a>
            </div>
        </div>
    </main>
@endsection
