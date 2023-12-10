<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>Dashboard | Global Controller</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/icons.min.css'?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/main.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/toastr.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/dropify.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/select2.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/date.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <style>
        #settings-trigger { 
            background: #E01C1B;
        }

        .daterangepicker td.active, .daterangepicker td.active:hover {
            background-color: #E01C1B;
        }
        
        .btn-tech {
            background: inherit;
            color:inherit;
            padding: .75em .1.55em;
        }

        .btn-custom {
            color:#58d8a3;
            font-weight: bold;;
            background-color: #fff;
            outline: 2px solid #E01C1B;
            border:2px solid #E01C1B;
            transition: outline-offset 500ms;
        }

        .text-custom {
            color: #E01C1B;
        }

        .text-custom:hover, .text-custom:focus {
            color: #E01C1B;
        }

        .btn-custom {
            background-color: #E01C1B;
            border:#E01C1B;
        }

        .btn-custom:hover, .btn-custom:focus {
            background-color: #E01C1B;
        }

        .sidebar .nav .nav-item.active > .nav-link i,
        .sidebar .nav .nav-item.active > .nav-link .menu-title,
        .sidebar .nav .nav-item.active > .nav-link .menu-arrow {
            color: #E01C1B;
        }

        .navbar-light .navbar-nav .show > .nav-link,
        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #E01C1B;
        }

        .badge-outline-custom {
            color: #E01C1B;
            border: 1px solid #E01C1B;
        }

        .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
            background: transparent;
            color: #E01C1B;
        }
        .sidebar .nav.sub-menu .nav-item .nav-link.active {
            color: #E01C1B;
            background: transparent;
        }

        .sidebar .nav.sub-menu .nav-item .nav-link:hover {
            color: #E01C1B;
        }

        .table-hover tbody tr:hover {
            color: #E01C1B;
            background-color: #F6BAB2;
        }

        th { 
            color: #ffffff !important;
            padding: 10px 15px !important;
            background:#E01C1B; 
        }

        .settings-panel .nav-tabs .nav-item .nav-link.active {
            color: #E01C1B;
        }

        .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
            border: solid #E01C1B;
        }

        .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
            background: #E01C1B;
            border-width: 0;
        }

        .list-wrapper .completed .remove {
            color: #E01C1B !important;
        }

        .btn-tech {
            background: inherit;
            color:inherit;
            padding: .75em .1.55em;
        }

        .btn-custom {
            color:#58d8a3;
            font-weight: bold;;
            background-color: #fff;
            outline: 2px solid #E01C1B;
            border:2px solid #E01C1B;
            transition: outline-offset 500ms;
        }

        .text-custom {
            color: #E01C1B;
        }

        .text-custom:hover, .text-custom:focus {
            color: #E01C1B;
        }

        .btn-custom {
            background-color: #E01C1B;
            border:#E01C1B;
        }

        .btn-custom:hover, .btn-custom:focus {
            background-color: #E01C1B;
        }

        .sidebar .nav .nav-item.active > .nav-link i,
        .sidebar .nav .nav-item.active > .nav-link .menu-title,
        .sidebar .nav .nav-item.active > .nav-link .menu-arrow {
            color: #E01C1B;
        }

        .navbar-light .navbar-nav .show > .nav-link,
        .navbar-light .navbar-nav .active > .nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #E01C1B;
        }

        .badge-outline-custom {
            color: #E01C1B;
            border: 1px solid #E01C1B;
        }

        .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
            background: transparent;
            color: #E01C1B;
        }
        .sidebar .nav.sub-menu .nav-item .nav-link.active {
            color: #E01C1B;
            background: transparent;
        }

        .sidebar .nav.sub-menu .nav-item .nav-link:hover {
            color: #E01C1B;
        } 

        .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
            background: #E01C1B;
            border-width: 0;
        }

        #settings-trigger { 
            background: #E01C1B;
        }

        .table-condensed tbody tr th td {
            padding: 0px;
        }

        .daterangepicker td.active, .daterangepicker td.active:hover {
            background-color: #E01C1B;
        }

        .btn-primary, .wizard > .actions a {
            background-color: #E01C1B;
            border-color: #E01C1B;
        }

        .btn-primary:hover, .wizard > .actions a:hover {
            color: #fff;
            background-color: #E01C1B;
            border-color: #E01C1B;
        }

        .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus, .tt-query:focus, .tt-hint:focus {
            color: #495057;
            background-color: #fff;
            border-color: #E01C1B;
            box-shadow: 0 0 0 0.1rem #EE7565;
        }

        div.tagsinput span.tag {
            background: #E01C1B;
        }

        .select2-container--default .select2-selection--single {
            height: 40px;
        }

        .select2-container--default .select2-selection--single, .select2-container--default .select2-dropdown, .select2-container--default .select2-selection--multiple {
            border-color: #cdd4e0;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 25px;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background: #E01C1B;
        }

        .nav-pills-tech .nav-link.active {
            background: #E01C1B;
        }

        .nav-pills-info .nav-link {
            color: #E01C1B;
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #ffffff;
            background-color: #E01C1B;
        }
    </style>
</head>