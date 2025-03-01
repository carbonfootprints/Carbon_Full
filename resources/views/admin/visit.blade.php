@extends('main')
@section('production')
    <div class="card">
        <div class="card-header">
            <h5>Start Visit</h5>
        </div>
        <div class="card-body" >
            <form id="visitForm" method="post" action="#" class="was-validated">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <!-- User ID (Non-editable) -->
                        <div class="mb-3">
                            <label class="form-label">User ID</label>
                            <input type="text" class="form-control" name="user_id" value="{{ Auth::id() }}" readonly>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- Visit Code (Non-editable, generated dynamically) -->
                        <div class="mb-3">
                            <label class="form-label">Visit Code</label>
                            <input type="text" class="form-control" name="visit_code" id="visit_code" readonly>
                        </div>
                    </div>


                </div>
            </form>
        </div>
        <div class="card-footer"><button class="btn btn-primary me-2">Start Calculation</button></div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Generate unique visit code
            function generateVisitCode() {
                return 'VIS-' + Math.random().toString(36).substr(2, 8).toUpperCase();
            }

            // Set visit code field
            document.getElementById('visit_code').value = generateVisitCode();
        });
    </script>
@endsection
