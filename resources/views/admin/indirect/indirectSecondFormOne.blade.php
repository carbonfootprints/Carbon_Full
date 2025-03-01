@extends('main')
@section('indirectSecondFormOne')

<div class="card">
    <div class="card-header">
        <h5>Organisation Details</h5>
    </div>
    <div class="card-body">
        <form id="indirectSecondFormOne" method="post" action="#">
            <h3 class="text-center mb-2">Indirect Second Form One</h3>
            <div class="row mt-4">
                <div class="col-sm-6">

                    <div class="mb-3">
                        <label class="form-label">Date of Purchase</label>
                        <input type="date" class="form-control" name="date_of_purchase" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Invoice Number</label>
                        <input type="text" class="form-control" name="invoice_number"
                            placeholder="Enter Invoice Number" required>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <input type="text" class="form-control" name="supplier"
                            placeholder="Enter Supplier Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Area (sqft)</label>
                        <input type="number" step="0.01" class="form-control" name="area_sqft"
                            placeholder="Enter Area in Sqft" required>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="mb-3">
                        <label class="form-label">Weight (Tonnes)</label>
                        <input type="number" step="0.01" class="form-control" name="weight_tonnes"
                            placeholder="Enter Weight in Tonnes" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location of Supplier</label>
                        <input type="text" class="form-control" name="location_of_supplier"
                            placeholder="Enter Supplier Location" required>
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="mb-3">
                        <label class="form-label">Distance (KM)</label>
                        <input type="number" step="0.01" class="form-control" name="distance_km"
                            placeholder="Enter Distance in KM" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">T-KM</label>
                        <input type="number" step="0.01" class="form-control" name="t_km"
                            placeholder="Enter T-KM" required>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="card-footer"><button class="btn btn-primary me-2">Save and Continue</button></div>
</div>

@endsection