<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPKS UKDW | Dashboard</title>
    <link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />

    <link rel="manifest" href="/manifest.json">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/926d10f56e.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    @yield('styles')

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('ppks.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>

    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')
            </main>
        </div>
    </div>

    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('/firebase-messaging-sw.js')
                .then((registration) => {
                    console.log("Service Worker terdaftar:", registration.scope);
                })
                .catch((error) => {
                    console.error("Service Worker gagal terdaftar:", error);
                });
        }
    </script>

    <script>
        Notification.requestPermission().then((permission) => {
            if (permission === "granted") {
                console.log("Izin notifikasi diberikan.");
            } else {
                console.warn("Izin notifikasi ditolak.");
            }
        });
    </script>

    <script>
        if (Notification.permission !== 'granted') {
            Notification.requestPermission().then((permission) => {
                console.log('Izin notifikasi:', permission);
            });
        }
    </script>

    <script>
        document.getElementById('request-notification').addEventListener('click', () => {
            if (Notification.permission !== 'granted') {
                Notification.requestPermission().then((permission) => {
                    console.log('Izin notifikasi:', permission);
                });
            }
        });
    </script>

    @vite(['resources/js/app.js'])

    @yield('scripts')

    <div>
        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if ("serviceWorker" in navigator) {
                // Register a service worker hosted at the root of the
                // site using the default scope.
                navigator.serviceWorker.register("/sw.js").then(
                    (registration) => {
                        console.log("Service worker registration succeeded:", registration);
                    },
                    (error) => {
                        console.error(`Service worker registration failed: ${error}`);
                    },
                );
            } else {
                console.error("Service workers are not supported.");
            }
        </script>
    </div>

</body>

</html>
