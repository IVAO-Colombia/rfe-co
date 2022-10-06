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

        .btn-large {
            font-size: 1.5rem;
            padding: 10px 30px;
        }
    </style>

    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center my-3">
                <h1>ATC Booking</h1>
            </div>
        </div>
        @php
            $facilitys = ['SKBO_DEL', 'SKBO_N_GND', 'SKBO_S_GND', 'SKBO_N_TWR', 'SKBO_S_TWR', 'SKBO_N_APP', 'SKBO_S_APP', 'SKBO_W_APP', 'SKBO_C_APP', 'SKED_CTR'];

            foreach ($facilitys as $key => $value) {
                $facilitybooks[$value] = getPositionBooking($value);
            }

        @endphp
        <div class="table-responsive">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td><b>FACILITY</b></td>
                        <td style="text-align: center">13:00 - 14:00 UTC</td>
                        <td style="text-align: center">14:00 - 15:00 UTC</td>
                        <td style="text-align: center">15:00 - 16:00 UTC</td>
                        <td style="text-align: center">16:00 - 17:00 UTC</td>
                        <td style="text-align: center">17:00 - 18:00 UTC</td>
                        <td style="text-align: center">18:00 - 19:00 UTC</td>
                        <td style="text-align: center">19:00 - 20:00 UTC</td>
                        <td style="text-align: center">20:00 - 21:00 UTC</td>
                        <td style="text-align: center">21:00 - 22:00 UTC</td>
                        <td style="text-align: center">22:00 - 23:00 UTC</td>
                        <td style="text-align: center">23:00 - 00:00 UTC</td>
                        <td style="text-align: center">00:00 - 01:00 UTC</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($facilitybooks as $key => $facility)
                        <tr>
                            <td>{{ $key }}</td>
                            @foreach ($facility as $item)
                                <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">
                                    @if (!$item->vid)
                                        -
                                    @else
                                        <a href="https://www.ivao.aero/Member.aspx?ID={{ $item->vid }}"
                                            target="_blank" class="text-white">
                                            {{ $item->vid }}</a>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
            </table>
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-3">
                <a href="{{ route('atcbookingbook') }}" class="btn btn-primary btn-large mb-3">Book</a>
                <br>
                {{-- <p class="lead"> For reservations send an email to <a
                        href="mailto:co-atcops@ivao.aero">co-atcops@ivao.aero</a> </p> --}}
            </div>
        </div>

        <div class="clearfix" style="height: 2rem">
        </div>

    </div>
    @livewireStyles()
</body>

</html>
