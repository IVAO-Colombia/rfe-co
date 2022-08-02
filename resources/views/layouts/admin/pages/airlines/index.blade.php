<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts/admin/head')
    </head>
    <body>
        @include('layouts/admin/nav')
        <div class="clearfix" style="height: 2rem"></div>

        <div class="container" style="text-align: center">
            @include('layouts/admin/widgets/airlines/index')
        </div>


        <!-- Optional JavaScript -->

        <!-- Bootstrap Bundle with Popper.js -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
