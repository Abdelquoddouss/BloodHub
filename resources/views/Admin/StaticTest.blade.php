@extends('Admin.DashboardAdmin')
@section('content')
    <table class="table table-success table-striped align-middle table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Donneur</th>
                <th scope="col">score</th>
                <th scope="col">Status</th>
            </tr>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{ $result->id }}</td>
                    <td>{{ $result->user->name }}</td>
                    <td>{{ $result->score }}</td>
                    <td>
                        @if ($result->score == 9)
                            <span class="badge bg-success">Success</span>
                        @else
                            <span class="badge bg-danger">Danger</span>
                        @endif
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>
@endsection
