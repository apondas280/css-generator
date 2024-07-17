<div class="ol-card p-3 py-5 my-5">
    <div class="ol-card-body">
        <h4 class="title mt-4 mb-3">Website FAQS</h4>
        <form action="#/admin/website_settings/update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="JfYCcMGyl6mvFyH38eQllRZtSf7rf1mxFMYkAXKW" autocomplete="off"> <input
                type="hidden" name="type" value="websitefaqs">
            <div class="row">
                <div class="col-md-8">
                    <div id="faq_area">
                        <div class="d-flex mt-2">
                            <div class="flex-grow-1 px-2 mb-3">
                                <div class="fpb-7 mb-3">
                                    <label class="form-label ol-form-label">Question</label>
                                    <input type="text" class="form-control ol-form-control" name="questions[]"
                                        id="questions" placeholder="Write a question" value="How to create an account?">
                                </div>
                                <div class="fpb-7 mb-3">
                                    <label class="form-label ol-form-label">Answer</label>
                                    <textarea name="answers[]" class="form-control ol-form-control" placeholder="Write a question answer" data-gramm="false"
                                        wt-ignore-input="true">Interactively procrastinate high-payoff content without backward-compatible data. Quickly to cultivate optimal processes and tactical architectures. For The Completely iterate covalent strategic.</textarea>
                                </div>
                            </div>

                            <div class="pt-4">
                                <button type="button" class="btn ol-btn-light ol-icon-btn mt-2" name="button"
                                    data-bs-toggle="tooltip" onclick="appendFaq()" aria-label="Add new"
                                    data-bs-original-title="Add new"> <i class="fi-rr-plus-small"></i>
                                </button>
                            </div>
                        </div>




                        <div id="blank_faq_field" style="display: none;">
                            <div class="d-flex pt-2 border-top">
                                <div class="flex-grow-1 px-3">
                                    <div class="fpb-7 mb-3">
                                        <label class="form-label ol-form-label">Question</label>
                                        <input type="text" class="form-control ol-form-control" name="questions[]"
                                            id="questions" placeholder="Write a question">
                                    </div>
                                    <div class="fpb-7 mb-3">
                                        <label class="form-label ol-form-label">Answer</label>
                                        <textarea name="answers[]" class="form-control ol-form-control" placeholder="Write a question answer" data-gramm="false"
                                            wt-ignore-input="true"></textarea>
                                    </div>

                                </div>
                                <div class="pt-4">
                                    <button type="button" class="btn ol-btn-light ol-icon-btn mt-2" name="button"
                                        data-bs-toggle="tooltip" onclick="removeFaq(this)" aria-label="Remove"
                                        data-bs-original-title="Remove"> <i class="fi-rr-minus-small"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fpb-7 mb-2 flex-grow-1 px-2">
                        <button type="submit" class="btn ol-btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
