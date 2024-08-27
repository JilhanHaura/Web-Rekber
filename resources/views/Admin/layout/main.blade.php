<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .data-field {
            display: flex;
            width: 100%;
            justify-content: space-between;
            font-size: 14px;
        }

        .data-field:not(:last-child) {
            margin-bottom: 15px;
        }

        .data-field span {
            text-align: end;
        }

        .card-title span a {
            color: #899bbd;
            text-decoration: underline;
        }

        .justified-text {
            text-align: justify;
        }

        .font-weight-italic {
            font-style: italic;
        }
    </style>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>REKBER</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        $(document).ready(function() {
            let searchParams = new URLSearchParams(window.location.search);
            let dateInterval = searchParams.get('from-to');
            let start = moment().subtract(29, 'days');
            let end = moment();

            if (dateInterval) {
                dateInterval = dateInterval.split(' - ');
                start = moment(dateInterval[0]);
                end = moment(dateInterval[1]);
            }

            $('#date-range').daterangepicker({
                "showDropdowns": true,
                "showWeekNumbers": true,
                "alwaysShowCalendars": true,
                startDate: start,
                endDate: end,
                locale: {
                    format: 'YYYY-MM-DD',
                    firstDay: 1,
                },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf(
                        'month')],
                    'This Year': [moment().startOf('year'), moment().endOf('year')],
                    'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year')
                        .endOf(
                            'year')
                    ],
                    'All time': [moment().subtract(30, 'year').startOf('month'), moment().endOf('month')],
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- /END GA -->
</head>

<body>

    <header class="header-area header-sticky">
        @include('Admin.layout.header')
    </header>

    <main id="main" style="min-height: 100vh;">
        @include('Admin.layout.sidebar')
        @yield('content')
    </main>

    <footer id="footer">
        @include('Admin.layout.footer')
    </footer>

    <!-- General JS Scripts -->
    <script src="/assets/modules/jquery.min.js"></script>
    <script src="/assets/modules/popper.js"></script>
    <script src="/assets/modules/tooltip.js"></script>
    <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/assets/modules/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/assets/modules/jquery.sparkline.min.js"></script>
    <script src="/assets/modules/chart.min.js"></script>
    <script src="/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/assets/js/page/index.js"></script>
    <script src="/assets/js/page/index-0.js"></script>
    <!-- JS Libraies -->
    <script src="/assets/modules/datatables/datatables.min.js"></script>
    <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/assets/js/page/modules-datatables.js"></script>

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>
    <script src="/assets/js/tablesort.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertCloseButtons = document.querySelectorAll('.alert .btn-close');

            alertCloseButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const alert = this.closest('.alert');
                    if (alert) {
                        alert.remove();
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitches = document.querySelectorAll('.switch input[type="checkbox"]');
            toggleSwitches.forEach(toggleSwitch => {
                toggleSwitch.addEventListener('change', function() {
                    const parentRow = toggleSwitch.closest('tr');
                    const statusBadge = parentRow.querySelector('.badge');
                    const onText = toggleSwitch.nextElementSibling.getAttribute('data-on-text');
                    const offText = toggleSwitch.nextElementSibling.getAttribute('data-off-text');
                    if (toggleSwitch.checked) {
                        statusBadge.textContent = onText === 'Yes' ? 'Active' : 'Non Active';
                        statusBadge.classList.remove('badge-danger');
                        statusBadge.classList.add('badge-success');
                    } else {
                        statusBadge.textContent = offText === 'No' ? 'Non Active' : 'Active';
                        statusBadge.classList.remove('badge-success');
                        statusBadge.classList.add('badge-danger');
                    }
                });
            });
        });
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swalButton = document.getElementById('SweetAlert');

            swalButton.addEventListener('click', function() {
                const month = document.querySelector('input[name="month"]').value;
                const year = document.querySelector('input[name="year"]').value;
                const percentage = document.querySelector('input[name="percentage"]').value;
                const status = document.querySelector('input[name="status"]').value;

                // Buat objek data yang akan dikirimkan ke server
                const data = {
                    month: month,
                    year: year,
                    percentage: percentage,
                    status: status
                };

                // Kirim permintaan POST ke server
                fetch('{{ route('setting.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire('Saved!', '', 'success');
                        } else {
                            Swal.fire('Error saving data', '', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire('An error occurred', '', 'error');
                    });
            });
        });
    </script> --}}

</body>

</html>
