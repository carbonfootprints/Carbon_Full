@extends('main')
@section('indirectFirstFormOne')

<div class="card">
    <div class="card-header">
        <h5>Organisation Details</h5>
    </div>
    <div class="card-body">
        <form id="indirectFirstFormOne" method="post" action="#">
            <h3 class="text-center mb-2">Indirect Form One</h3>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">KWH Tannery</label>
                        <input type="number" step="0.01" class="form-control" name="kwh_tannery"
                            placeholder="Enter KWH used in tannery" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">KWH CEPT</label>
                        <input type="number" step="0.01" class="form-control" name="kwh_cept"
                            placeholder="Enter KWH used in CEPT" required>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="card-footer"><button class="btn btn-primary me-2">Save and Continue</button></div>
</div>

@endsection