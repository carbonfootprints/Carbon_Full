@extends('main')

@section('organisation')
    <div class="card">
        <div class="card-header">
            <h5>Organisation Details</h5>
        </div>
        <div class="card-body">
            <form id="companyDetailForm" method="POST" action="{{ route('organisation.store', ['visit_id' => $visit_id]) }}">
                @csrf
                <h3 class="text-center mb-2">Let's start with the basic information</h3>

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Organisation Name</label>
                            <input type="text" class="form-control" name="organisation_name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="form-control" name="site_name" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Company Registration Number</label>
                            <input type="text" class="form-control" name="company_registration_number" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Geographical Coordinates</label>
                            <input type="text" class="form-control" name="geographical_coordinates" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Contact Person</label>
                            <input type="text" class="form-control" name="contact_person" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Telephone Number</label>
                            <input type="text" class="form-control" name="telephone_number" required>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Number of Employees</label>
                            <input type="text" class="form-control" name="number_of_employees" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Facility Description</label>
                            <input type="text" class="form-control" name="facility_description" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary me-2">Save and Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection
