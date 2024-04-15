@extends('Admin.DashboardAdmin')
@section('content') 

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Center</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('centers.index') }}">Centers</a></li>
                    <li class="breadcrumb-item active">Edit Center</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('centers.update', $center->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="project-title-input">Center Title</label>
                        <input type="text" name="nom" class="form-control" id="project-title-input" value="{{ $center->nom }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="project-title-input">Center Email</label>
                        <input type="email" name="email" class="form-control" id="project-title-input" value="{{ $center->email }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Center Description</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" id="floatingTextarea">{{ $center->description }}</textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="project-title-input">Address Center</label>
                        <input type="text" name="adresse" class="form-control" id="project-title-input" value="{{ $center->adresse }}">
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="start-date">Opening Date</label>
                                <input type="date" name="overture" class="form-control" id="start-date" value="{{ $center->overture }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="end-date">Closing Date</label>
                                <input type="date" name="fermeture" class="form-control" id="end-date" value="{{ $center->fermeture }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
    <label class="form-label">Files</label>
    <input type="file" name="files[]" class="form-control" multiple>
</div>
                </div>
            </div>

            <div class="text-end mb-4">
                <button type="submit" class="btn btn-primary w-sm">Update</button>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Privacy</h5>
                </div>
                <div class="card-body">
                    <div>
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Center Phone</label>
                            <input type="text" name="phone" value="{{ $center->phone }}" class="form-control" id="project-title-input" placeholder="Enter Center Phone">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Categories</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="choices-categories-input" class="form-label">Categories</label>
                        <select name="category_id" class="form-select" id="choices-categories-input">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{ $center->category_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
