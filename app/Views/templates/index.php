<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title><?= $judul; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

    <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/fontawesome/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/b-2.3.4/b-colvis-2.3.4/b-html5-2.3.4/b-print-2.3.4/fc-4.2.1/r-2.4.0/datatables.min.css" />


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

    <?= $this->include('templates/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.2/b-2.3.4/b-html5-2.3.4/b-print-2.3.4/fc-4.2.1/r-2.4.0/datatables.min.js"></script>


    <script>
        $("#kriteria").DataTable({
            "pageLength": 5,
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
            "ordering": true,
            "info": true,
            "buttons": ["excel", "pdf", "print"],
        }).buttons().container().appendTo('#kriteria_wrapper .col-md-6:eq(0)');

        $("#alternatif").DataTable({
            "pageLength": 5,
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
            "ordering": true,
            "info": true,
            "buttons": ["excel", "pdf", "print"],
        }).buttons().container().appendTo('#alternatif_wrapper .col-md-6:eq(0)');

        $("#subkriteria").DataTable({
            "pageLength": 5,
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
            "ordering": true,
            "info": true,
            "buttons": ["excel", "pdf", "print"],
        }).buttons().container().appendTo('#subkriteria_wrapper .col-md-6:eq(0)');

        $("#hasil").DataTable({
            "pageLength": 5,
            "paging": true,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
            "ordering": true,
            "info": true,
            "buttons": ["excel", "pdf", "print"],
        }).buttons().container().appendTo('#hasil_wrapper .col-md-6:eq(0)');
    </script>

</body>

</html>