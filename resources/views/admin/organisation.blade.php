@extends('main')
@section('organisation')
    <div class="card">
        <div class="card-header">
            <h5>Organisation Details Form</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Name of the Organisation:</label>
                            <input type="text" class="form-control" placeholder="Organisation Name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Site Name:</label>
                            <input type="text" class="form-control" placeholder="Site Name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Company Registration Number:</label>
                            <input type="text" class="form-control" placeholder="Registration Number">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Geographical Coordinates:</label>
                            <input type="text" class="form-control" placeholder="Latitude, Longitude">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Address:</label>
                            <input type="text" class="form-control" placeholder="Full Address">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Contact Person:</label>
                            <input type="text" class="form-control" placeholder="Contact Name">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" placeholder="Contact Email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Telephone Number:</label>
                            <input type="text" class="form-control" placeholder="Contact Number">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">Number of Employees:</label>
                            <input type="number" class="form-control" placeholder="Total Employees">
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Description of the Facility:</label>
                            <textarea class="form-control" rows="3" placeholder="Describe the facility..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save and Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection
