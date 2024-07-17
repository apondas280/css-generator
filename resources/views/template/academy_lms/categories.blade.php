<!-- Category Start -->
<hr>
<h1 class="my-5"><i class="fi-rr-sun"></i> Category Card</h1>

<div class="row g-4 all-category-list">
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="ol-card category-card radious-10px h-100">
            <img src="{{ asset('assets/images/products/product-1.svg') }}" class="card-img-top" alt="...">
            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                <i class="me-1 far fa-object-ungroup"></i>
                Web Development <span class="d-inline-block ms-auto">(4)</span>
            </h6>
            <div class="ol-card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fab fa-wordpress"></i> <span class="text-12px">Wordpress</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=2', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/2')" class="mx-1" data-bs-toggle="tooltip"
                                    href="#" aria-label="Delete" data-bs-original-title="Delete"><i
                                        class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-expand"></i> <span class="text-12px">Responsive
                                    Design</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=3', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/3')" class="mx-1" data-bs-toggle="tooltip"
                                    href="#" aria-label="Delete" data-bs-original-title="Delete"><i
                                        class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-code"></i> <span class="text-12px">Bootstrap</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=4', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/4')" class="mx-1" data-bs-toggle="tooltip"
                                    href="#" aria-label="Delete" data-bs-original-title="Delete"><i
                                        class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="category-footer ol-card-body text-center py-1">
                <a onclick="ajaxModal('#admin.category.create?parent_id=1', 'Add new category')" href="#"
                    class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                <a href="#" onclick="ajaxModal('#admin.category.edit?id=1', 'Edit category')"
                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                <a href="#" onclick="confirmModal('#category/delete/1')" class="btn text-12px fw-600"><i
                        class="fi-rr-trash"></i>
                    Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="ol-card category-card radious-10px h-100">
            <img src="{{ asset('assets/images/products/product-2.svg') }}" class="card-img-top" alt="...">
            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                <i class="me-1 fas fa-pencil-alt"></i>
                Graphic Design <span class="d-inline-block ms-auto">(5)</span>
            </h6>
            <div class="ol-card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-camera"></i> <span class="text-12px">Photoshop</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=7', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/7')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fab fa-digital-ocean"></i> <span class="text-12px">Digital
                                    Art</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=11', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/11')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="category-footer ol-card-body text-center py-1">
                <a onclick="ajaxModal('#admin.category.create?parent_id=6', 'Add new category')" href="#"
                    class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                <a href="#" onclick="ajaxModal('#admin.category.edit?id=6', 'Edit category')"
                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                <a href="#" onclick="confirmModal('#category/delete/6')" class="btn text-12px fw-600"><i
                        class="fi-rr-trash"></i>
                    Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="ol-card category-card radious-10px h-100">
            <img src="{{ asset('assets/images/products/product-3.svg') }}" class="card-img-top" alt="...">
            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                <i class="me-1 fas fa-male"></i>
                User Experience <span class="d-inline-block ms-auto">(6)</span>
            </h6>
            <div class="ol-card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-basketball-ball"></i> <span class="text-12px">User
                                    Experience
                                    Design</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=13', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/13')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="category-footer ol-card-body text-center py-1">
                <a onclick="ajaxModal('#admin.category.create?parent_id=12', 'Add new category')" href="#"
                    class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                <a href="#" onclick="ajaxModal('#admin.category.edit?id=12', 'Edit category')"
                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                <a href="#" onclick="confirmModal('#category/delete/12')" class="btn text-12px fw-600"><i
                        class="fi-rr-trash"></i>
                    Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="ol-card category-card radious-10px h-100">
            <img src="{{ asset('assets/images/products/product-1.svg') }}" class="card-img-top" alt="...">
            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                <i class="me-1 fab fa-yandex-international"></i>
                Interior Design <span class="d-inline-block ms-auto">(5)</span>
            </h6>
            <div class="ol-card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-tint"></i> <span class="text-12px">Color
                                    Theory</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=20', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/20')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-lightbulb"></i> <span class="text-12px">3D
                                    Lighting</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=24', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/24')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="category-footer ol-card-body text-center py-1">
                <a onclick="ajaxModal('#admin.category.create?parent_id=19', 'Add new category')" href="#"
                    class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                <a href="#" onclick="ajaxModal('#admin.category.edit?id=19', 'Edit category')"
                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                <a href="#" onclick="confirmModal('#category/delete/19')" class="btn text-12px fw-600"><i
                        class="fi-rr-trash"></i>
                    Delete</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3">
        <div class="ol-card category-card radious-10px h-100">
            <img src="{{ asset('assets/images/products/product-1.svg') }}" class="card-img-top" alt="...">
            <h6 class="title fs-14px mb-12px px-3 pt-3 d-flex align-baseline">
                <i class="me-1 fas fa-cube"></i>
                3D and Animation <span class="d-inline-block ms-auto">(6)</span>
            </h6>
            <div class="ol-card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-file-image"></i> <span class="text-12px">Blender</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=26', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/26')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fas fa-images"></i> <span class="text-12px">Motion
                                    Graphics</span>
                            </div>
                            <div class="col-auto ms-auto d-flex subcategory-actions">
                                <a onclick="ajaxModal('#admin.category.edit?id=27', 'Edit category')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Edit"
                                    data-bs-original-title="Edit"><i class="fi fi-rr-pen-clip"></i></a>
                                <a onclick="confirmModal('#category/delete/27')" class="mx-1"
                                    data-bs-toggle="tooltip" href="#" aria-label="Delete"
                                    data-bs-original-title="Delete"><i class="fi fi-rr-trash"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="category-footer ol-card-body text-center py-1">
                <a onclick="ajaxModal('#admin.category.create?parent_id=25', 'Add new category')" href="#"
                    class="btn text-12px fw-600"><i class="fi fi-rr-plus"></i> Add</a>
                <a href="#" onclick="ajaxModal('#admin.category.edit?id=25', 'Edit category')"
                    class="btn text-12px fw-600"><i class="fi fi-rr-pen-clip"></i> Edit</a>
                <a href="#" onclick="confirmModal('#category/delete/25')" class="btn text-12px fw-600"><i
                        class="fi-rr-trash"></i>
                    Delete</a>
            </div>
        </div>
    </div>
</div>
