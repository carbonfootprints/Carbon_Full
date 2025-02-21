@extends('main')
@section('organisation')
    <div class="card">
        <div class="card-header">
            <h5>3 Columns Horizontal Form Layout</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Name:</label>
                                <div class="col-lg-9"><input type="email" class="form-control" placeholder="Full name">
                                    <small class="form-text text-muted">Please enter your full name</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Email:</label>
                                <div class="col-lg-9"><input type="email" class="form-control" placeholder="Enter email">
                                    <small class="form-text text-muted">Please enter your email</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Password:</label>
                                <div class="col-lg-9">
                                    <div class="input-group"><span class="input-group-text"><i
                                                class="feather icon-lock"></i></span> <input type="password"
                                            class="form-control" placeholder="Enter Password"></div><small
                                        class="form-text text-muted">Please enter your Password</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Contact:</label>
                                <div class="col-lg-9"><input type="email" class="form-control"
                                        placeholder="Enter contact number"> <small class="form-text text-muted">Please enter
                                        your contact</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="mb-3"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Profile
                                    URL:</label>
                                <div class="col-lg-9">
                                    <div class="input-group search-form"><input type="text" class="form-control"
                                            placeholder="Fax Profile URL"> <span class="input-group-text bg-transparent"><i
                                                class="feather icon-alert-circle"></i></span></div><small
                                        class="form-text text-muted">Please enter Profile URL</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Pin code:</label>
                            <div class="col-lg-9"><input type="text" class="form-control"
                                    placeholder="Enter your Pin code"> <small class="form-text text-muted">Please enter your
                                    Pin code</small></div>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row"><label class="col-lg-3 col-form-label text-lg-end px-lg-0">Address:</label>
                                <div class="col-lg-9"><input type="text" class="form-control"
                                        placeholder="Enter your address"> <small class="form-text text-muted">Please enter
                                        your address</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <div class="row align-items-start"><label
                                    class="col-lg-3 col-form-label text-lg-end px-lg-0 pt-0">User Type:</label>
                                <div class="col-lg-9">
                                    <div>
                                        <div class="form-check form-check-inline"><input type="radio"
                                                id="customRadioInline231" name="customRadioInline1" class="form-check-input"
                                                checked="checked"> <label class="form-check-label"
                                                for="customRadioInline231">Administrator</label></div>
                                        <div class="form-check form-check-inline"><input type="radio"
                                                id="customRadioInline232" name="customRadioInline1"
                                                class="form-check-input"> <label class="form-check-label"
                                                for="customRadioInline232">Author</label></div>
                                    </div><small class="form-text">Please select User Type</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
