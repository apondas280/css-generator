<!-- Start table -->
<hr>
<h1 class="my-5"><i class="fi-rr-sun"></i> Form Elements </h1>

<!-- Form Start -->
<div class="ol-card p-3">
    <div class="ol-card-body">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="dAdmin_info_name min-w-150px">
                        <label class="form-label ol-form-label">Date range picker</label>
                        <div class="eSwitches">
                            <div class="form-check form-switch">
                                <input class="form-check-input form-switch-medium" type="checkbox" checked="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <label class="form-label ol-form-label">Date range picker</label>
                    <div class="mb-3 position-relative position-relative">
                        <input type="text" class="form-control ol-form-control daterangepicker w-100"
                            name="eDateRange" value="06/01/2024 - 06/30/2024">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-2">
                    <div class="eForm-layouts">
                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="title">Title<span
                                    class="text-danger ms-1">*</span></label>
                            <input type="text" name="title" class="form-control ol-form-control"
                                placeholder="Enter Course Title" required="">
                        </div>
                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="short_description">Short
                                Description</label>
                            <textarea name="short_description" placeholder="Enter Short Description" class="form-control ol-form-control"
                                rows="5" data-gramm="false" wt-ignore-input="true"></textarea>
                        </div>
                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="description">Description</label>
                            <textarea name="description" placeholder="Enter Description" class="form-control ol-form-control text_editor"></textarea>
                        </div>
                        <div class="fpb-7 mb-2 ">
                            <label for="course_status" class="col-sm-2 col-form-label">Create as
                                <span class="text-danger ms-1">*</span></label>
                            <div class="eRadios">
                                <div class="form-check">
                                    <input type="radio" value="active" name="status"
                                        class="form-check-input eRadioSuccess" id="status_active" required=""
                                        checked="">
                                    <label for="status_active" class="form-check-label">Active</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" value="private" name="status"
                                        class="form-check-input eRadioPrimary" id="status_private" required="">
                                    <label for="status_private" class="form-check-label">Private</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" value="upcoming" name="status"
                                        class="form-check-input eRadioInfo" id="status_upcoming" required="">
                                    <label for="status_upcoming" class="form-check-label">Upcoming</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" value="pending" name="status"
                                        class="form-check-input eRadioDanger" id="status_pending" required="">
                                    <label for="status_pending" class="form-check-label">Pending</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" value="draft" name="status"
                                        class="form-check-input eRadioSecondary" id="status_draft" required="">
                                    <label for="status_draft" class="form-check-label">Draft</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" value="inactive" name="status"
                                        class="form-check-input eRadioDark" id="status_inactive" required="">
                                    <label for="status_inactive" class="form-check-label">Inactive</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-select2-id="select2-data-86-zf2b">
                    <div class="eForm-layouts">
                        <div class="fpb-7 mb-3">
                            <label for="category_id" class="form-label ol-form-label">Category<span
                                    class="text-danger ms-1">*</span></label>
                            <select class="ol-select2 select2-hidden-accessible" name="category_id" id="category_id">
                                <option value="41" data-select2-id="select2-data-99-2evo"> --
                                    Vinyasa yoga
                                </option>
                                <option value="42" data-select2-id="select2-data-100-b1uf"> --
                                    Restorative Yoga
                                </option>
                                <option value="44" data-select2-id="select2-data-101-zjro"> --
                                    Tanya Wiggins
                                </option>
                            </select>
                        </div>
                        <div class="fpb-7 mb-3">
                            <label for="level" class="form-label ol-form-label">Course level<span
                                    class="text-danger ms-1">*</span></label>
                            <select class="ol-select2 select2-hidden-accessible" name="level" id="level">
                                <option value="" data-select2-id="select2-data-60-clo7">Select
                                    your
                                    course level
                                </option>
                                <option value="beginner" data-select2-id="select2-data-145-f5x6">
                                    Beginner</option>
                                <option value="intermediate" data-select2-id="select2-data-146-g540">
                                    Intermediate
                                </option>
                                <option value="advanced" data-select2-id="select2-data-147-ro8u">
                                    Advanced</option>
                            </select>
                        </div>
                        <div class="fpb-7 mb-3">
                            <label for="language" class="form-label ol-form-label">Made in
                                <span class="text-danger ms-1">*</span></label>
                            <select class="ol-select2 select2-hidden-accessible" name="language" id="language">
                                <option value="" data-select2-id="select2-data-65-t0lk">Select
                                    your
                                    course language
                                </option>
                                <option value="english" class="text-capitalize">English</option>
                                <option value="hindi" class="text-capitalize">Hindi</option>
                                <option value="spanish" class="text-capitalize">Spanish</option>
                            </select>
                        </div>

                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label col-sm-2 col-form-label">Pricing
                                type<span class="text-danger ms-1">*</span></label>

                            <div class="eRadios">
                                <div class="form-check">
                                    <input type="radio" name="is_paid" value="1"
                                        class="form-check-input eRadioSuccess" id="paid"
                                        onchange="$('#paid-section').slideDown(200)" checked="">
                                    <label for="paid" class="form-check-label">Paid</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="is_paid" value="0"
                                        class="form-check-input eRadioSuccess" id="free"
                                        onchange="$('#paid-section').slideUp(200)">
                                    <label for="free" class="form-check-label">Free</label>
                                </div>
                                <div class="paid-section" id="paid-section">
                                    <div class="fpb-7 mb-3">
                                        <label for="price" class="form-label ol-form-label">Price
                                            <small>($0)</small><span class="text-danger ms-1">*</span></label>

                                        <input type="number" name="price" class="form-control ol-form-control"
                                            id="price" min="1" step=".01"
                                            placeholder="Enter your course price ($0)">
                                    </div>

                                    <div class="fpb-7 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="discount_flag" value="1"
                                                class="form-check-input eRadioSuccess" id="discount_flag">
                                            <label for="discount_flag" class="form-check-label">Check if
                                                this course has
                                                discount</label>
                                        </div>
                                    </div>

                                    <div class="fpb-7 mb-3">
                                        <label for="discounted_price" class="form-label ol-form-label">Discounted
                                            price</label>

                                        <input type="number" name="discounted_price"
                                            class="form-control ol-form-control" id="discounted_price" min="1"
                                            step=".01" placeholder="Enter your discount price ($0)">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="fpb-7">
                        <label for="thumbnail" class="form-label ol-form-label">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control ol-form-control form-control-file"
                            id="thumbnail" accept="image/*">
                    </div>
                </div>
                <div class="pt-2">
                    <button type="submit" class="btn ol-btn-primary float-end">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Form Ended -->
