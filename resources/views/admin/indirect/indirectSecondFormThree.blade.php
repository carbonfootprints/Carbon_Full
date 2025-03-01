@extends('main')
@section('indirectSecondFormThree')

<div class="card">
    <div class="card-header">
        <h5>Organisation Details</h5>
    </div>
    <div class="card-body">
        <form id="indirectSecondFormThree" method="post" action="#">
            <h3 class="text-center mb-2">Company-Owned Vehicles</h3>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Company-Owned Vehicle Number</label>
                        <input type="number" class="form-control" name="company_owned_vehicle_no"
                            placeholder="Enter Number of Vehicles" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Type of Vehicle</label>
                        <input type="text" class="form-control" name="type_of_vehicle"
                            placeholder="Enter Type of Vehicle" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Distance Travelled (KM)</label>
                        <input type="number" step="0.01" class="form-control"
                            name="distance_travelled_km" placeholder="Enter Distance Travelled in KM"
                            required>
                    </div>
                </div>
            </div>


        </form>
    </div>
    <div class="card-footer"><button class="btn btn-primary me-2">Save and Continue</button></div>
</div>

@endsection