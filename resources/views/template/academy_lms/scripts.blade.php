<script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/global/summernote/summernote-lite.min.js') }}"></script>
<script src="{{ asset('assets/global/icon-picker/fontawesome-iconpicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/jquery-form/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/global/tagify-master/dist/tagify.min.js') }}"></script>
<script src="{{ asset('assets/global/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendors/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/html2pdf.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<div class="toast-container position-fixed top-0 end-0 p-3"></div>

<script>
    "use strict";
    document.addEventListener("DOMContentLoaded", function() {
        // Restore scroll position if it exists in localStorage
        const scrollPos = localStorage.getItem('navScrollPos');
        const sidebarNavArea = document.querySelector('.sidebar-nav-area');
        if (scrollPos) {
            sidebarNavArea.scrollTop = scrollPos;
        }

        // Ensure the active element is visible
        const activeElement = document.querySelector('.sidebar-nav-area .active');
        if (activeElement) {
            const activeElementTop = activeElement.getBoundingClientRect().top;
            const navAreaTop = sidebarNavArea.getBoundingClientRect().top;
            const navAreaBottom = navAreaTop + sidebarNavArea.clientHeight;

            if (activeElementTop < navAreaTop || activeElementTop > navAreaBottom) {
                sidebarNavArea.scrollTop = activeElement.offsetTop - sidebarNavArea.offsetTop;
            }
        }

        // Save scroll position before page unload
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('navScrollPos', sidebarNavArea.scrollTop);
        });
    });
</script>

<script>
    "use strict";

    function showRightModal(url, header) {
        // SHOWING AJAX PRELOADER IMAGE
        jQuery('#right-modal .offcanvas-body').html(
            '<div class="modal-spinner-border"><div class="spinner-border text-secondary" role="status"></div></div>'
        );
        jQuery('#right-modal .offcanvas-title').html("Loading...");
        // LOADING THE AJAX MODAL


        const bsOffcanvas = new bootstrap.Offcanvas('#right-modal');
        bsOffcanvas.show();

        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response) {
                jQuery('#right-modal .offcanvas-title').html(header);
                jQuery('#right-modal .offcanvas-body').html(response);

            }
        });
    }
</script>

<script type="text/javascript">
    "use strict";

    function ajaxModal(url, title, modalClasses = 'modal-md', animation = 'fade') {
        $('#ajaxModal .modal-dialog').removeClass('modal-sm');
        $('#ajaxModal .modal-dialog').removeClass('modal-md');
        $('#ajaxModal .modal-dialog').removeClass('modal-lg');
        $('#ajaxModal .modal-dialog').removeClass('modal-xl');
        $('#ajaxModal .modal-dialog').removeClass('modal-xxl');
        $('#ajaxModal .modal-dialog').removeClass('modal-fullscreen');
        $('#ajaxModal .modal-dialog').addClass(modalClasses);

        $('#ajaxModal').removeClass('fade');
        $('#ajaxModal').addClass(animation);

        $('#ajaxModal .modal-title').html(title);
        $("#ajaxModal").modal('show');
        $.ajax({
            type: 'get',
            url: url,
            success: function(response) {
                $('#ajaxModal .modal-body').html(response);
            }
        });
    }

    const myModalEl = document.getElementById('ajaxModal')
    myModalEl.addEventListener('hidden.bs.modal', event => {
        $('#ajaxModal .modal-body').html(
            '<div class="w-100 text-center py-5"><div class="spinner-border my-5" role="status"><span class="visually-hidden"></span></div></div>'
        );
    })



    function confirmModal(url, elem = false, actionType = null, content = null) {
        $("#confirmModal").modal('show');

        if (elem != false) {
            $.ajax({
                url: url,
                success: function(response) {
                    response = JSON.parse(response);
                    //For redirect to another url
                    if (typeof response.success != "undefined") {
                        window.location.href = response.success;
                    }
                    distributeServerResponse(response);
                }
            });
        } else {
            $('#confirmModal .confirm-btn').attr('href', url);
            $('#confirmModal .confirm-btn').removeAttr('onclick');
        }
    }
</script>

<script type="text/javascript">
    "use strict";

    $(function() {
        //The form of submission to RailTeam js is defined here.(Form class or ID)
        $('.aiAjaxFormSubmission').ajaxForm({
            beforeSend: function() {
                $('#aiSubmissionBtn').html("Generating");
                $('#aiSubmissionBtn').attr('disabled', true);
            },
            uploadProgress: function(event, position, total, percentComplete) {

            },
            complete: function(xhr) {
                var response = xhr.responseText;

                if (/^[\],:{}\s]*$/.test(response.replace(/\\["\\\/bfnrtu]/g, '@').replace(
                        /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                        ']').replace(/(?:^|:|,)(?:\s*\[)+/g, '')) && $('#ai_service_selector')
                    .val() == 'Course thumbnail') {
                    var parsedJson = JSON.parse(response);
                    $('#aiGeneratedText').html('<div class="row"></div>');
                    console.log(parsedJson.length);
                    for (let i = 0; i < parsedJson.length; i++) {
                        var exi = i + 1;
                        var img =
                            '<div class="w-50 p-2 position-relative"><a class="position-absolute btn btn-success px-1 py-0 m-1" href="admin/ai_img_download?index=' +
                            exi +
                            '" target="_blank"><i class="fas fa-download"></i></a><img class="radius-5px" width="100%" src="' +
                            parsedJson[i].url +
                            '"></div>';
                        $('#aiGeneratedText .row').append(img);
                    }
                    $('#aiResultHeader').html('Your images:');
                    $('#aiGeneratedText').attr('contenteditable', 'false');
                } else {
                    $('#aiGeneratedText').html(response);
                    $('#aiGeneratedText').append('<input type="text" value="' + response +
                        '" id="generatedAiText" class="visibility-hidden">');
                    $('#aiResultHeader').html(
                        '<span class="text-14px">Generated text:</span> <a href="javascript:;" onclick="copy_text(this)" data-toggle="tooltip" data-placement="top" title="Copy" class="float-right btn p-0"><i class="far fa-copy"></i> Copy</a>'
                    );
                }


                $('#aiSubmissionBtn').html("Generate");
                $('#aiSubmissionBtn').attr('disabled', false);
            },
            error: function() {
                //You can write here your js error message
            }
        });
    });

    function copy_text(e) {
        // Get the text field
        var copyText = document.getElementById("generatedAiText");
        console.log(copyText);

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        $(e).html('<i class="far fa-copy"></i> Copied!')
    }
</script>

<script>
    "use strict";

    function toaster_message(type, icon, header, message) {
        var toasterMessage = '<div class="toast ' + type +
            ' fade" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"> <i class="' +
            icon + ' me-2 mt-2px text-20px"></i> <strong class="me-auto"> ' + header +
            ' </strong><small>Just Now</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">' +
            message + '</div></div>';
        $('.toast-container').prepend(toasterMessage);
        const toast = new bootstrap.Toast('.toast')
        toast.show()
    }

    function success(message) {
        toaster_message('success', 'fi-sr-badge-check', 'Success !', message);
    }

    function warning(message) {
        toaster_message('warning', 'fi-sr-exclamation', 'Attention !', message);
    }

    function error(message) {
        toaster_message('error', 'fi-sr-triangle-warning', 'An Error Occurred !', message);
    }
</script>


@include('template.academy_lms.common_scripts')
@include('template.academy_lms.init')


<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendors/chart-js/chart.js"></script>



<script>
    "use strict";

    const xValues = [0, "January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];
    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "Admin Revenue",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: [0, 0, 0, 0, 0, 1302.912, 0, 0, 0, 0, 0, 0, 0]
            }]
        },
        options: {
            legend: {
                display: true
            },
        }
    });


    // Pie Chart 2
    const project_progress2 = document.getElementById('pie2');
    const progressData2 = {
        labels: ['Active', 'Upcoming', 'Pending', 'Private', 'Draft', 'Inactive'],
        data: [8, 1, 0, 0, 0, 0],
    };
    var barColors = [
        "#12c093",
        "#1b84ff",
        "#ff2583",
        "#000",
        "#878d97",
        "#dadada",
    ];
    new Chart(project_progress2, {
        type: 'doughnut',
        data: {
            labels: progressData2.labels,
            datasets: [{
                backgroundColor: barColors,
                label: ' Courses',
                data: progressData2.data,
            }, ],
        },
        options: {
            responsive: true,
            borderWidth: 5,
            hoverBorderColor: '#fff',
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });
</script>

<script type="text/javascript">
    "use strict";

    let blank_faq = jQuery('#blank_faq_field').html();
    let blank_motivational_speech = jQuery('#blank_motivational_speech_field').html();
    $(document).ready(function() {

        jQuery('#blank_faq_field').hide();
        jQuery('#blank_motivational_speech_field').hide();

    });

    function appendFaq() {
        jQuery('#faq_area').append(blank_faq);
    }

    function removeFaq(faqElem) {
        jQuery(faqElem).parent().parent().remove();
    }

    function appendMotivational_speech() {
        jQuery('#motivational_speech_area').append(blank_motivational_speech);
    }

    function removeMotivational_speech(faqElem) {
        jQuery(faqElem).parent().parent().remove();
    }
</script>
