@extends('Admin.DashboardAdmin')
  @section('content') 

  <div class="col-sm-auto">
                            <div>
                                <a href="/AddCenter" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add New</a>
                            </div>
                        </div>
                <br>
  <table class="table table-success table-striped align-middle table-nowrap mb-0">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Invoice</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Basic Plan</td>
            <td>$860</td>
            <td>Nov 22, 2021</td>
            <td><i class="ri-checkbox-circle-line align-middle text-success"></i> Subscribed</td>
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Premium Plan</td>
            <td>$1200</td>
            <td>Nov 10, 2021</td>
            <td><i class="ri-close-circle-line align-middle text-danger"></i> Unsubscribed</td>
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Basic Plan</td>
            <td>$860</td>
            <td>Nov 19, 2021</td>
            <td><i class="ri-checkbox-circle-line align-middle text-success"></i> Subscribed</td>
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Corporate Plan</td>
            <td>$1599</td>
            <td>Nov 22, 2021</td>
            <td><i class="ri-checkbox-circle-line align-middle text-success"></i> Subscribed</td>
            <td>
                <div class="hstack gap-3 flex-wrap">
                    <a href="javascript:void(0);" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

  @endsection