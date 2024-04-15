@extends('Admin.DashboardAdmin')
  @section('content') 

   <!-- start page title -->
  <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Project</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">Create Project</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
<form action="{{ route('centers.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Center Title</label>
                                        <input type="text" name="nom" class="form-control" id="project-title-input" placeholder="Enter Center title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Center email</label>
                                        <input type="email" name="email" class="form-control" id="project-title-input" placeholder="Enter email  Center">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Center Description</label>
                                        <div class="form-floating">
                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">description </label>
                                </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Adress Center</label>
                                        <input type="text" name="adresse" class="form-control" id="project-title-input" placeholder="Enter adress Center">
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-lg-4">
                                        <div class="form-group">
                                        <label for="start-date">Date d'ouverture</label>
                                        <input type="date" name="overture" class="form-control" id="start-date">
                                    </div>
                                </div>
                                        <div class="col-lg-4">
                                        <div class="form-group">
                                        <label for="end-date">Date de fermeture</label>
                                        <input type="date" name="fermeture" class="form-control" id="end-date">
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Attached files</h5>
                                </div>
                                <div class="card-body">
                                <div class="file-loading">
        <label class="form-label" for="file-input">Center Files</label>
        <input type="file" name="files[]" class="form-control" id="file-input" multiple>
    </div>
                                       
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="text-end mb-4">
                               <button type="submit" class="btn btn-success w-sm">Create</button>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Privacy</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Center Phone</label>
                                        <input type="text" name="phone" class="form-control" id="project-title-input" placeholder="Enter Center Phone">
                                    </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Categories</h5>
                                </div>
                          <div class="card-body">
    <div class="mb-3">
        <label for="choices-categories-input" class="form-label">Categories</label>
        <select name="category_id" class="form-select" data-choices="" data-choices-search-false="" id="choices-categories-input">
    @foreach($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
    @endforeach
</select>
    </div>        
</div>
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    </form>
                    @endsection