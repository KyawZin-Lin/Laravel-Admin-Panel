<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Su Luck Dashboard | DMS - Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Su Luck DMS System Admin Dashboard " name="description" />
    <meta content="Su Luck" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @yield('pages-css')

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Select2 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- fullcalendar css -->
    <link href="{{ asset('assets/libs/fullcalendar/main.min.css') }}"" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="layout-wrapper">
        @include('layouts.header')
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')
        {{-- @include('sweetalert::alert') --}}
    </div>

    {{-- @include('partials.alerts.sweet-alert') --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>

    <!-- JAVASCRIPT PLUGINS -->
    <script src='https://cdn.jsdelivr.net/npm/toastify-js'></script>
    <script src='{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}'></script>
    <script src='{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}'></script>

    @yield('pages-js')
    <!-- calendar min js -->
    <script src="{{ asset('assets/libs/fullcalendar/main.min.js') }}"></script>

    <!-- Calendar init -->
    <script src="{{ asset('assets/js/pages/calendar.init.js') }}"></script>
    <!-- App js -->
    {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}


    <script type="module">
        // console.log(window);
        // console.log(window.Echo);



        const notificationSound= new Audio('/sounds/2ndNotification.mp3')

        window.Echo.channel('pickups')
            .listen('NewPickupEvent', (e) => {
                // console.log(e);

                notificationSound.play();
            })
        //  window.Echo.channel('pickups')
        // .listen('NewPickupEvent', (data) => {
        //     // Handle the real-time notification
        //     console.log('New data record added:', data);

        //     notificationSound.play();
        // });




    </script>
    <script type="module">
        (function() {
            requestNotificationPermission();
        })()

        async function requestNotificationPermission() {
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            } else if (Notification.permission === "granted") {
                return Notification.permission;
            } else if (Notification.permission !== "denied") {
                const permission = await Notification.requestPermission();
                return permission;
            }
        }

        function alertSound() {
            try {
                let audio = new Audio("{{ asset('/assets/audios/test-order-alert-sound.wav') }}");
                audio.play();
            } catch (e) {
                console.error(e)
            }
        }

        function notifyNewOrder() {
            new Notification('New order received');
        }

        // window.Echo.channel('order-channel')
        //     .listen('OrderReceived', (e) => {
        //         console.log(e);
        //         alertSound();
        //         notifyNewOrder();
        //     })
    </script>

    <script type="module">
        $('.show_confirm').click(function(event) {
            event.preventDefault();
            Swal.fire({
                    title: ``,
                    text: "Are you sure you want to delete this record?",
                    icon: "warning",
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Confirm',
                    confirmButtonAriaLabel: 'Confirm!',
                    cancelButtonText: 'Cancel',
                    cancelButtonAriaLabel: 'Cancel'
                })
                .then((result) => {
                    if (result?.isConfirmed) {
                        window.location.href = $(this).data('href')
                    }
                });
        });
    </script>

    <script type="module">
        $('.force_delete_show_confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                    title: ``,
                    text: "Are you sure you want to delete this record?",
                    icon: "warning",
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Confirm',
                    confirmButtonAriaLabel: 'Confirm!',
                    cancelButtonText: 'Cancel',
                    cancelButtonAriaLabel: 'Cancel'
                })
                .then((result) => {
                    if (result?.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>

    <script type="module">
        $('.restore_show_confirm').click(function(event) {
            event.preventDefault();
            Swal.fire({
                    title: ``,
                    text: "Are you sure you want to restore this record?",
                    icon: "warning",
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Confirm',
                    confirmButtonAriaLabel: 'Confirm!',
                    cancelButtonText: 'Cancel',
                    cancelButtonAriaLabel: 'Cancel'
                })
                .then((result) => {
                    if (result?.isConfirmed) {
                        window.location.href = $(this).data('href')
                    }
                });
        });


    </script>

    @yield('js')

</body>

</html>
