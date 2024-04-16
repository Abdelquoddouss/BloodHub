@extends('Admin.DashboardAdmin')
  @section('content') 
<div>


        <div class="position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg profile-setting-img">
                <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img src="{{ Auth::user()->getFirstMediaUrl('profile_images') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h5>
                        <p class="text-muted mb-0">Admin / Developer</p>
                    </div>
                </div>
            </div>
                <!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-0">Portfolio</h5>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                    <i class="ri-github-fill"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="gitUsername" placeholder="Username" value="@daveadame">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-primary">
                                    <i class="ri-global-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="websiteInput" placeholder="www.example.com" value="www.velzon.com">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-success">
                                    <i class="ri-dribbble-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="dribbleName" placeholder="Username" value="@dave_adame">
                        </div>
                        <div class="d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-danger">
                                    <i class="ri-pinterest-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pinterestName" placeholder="Username" value="Advance Dave">
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                    <i class="fas fa-home"></i> Personal Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                    <i class="far fa-user"></i> Your Center
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                        <form action="javascript:void(0);">
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="firstnameInput" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="{{ Auth::user()->name }}">
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="lastnameInput" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="{{ Auth::user()->lastname }}">
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="phonenumberInput" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{ Auth::user()->phone }}">
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="{{ Auth::user()->email }}">
            </div>
        </div>
        <!--end col-->
        <div class="col-lg-6">
            <div class="mb-3">
                <label for="birthdate" class="form-label">Date de naissance<span class="text-danger"></span></label>
                <input type="date" class="form-control" name="datebirth" id="birthdate" required value="{{ Auth::user()->datebirth }}">
            </div>  
        </div>
        <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Updates</button>
                                                            <button type="button" class="btn btn-soft-success">Cancel</button>
                                                        </div>
                                                    </div>  
    </div>
    <!--end row-->
</form>
                            </div>
                    </div>
               
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div><!-- End Page-content -->


</div>
</div>

  @endsection