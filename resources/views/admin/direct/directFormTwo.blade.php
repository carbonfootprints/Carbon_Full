@extends('main')

@section('directformtwo')
    <div class="card">
        <div class="card-header">
            <h5>Organisation Details</h5>
        </div>
        <div class="card-body">
            <form id="directFormTwo" method="post" action="#">
                <h3 class="text-center mb-2">Direct Form Two</h3>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Wooden Pallets</label>
                            <input type="number" step="0.01" class="form-control" name="wooden_pallets"
                                placeholder="Enter amount of wooden pallets" required>
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="mb-3">
                            <label class="form-label">Firewood</label>
                            <input type="number" step="0.01" class="form-control" name="firewood"
                                placeholder="Enter amount of firewood" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Diesel</label>
                            <input type="number" step="0.01" class="form-control" name="diesel"
                                placeholder="Enter amount of diesel" required>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="card-footer"><button class="btn btn-primary me-2">Save and Continue</button></div>
    </div>
@endsection
