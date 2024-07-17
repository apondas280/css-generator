<hr>
<div class="ol-card p-3">
    <div class="ol-card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-primary ol-alert-primary ol-alert-sm mb-3" role="alert">
                    <p class="title2 fs-14px">Course:
                        <span class="title">WordPress Theme Development with Bootstrap</span>
                    </p>
                </div>

                <form action="">
                    <input id="course_id_for_lesson" type="hidden" value="" name="course_id_for_lesson">
                    <div class="ol-modal-form">
                        <h6 class="title fs-16px mb-3">Select lesson type</h6>
                        <div class="row row-12px row-cols-1 row-cols-sm-2 mb-20px">
                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-youtube">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/video-square-black-18.svg" alt="">
                                        <p class="title">YouTube Video</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-youtube" value="youtube" checked="">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-vimeo">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/video-circle-black-18.svg" alt="">
                                        <p class="title">Vimeo Video</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-vimeo" value="vimeo">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-videofile">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/video-black-18.svg" alt="">
                                        <p class="title">Video file</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-videofile" value="video">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-url">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/link-black-18.svg" alt="">
                                        <p class="title">Video url [ .mp4 ]</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-url">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-drive">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/document-black-18.svg" alt="">
                                        <p class="title">Google drive video</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-drive" value="google_drive_video">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-document">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/document-black-18.svg" alt="">
                                        <p class="title">Document file</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-document" value="document">
                                </label>
                            </div>


                            <div class="col">
                                <label class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-text">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/text-block-black-18.svg" alt="">
                                        <p class="title">Text</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-text" value="text">
                                </label>
                            </div>


                            <div class="col">
                                <label
                                    class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-image">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/volume-black-18.svg" alt="">
                                        <p class="title">Image</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-image" value="image">
                                </label>
                            </div>


                            <div class="col">
                                <label
                                    class="ol-radiobox-1 d-flex align-items-center justify-content-between flex-wrap"
                                    for="radio-iframe">
                                    <div class="title-icon d-flex align-items-center">
                                        <img src="assets/images/icons/volume-black-18.svg" alt="">
                                        <p class="title">Iframe embed</p>
                                    </div>
                                    <input class="form-check-input form-check-input-radio" type="radio"
                                        name="lesson_type" id="radio-iframe" value="iframe">
                                </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="javascript:void(0)" type="button" class="btn ol-btn-primary"
                                data-toggle="modal" data-dismiss="modal" id="lesson-add-modal"
                                onclick="showLessonAddModal()">Next
                                <i class="fi-rr-angle-small-right"></i> </a>
                        </div>
                    </div>
                </form>

                <script type="text/javascript">
                    "use strict";

                    function showLessonAddModal() {
                        var url = $("input[name=lesson_type]:checked").val();
                        ajaxModal('http://localhost/academy-laravel/demo/modal/admin.course.lesson_add?id=1&lesson_type=' + url,
                            'Add new lesson')
                    }
                </script>
            </div>
        </div>
    </div>
</div>
