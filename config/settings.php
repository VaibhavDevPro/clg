<?php

return [
    'THEME_ASSETS' => [
        'global'  => [
            'css' => [
                'assets/plugins/global/plugins.bundle.css',
                'https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700',
                'assets/css/style.bundle.css',
                'assets/css/custom-style.css',
            ],

            'js' => [
                'assets/js/jquery-3.7.0.min.js',
                'assets/plugins/global/plugins.bundle.js',
                'assets/js/scripts.bundle.js',
                'assets/js/app.custom.js',
                // 'assets/js/form_submit.js',
            ],

            'frontcss' => [
                'frontend/css/bootstrap.min.css',
                'frontend/css/index.css',
                'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css',
                'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
                'frontend/css/custom.css',
                'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css',
                'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=meeting_room'

            ],
            'frontjs' => [
                'assets/js/jquery-3.7.0.min.js',
                'frontend/js/bootstrap.min.js',
                'https://cdn.jsdelivr.net/npm/sweetalert2@11',
                'frontend/js/index.js',
                'frontend/js/popper.min.js'
            ]
        ],
    ],

    # Theme Vendors
    'THEME_VENDORS' => [
        'datatable' => [
            'css' => [
                'assets/plugins/custom/datatables/datatables.bundle.css'
            ],

            'js' => [
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.js',
                'assets/js/widgets.bundle.js',
                'assets/js/custom/widgets.js',
                'assets/plugins/custom/datatables/datatables.bundle.js',
                'assets/js/custom/utilities/modals/create-campaign.js',
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.js',
                'assets/js/custom/utilities/modals/users-search.js',

            ]
        ],
        'sweetalert' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css'
            ],

            'js' => [
                'https://cdn.jsdelivr.net/npm/sweetalert2@11'
            ]
        ],
        'ck-editor' => [
            'js' => [
                // 'assets/plugins/ckeditor5-classic/ckeditor.js'
                'https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js'
            ]
        ],
        'front-select2' => [
            'css' => [
                'frontend/css/select2.min.css',
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ]
        ],
        'front-flatpicker' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/flatpickr'
            ]
        ],
        'jquery-validate' => [
            'js' => [
                // 'assets/js/jquery.validate.min.js',
                // 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js'
            ]
        ],
        'financial-info' => [
            'js' => [
                'assets/js/financial-info.js'
            ]
        ],



        'general-settings' => [
            'js' => [
                'assets/js/general_settings.js',
            ]
        ],
        'business-settings' => [
            'js' => [
                'assets/js/business_settings.js',
            ]
        ],
        'screener-nonbanking' => [
            'js' => [
                'assets/js/pages/screener-nonbanking.js'
            ]
        ],
        'screener-banking' => [
            'js' => [
                'assets/js/pages/screener-banking.js'
            ]
        ],
        'screener-insurence' => [
            'js' => [
                'assets/js/pages/screener-insurence.js'
            ]
        ],
        'invoice' => [
            'js' => [
                'assets/js/pages/invoice.js'
            ]
        ],
        'tinyMCE' => [
            'js' => [
                'assets/plugins/custom/tinymce/tinymce.bundle.js'
            ]
        ],
        'quill-editor' => [
            'css' => [
                '//cdn.quilljs.com/1.3.6/quill.snow.css'
            ],
            'js' => [
                '//cdn.quilljs.com/1.3.6/quill.min.js'
            ]
        ],
        'flatpickr-month-select' => [
            'css' => [
                'https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/style.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js'
            ]
            ],
        'dropify' => [
            'css' => [
                'https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css'
            ],
            'js' => [
                'https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js'
            ]
            ],
        'dropzone' => [
            'css' => [
                'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css'
            ],
            'js' => [
                'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js'
            ]
            ],
            'hotel_validate' => [

            'js' => [
                'assets/js/pages/hotel_validate.js'
            ]
            ],

            'room_validate'=> [
                'js' => [
                    'assets/js/pages/room_validate.js',
                ]
            ]
    ],

];
