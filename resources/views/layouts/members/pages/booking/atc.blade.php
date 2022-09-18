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
    <style>
        h1 {
            font-family: 'Nunito Sans', sans-serif;
            font-weight: 800;
            color: var(--principal-color);
            font-size: 3.5rem;
        }

        .bg-success {
            background-color: #2EC662 !important;
            color: #fff;
        }

        .bg-danger {
            background-color: #E93434 !important;
            color: #fff;
        }
    </style>

    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center my-3">
                <h1>ATC Booking</h1>
            </div>
        </div>

        <div class="table-responsive">
            @php
                
                $skbodel = getPositionBooking('SKBO_DEL');
                
                $skbo_n_gnd = getPositionBooking('SKBO_N_GND');
                $skbo_s_gnd = getPositionBooking('SKBO_S_GND');
                
                $skbo_n_twr = getPositionBooking('SKBO_N_TWR');
                $skbo_s_twr = getPositionBooking('SKBO_S_TWR');
                
                $skbo_n_app = getPositionBooking('SKBO_N_APP');
                $skbo_s_app = getPositionBooking('SKBO_S_APP');
                $skbo_w_app = getPositionBooking('SKBO_W_APP');
                $skboapp = getPositionBooking('SKBO_APP');
                
                $skedctr = getPositionBooking('SKED_CTR');
                
            @endphp
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td width="15%"><strong>FACILITY</strong></td>
                        <td style="text-align: center">13:00 - 14:00 UTC</td>
                        <td style="text-align: center">14:00 - 15:00 UTC</td>
                        <td style="text-align: center">15:00 - 16:00 UTC</td>
                        <td style="text-align: center">17:00 - 18:00 UTC</td>
                        <td style="text-align: center">18:00 - 19:00 UTC</td>
                        <td style="text-align: center">19:00 - 20:00 UTC</td>
                        <td style="text-align: center">21:00 - 22:00 UTC</td>
                        <td style="text-align: center">22:00 - 23:00 UTC</td>
                        <td style="text-align: center">23:00 - 00:00 UTC</td>
                        <td style="text-align: center">00:00 - 01:00 UTC</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>SKBO_DEL</td>
                        @foreach ($skbodel as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_N_TWR</td>
                        @foreach ($skbo_n_twr as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_S_TWR</td>
                        @foreach ($skbo_s_twr as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_N_APP</td>
                        @foreach ($skbo_n_app as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_S_APP</td>
                        @foreach ($skbo_s_app as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_W_APP</td>
                        @foreach ($skbo_w_app as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKBO_APP (Arrivals)</td>
                        @foreach ($skboapp as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>SKED_CTR</td>
                        @foreach ($skedctr as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">{{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-3">
                <p class="lead"> For reservations send an email to <a
                        href="mailto:co-xx@ivao.aero">co-xx@ivao.aero</a> </p>
            </div>
        </div>

        <div class="clearfix" style="height: 2rem">
        </div>

    </div>

</body>

</html>
