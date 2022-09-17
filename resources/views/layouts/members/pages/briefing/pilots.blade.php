<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts/members/head')
</head>

<body class="briefing__body">

    @include('layouts.members.nav')
    <div class="clearfix" style="height: 2rem"></div>
    <div class="container">
        <div class="col-md-12" style="text-align: center">
            <iframe src="{{ __('custom.PilotsBriefingPdf') }}" width="60%" height="650px"> </iframe>
        </div>
    </div>

    <div class="clearfix" style="height: 3rem"></div>


    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">
    </script>
</body>

</html>
