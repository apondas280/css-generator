<!-- Start table -->
<hr>
<h1 class="my-5"><i class="fi-rr-sun"></i> Buttons & Badges </h1>

<div class="ol-card">
    <div class="ol-card-body p-20px mb-3">
        <div class="row">
            <div class="col-md-12 pb-3 d-flex flex-wrap gap-2">
                <button type="button" class="btn ol-btn-light ol-icon-btn">
                    <i class="fi-rr-trash"></i>
                </button>

                <button type="button" class="btn ol-btn-primary"> Filter</button>

                <a href="#" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
                    <span class="fi-rr-plus"></span>
                    <span>Add new enrollment</span>
                </a>

                <div class="custom-dropdown ">
                    <button class="dropdown-header btn ol-btn-light">
                        Custom Dropdown
                        <i class="fi-rr-file-export ms-2"></i>
                    </button>
                    <ul class="dropdown-list" style="display: none; left: 0px; right: auto;">
                        <li>
                            <a class="dropdown-item" href="#"
                                onclick="downloadPDF('.print-table', 'enroll-history')"><i class="fi-rr-file-pdf"></i>
                                PDF</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="window.print();"><i
                                    class="fi-rr-print"></i> Print</a>
                        </li>
                    </ul>
                </div>

                <button type="button" class="btn ol-btn-secondary fw-500" data-bs-dismiss="modal">Cancel</button>
                <a href="#" class="confirm-btn btn ol-btn-success fw-500">Confirm</a>
            </div>

            <div class="col-md-12 pb-3 d-flex flex-wrap gap-2">
                <span class="badge bg-success">Success</span>
                <span class="badge bg-info">Info</span>
                <span class="badge bg-warning">Warnning</span>
                <span class="badge bg-danger">Danger</span>
                <span class="badge bg-secondary">Secondary</span>
                <span class="badge bg-dark">Dark</span>
            </div>
        </div>
    </div>
</div>
