<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.members.head')
</head>

<body>
    @include('layouts.members.nav')
    <div class="clearfix" style="height: 2rem"></div>
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">
    </script>


    {{ $slot }}

    @livewireStyles()

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('OpenSweetalert', message => {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        })
    </script>
</body>

</html>
