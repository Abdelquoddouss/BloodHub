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


                    
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="project-title-input">Project Title</label>
                                        <input type="text" class="form-control" id="project-title-input" placeholder="Enter project title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="project-thumbnail-img">Thumbnail Image</label>
                                        <input class="form-control" id="project-thumbnail-img" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Project Description</label>
                                        <div id="ckeditor-classic">
                                            <p>It will be as simple as occidental in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                            <ul>
                                                <li>Product Design, Figma (Software), Prototype</li>
                                                <li>Four Dashboards : Ecommerce, Analytics, Project etc.</li>
                                                <li>Create calendar, chat and email app pages.</li>
                                                <li>Add authentication pages</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-priority-input" class="form-label">Priority</label>
                                                <select class="form-select" data-choices="" data-choices-search-false="" id="choices-priority-input">
                                                    <option value="High" selected="">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-status-input" class="form-label">Status</label>
                                                <select class="form-select" data-choices="" data-choices-search-false="" id="choices-status-input">
                                                    <option value="Inprogress" selected="">Inprogress</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="datepicker-deadline-input" class="form-label">Deadline</label>
                                                <input type="text" class="form-control" id="datepicker-deadline-input" placeholder="Enter due date" data-provider="flatpickr">
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
                                    <div>
                                        <p class="text-muted">Add Attached files here.</p>

                                        <div class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h5>Drop files here or click to upload.</h5>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">
                                                <!-- This is used as the file preview template -->
                                                <div class="border rounded">
                                                    <div class="d-flex p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded">
                                                                <img src="#" alt="Project-Image" data-dz-thumbnail="" class="img-fluid rounded d-block">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="fs-14 mb-1" data-dz-name="">&nbsp;</h5>
                                                                <p class="fs-13 text-muted mb-0" data-dz-size=""></p>
                                                                <strong class="error text-danger" data-dz-errormessage=""></strong>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <button data-dz-remove="" class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- end dropzon-preview -->
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
                                        <label for="choices-privacy-status-input" class="form-label">Status</label>
                                        <select class="form-select" data-choices="" data-choices-search-false="" id="choices-privacy-status-input">
                                            <option value="Private" selected="">Private</option>
                                            <option value="Team">Team</option>
                                            <option value="Public">Public</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tags</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="choices-categories-input" class="form-label">Categories</label>
                                        <select class="form-select" data-choices="" data-choices-search-false="" id="choices-categories-input">
                                            <option value="Designing" selected="">Designing</option>
                                            <option value="Development">Development</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="choices-text-input" class="form-label">Skills</label>
                                        <input class="form-control" id="choices-text-input" data-choices="" data-choices-limit="Required Limit" placeholder="Enter Skills" type="text" value="UI/UX, Figma, HTML, CSS, Javascript, C#, Nodejs">
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
  


  @endsection