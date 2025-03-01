@extends('main')

@section('direct')
    <div class="col-12">
        <div class="card">
            <div class="card-body p-3">
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item" data-target-form="#companyDetailForm" role="presentation">
                        <a href="#companyDetails" data-bs-toggle="tab" class="nav-link active" role="tab">
                            <i class="ph-duotone ph-user-circle"></i> <span class="d-none d-sm-inline">Company
                                Details</span>
                        </a>
                    </li>
                    
                    <li class="nav-item" data-target-form="#directFormOne" role="presentation">
                        <a href="#direct1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-map-pin"></i> <span class="d-none d-sm-inline">Direct 1</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#directFormTwo" role="presentation">
                        <a href="#direct2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Direct 2</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#directFormThree" role="presentation">
                        <a href="#direct3" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Direct 3</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#indirectFirstFormOne" role="presentation">
                        <a href="#indirect1_1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-map-pin"></i> <span class="d-none d-sm-inline">Indirect 1.1</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#indirectFirstFormTwo" role="presentation">
                        <a href="#indirect1_2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Indirect
                                1.2</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#indirectSecondFormOne" role="presentation">
                        <a href="#indirect2_1" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Indirect
                                2.1</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#indirectSecondFormTwo" role="presentation">
                        <a href="#indirect2_2" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Indirect
                                2.2</span>
                        </a>
                    </li>
                    <li class="nav-item" data-target-form="#indirectSecondFormThree" role="presentation">
                        <a href="#indirect2_3" data-bs-toggle="tab" class="nav-link" role="tab">
                            <i class="ph-duotone ph-graduation-cap"></i> <span class="d-none d-sm-inline">Indirect
                                2.3</span>
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
                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="width: 25%;"></div>
                    </div>

                    <!-- Step 1: Contact Details -->
                    <div class="tab-pane active show" id="companyDetails" role="tabpanel">
                        <form id="companyDetailForm" method="post" action="#" >
                            <h3 class="text-center mb-2">Let's start with the basic information</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Organisation Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Organisation Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Site Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Site Name"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Registration Number</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Company Registration Number" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Geographical Coordinates</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Geographical Coordinates" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" placeholder="Enter Contact Person"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Telephone Number"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Number of Employees</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Number of Employees" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Facility Description</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Facility Description" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Step 2: Job Details -->
                    <div class="tab-pane" id="direct1" role="tabpanel">
                        <form id="directFormOne" method="post" action="#">
                            <h3 class="text-center mb-2">Direct Form 1</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Wooden Pallets</label>
                                        <input type="number" step="0.01" class="form-control" name="wooden_pallets"
                                            placeholder="Enter amount" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Firewood</label>
                                        <input type="number" step="0.01" class="form-control" name="firewood"
                                            placeholder="Enter amount" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Diesel</label>
                                        <input type="number" step="0.01" class="form-control" name="diesel"
                                            placeholder="Enter amount" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane" id="direct2" role="tabpanel">
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



                    <div class="tab-pane" id="direct3" role="tabpanel">
                        <form id="directFormThree" method="post" action="#">
                            <h3 class="text-center mb-2">Direct Form Three</h3>
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


                    <div class="tab-pane" id="indirect1_1" role="tabpanel">
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


                    <div class="tab-pane" id="indirect1_2" role="tabpanel">
                        <form id="indirectFirstFormTwo" method="post" action="#">
                            <h3 class="text-center mb-2">Indirect Form Two</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">

                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">KWH</label>
                                        <input type="number" step="0.01" class="form-control" name="kwh"
                                            placeholder="Enter KWH" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">TND Loss (KWH)</label>
                                        <input type="number" step="0.01" class="form-control" name="tnd_loss_kwh"
                                            placeholder="Enter Transmission & Distribution Loss (KWH)" required>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>


                    <div class="tab-pane" id="indirect2_1" role="tabpanel">
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


                    <div class="tab-pane" id="indirect2_2" role="tabpanel">
                        <form id="indirectSecondFormTwo" method="post" action="#">
                            <h3 class="text-center mb-2">Indirect Second Form Two</h3>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Sale</label>
                                        <input type="date" class="form-control" name="date_of_sale" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Invoice Number</label>
                                        <input type="text" class="form-control" name="invoice_number"
                                            placeholder="Enter Invoice Number" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="mb-3">
                                        <label class="form-label">Customer</label>
                                        <input type="text" class="form-control" name="customer"
                                            placeholder="Enter Customer Name" required>
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
                                        <label class="form-label">Location of Customer</label>
                                        <input type="text" class="form-control" name="location_of_customer"
                                            placeholder="Enter Customer Location" required>
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


                    <div class="tab-pane" id="indirect2_3" role="tabpanel">
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
                        <div class="save me-2"><a href="javascript:void(0);" class="btn btn-primary">Save</a></div>
                        <div class="next"><a href="javascript:void(0);" class="btn btn-secondary">Next</a></div>
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
        console.log("Next clicked. Current step:", currentStep);
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
        console.log("Back clicked. Current step:", currentStep);
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

document.addEventListener("DOMContentLoaded", function () {
        const formSelectors = [
            "#companyDetailForm",
            "#directFormOne",
            "#directFormTwo",
            "#directFormThree",
            "#indirectFirstFormOne",
            "#indirectFirstFormTwo",
            "#indirectSecondFormOne",
            "#indirectSecondFormTwo",
            "#indirectSecondFormThree"
        ];

        formSelectors.forEach(selector => {
            const inputs = document.querySelectorAll(`${selector} input`);

            inputs.forEach(input => {
                input.addEventListener("input", function () {
                    this.classList.add("is-valid");   // Add Bootstrap success class
                    this.classList.remove("is-invalid"); // Remove error class if valid
                });

                input.addEventListener("blur", function () { // When user leaves input
                    if (!this.checkValidity()) { // Check if input is valid
                        this.classList.add("is-invalid"); // Apply error class if invalid
                        this.classList.remove("is-valid");
                    } else {
                        this.classList.add("is-valid");
                        this.classList.remove("is-invalid");
                    }
                });
            });
        });
    });

    </script>
@endsection
