@extends('Admin.DashboardAdmin')
@section('content')
    <table class="table table-success table-striped align-middle table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Donneur</th>
                <th scope="col">Center</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->center->nom }}</td>
                    <td>
                        @if ($reservation->status == App\Models\Reservation::STATUS_APPROVED)
                            <span class="badge bg-success">Approuvé</span>
                        @elseif($reservation->status == App\Models\Reservation::STATUS_CONFIRMED)
                            <span class="badge bg-primary">Confirmé</span>
                        @else
                            <span class="badge bg-secondary">En attente</span>
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
