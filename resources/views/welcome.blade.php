@extends('layouts.layout')

@section('main')

<div class="container">
    <h1>Partenze odierne</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Departure</th>
            <th scope="col">Arrival</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($trains as $train)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->train_station_start }}</td>
                    <td>{{ $train->train_station_last }}</td>
                    <td>{{ $train->departure }}</td>
                    <td>{{ $train->arrival }}</td>
                </tr>
            @empty
                <p>No train found</p>
            @endforelse
          
        </tbody>
      </table>
</div>
    
@endsection