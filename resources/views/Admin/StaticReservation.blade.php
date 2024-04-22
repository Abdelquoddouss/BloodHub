@extends('Admin.DashboardAdmin')
@section('content') 

<table class="table table-success table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Donneur</th>
            <th scope="col">Center</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>{{ $reservation->user->name }}</td>
            <td>{{ $reservation->center->nom }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection