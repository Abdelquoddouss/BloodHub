@extends('Admin.DashboardAdmin')
@section('content')
    <div class="col-sm-auto">
        <div>
            <a href="{{ route('centers.create') }}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add
                New</a>
        </div>
    </div>
    <br>
    <table class="table table-success table-striped align-middle table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Description</th>
                <th scope="col">Images</th> <!-- Add a new column for images -->
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centers as $center)
                <tr>
                    <td>{{ $center->id }}</td>
                    <td>{{ $center->nom }}</td>
                    <td>{{ $center->adresse }}</td>
                    <td>{{ $center->email }}</td>
                    <td>{{ $center->phone }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($center->description, 50) }}</td>
                    <td>
                        @foreach ($center->getMedia('files') as $media)
                            <img src="{{ $media->getUrl() }}" alt="Image" width="50">
                        @endforeach
                    </td>
                    <td>
                        <div class="hstack gap-3 flex-wrap">
                            <a href="{{ route('centers.edit', $center->id) }}" class="link-success fs-15"><i
                                    class="ri-edit-2-line"></i></a>
                            <form id="delete-form-{{ $center->id }}" action="{{ route('centers.destroy', $center->id) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="link-danger fs-15 delete-btn" data-id="{{ $center->id }}"
                                style="background: none; border: none; color: red;"><i
                                    class="ri-delete-bin-line"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
