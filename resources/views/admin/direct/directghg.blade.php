@extends('main')

@section('direct')
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3">
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item" data-target-form="#contactDetailForm" role="presentation">
                        <a href="#contactDetail" data-bs-toggle="tab" class="nav-link active" role="tab">
                            <i class="ph-duotone ph-user-circle"></i> <span class="d-none d-sm-inline">About Me</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#jobDetailForm" role="presentation">
                        <a href="#jobDetail" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-map-pin"></i> <span class="d-none d-sm-inline">Address</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#educationDetailForm" role="presentation">
                        <a href="#educationDetail" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Education</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#finish" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-check-circle"></i> <span class="d-none d-sm-inline">Finish</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <!-- Progress Bar -->
                    <div id="bar" class="progress mb-3" style="height: 7px">
                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 25%;"></div>
                    </div>

                    <!-- Step 1: Contact Details -->
                    <div class="tab-pane active show" id="contactDetail" role="tabpanel">
                        <form id="contactForm" method="post" action="#" class="was-validated">
                            <h3 class="text-center mb-2">Let's start with the basic information</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter First Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Step 2: Job Details -->
                    <div class="tab-pane" id="jobDetail" role="tabpanel">
                        <form id="jobForm" method="post" action="#" class="was-validated">
                            <h3 class="text-center mb-2">Tell me about your home address</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Street Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Street Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="Enter City" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3: Education Details -->
                    <div class="tab-pane" id="educationDetail" role="tabpanel">
                        <form id="educationForm" method="post" action="#" class="was-validated">
                            <h3 class="text-center mb-2">Tell us about your education</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">School Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your school name" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Step 4: Finish -->
                    <div class="tab-pane" id="finish" role="tabpanel">
                        <div class="text-center">
                            <i class="ph-duotone ph-gift f-50 text-danger"></i>
                            <h3 class="mt-4 mb-3">Thank you!</h3>
                            <p>Your information has been recorded successfully.</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
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
        $(document).ready(function () {
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

            $(".next a").click(function () {
                let currentForm = steps.eq(currentStep).find("form");
                let isValid = true;

                currentForm.find("input, select").each(function () {
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

            $(".previous a").click(function () {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            $(".first a").click(function () {
                currentStep = 0;
                showStep(currentStep);
            });

            $(".last a").click(function () {
                currentStep = steps.length - 1;
                showStep(currentStep);
            });

            showStep(currentStep);
        });
    </script>
@endsection
