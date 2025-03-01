@extends('main')

@section('organisation')
    <div class="card">
        <div class="card-header">
            <h5>Organisation Details</h5>
        </div>
        <div class="card-body">
            <form id="companyDetailForm" method="post" action="#">
                <h3 class="text-center mb-2">Let's start with the basic information</h3>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Organisation Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Company Registration Number</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Geographical Coordinates</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Contact Person</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Telephone Number</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Number of Employees</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Facility Description</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer"><button class="btn btn-primary me-2">Save and Continue</button></div>
    </div>
@endsection
