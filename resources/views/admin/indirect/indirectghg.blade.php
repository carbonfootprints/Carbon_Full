@extends('main')

@section('direct')
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3">
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#companyDetails" data-bs-toggle="tab" class="nav-link active" role="tab">
                            <i class="ph-duotone ph-user-circle"></i> <span>Company Details</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#direct1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-map-pin"></i> <span>Direct 1</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#direct2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span>Direct 2</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#direct3" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-check-circle"></i> <span>Direct 3</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#indirect1_1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-user-circle"></i> <span>Indirect 1.1</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#indirect1_2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-map-pin"></i> <span>Indirect 1.2</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#indirect2_1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-check-circle"></i> <span>Indirect 2.1</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#indirect2_2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-user-circle"></i> <span>Indirect 2.2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div id="bar" class="progress mb-3" style="height: 7px">
                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="width: 10%;"></div>
                    </div>

                    <!-- Company Details -->
                    <div class="tab-pane active show" id="companyDetails" role="tabpanel">
                        <form id="contactForm" method="post" action="#">
                            <div class="text-center">
                                <h3 class="mb-2">Let's start with the basic information</h3><small class="text-muted">Let
                                    us
                                    know your name and email address. Use an address you don't mind other users contacting
                                    you
                                    at</small>
                            </div>
                            <div class="row mt-4">

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3"><label class="form-label">Organisation Name</label> <input
                                                    type="text" class="form-control"
                                                    placeholder="Enter Organisation Name"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3"><label class="form-label">Site Name</label> <input
                                                    type="text" class="form-control" placeholder="Enter Site Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3"><label class="form-label">Company Registration
                                                    Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Company Registration Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Geographical Coordinates</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Geographical Coordinates">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" placeholder="Enter Email Address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Contact Person</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Contact Person" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control"
                                                    placeholder="Enter Email Address" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telephone Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Telephone Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Number of Employees</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter Number of Employees">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Facility Description</label>
                                                <textarea class="form-control" placeholder="Enter Facility Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- Direct 1 Form -->
                    <div class="tab-pane" id="direct1" role="tabpanel">
                        <form id="direct1Form" method="post" action="#">
                            <h3 class="text-center mb-2">Direct Form 1</h3>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </form>
                    </div>

                    <!-- Indirect 2.2 Form -->
                    <div class="tab-pane" id="indirect2_2" role="tabpanel">
                        <form id="indirect2_2Form" method="post" action="#">
                            <h3 class="text-center mb-2">Indirect 2.2</h3>
                            <div class="mb-3">
                                <label class="form-label">Date of Sale</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                    <div class="first"><a href="javascript:void(0);" class="btn btn-secondary">First</a></div>
                    <div class="d-flex">
                        <div class="previous me-2"><a href="javascript:void(0);" class="btn btn-secondary">Back</a></div>
                        <div class="save me-2"><a href="javascript:void(0);" class="btn btn-secondary">Save</a></div>
                        <div class="next"><a href="javascript:void(0);" class="btn btn-primary">Next</a></div>
                    </div>
                    <div class="last"><a href="javascript:void(0);" class="btn btn-success">Finish</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentStep = 0;
            const steps = $(".tab-pane");
            const navItems = $(".nav-item a");
            const progressBar = $(".bar");

            function showStep(index) {
                steps.removeClass("active show");
                steps.eq(index).addClass("active show");

                navItems.removeClass("active");
                navItems.eq(index).addClass("active");

                updateProgress(index);
            }

            function updateProgress(index) {
                let percent = ((index + 1) / steps.length) * 100;
                progressBar.css("width", percent + "%");
            }

            $(".next a").click(function() {
                let currentForm = steps.eq(currentStep).find("form");
                let isValid = true;

                currentForm.find("input, select").each(function() {
                    if (!this.checkValidity()) {
                        isValid = false;
                        $(this).addClass("is-invalid");
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });

                if (isValid && currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            $(".previous a").click(function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            $(".first a").click(function() {
                currentStep = 0;
                showStep(currentStep);
            });

            $(".last a").click(function() {
                currentStep = steps.length - 1;
                showStep(currentStep);
            });

            showStep(currentStep);
        });
    </script>
@endsection
