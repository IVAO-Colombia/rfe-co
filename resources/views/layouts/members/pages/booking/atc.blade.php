@php
use App\Models\BookingAtc;
function getPositionBooking($dependence)
{
    return BookingAtc::where('dependence', $dependence)
        ->orderBy('order')
        ->get();
}
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts/members/head')
</head>

<body>
    @include('layouts/members/nav')
    <div class="clearfix" style="height: 2rem"></div>
    <!-- Optional JavaScript -->

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">
    </script>

    <div class="container">
        <div>
            @php
                
                $skbodel = getPositionBooking('SKBO_DEL');
                $skbodel = getPositionBooking('SKBO_DEL');
                $skbodel = getPositionBooking('SKBO_DEL');
                
            @endphp
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td width="25%"><strong>RFE</strong></td>
                        <td style="text-align: center">13:00 - 14:00 UTC</td>
                        <td style="text-align: center">14:00 - 15:00 UTC</td>
                        <td style="text-align: center">15:00 - 16:00 UTC</td>
                        <td style="text-align: center">17:00 - 18:00 UTC</td>
                        <td style="text-align: center">18:00 - 19:00 UTC</td>
                        <td style="text-align: center">19:00 - 20:00 UTC</td>
                        <td style="text-align: center">21:00 - 22:00 UTC</td>
                        <td style="text-align: center">22:00 - 23:00 UTC</td>
                        <td style="text-align: center">23:00 - 00:00 UTC</td>
                        <td style="text-align: center">23:00 - 00:00 UTC</td>
                        <td style="text-align: center">00:00 - 01:00 UTC</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>SKBO_DEL</td>
                        @foreach ($skbodel as $item)
                            <td>{{ $item->vid }}</td>
                        @endforeach
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
