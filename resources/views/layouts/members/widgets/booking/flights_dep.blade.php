@php
$flights_dep = App\Models\Flight::where('type', 'departure')
    ->orderBy('departure_time', 'asc')
    ->get();
@endphp
<div class="table-responsive">
    <table class="table table-borderless align-middle">
        <thead>
            <tr>
                <th scope="col" style="text-align: center">
                    {{ __('booking.Operator') }}
                </th>
                <th scope="col">{{ __('booking.Flight') }}</th>
                <th scope="col">{{ __('booking.Aircraft') }}</th>
                <th scope="col">{{ __('booking.Origin') }}</th>
                <th scope="col">{{ __('booking.Destination') }}</th>
                <th scope="col">{{ __('booking.Departure') }}</th>
                <th scope="col">{{ __('booking.Arrival') }}</th>
                <th scope="col" style="text-align: center">
                    {{ __('booking.Booking') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flights_dep as $flight)
                <tr>
                    <td style="text-align: center">
                        @php
                            
                            if (($icao = mb_substr($flight->flight, 0, 1)) == 'N' && ($icao = mb_substr($flight->flight, 0, 3)) !== 'NSE' && ($icao = mb_substr($flight->flight, 0, 3)) !== 'NKS') {
                                $airline = $icao;
                            } elseif (($icao = mb_substr($flight->flight, 0, 2)) == 'HK') {
                                $airline = $icao;
                            } else {
                                $airline = mb_substr($flight->flight, 0, 3);
                            }
                        @endphp
                        <img class="airlineslogo" src="{{ URL::asset("/src/img/airlines/$airline.png") }}" />
                    </td>
                    <td>{{ $flight->flight }}</td>
                    <td>{{ $flight->aircraft }}</td>
                    <td>{{ $flight->departure }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>
                        @php
                            $time = $flight->departure_time;
                            $splitTime = explode(':', $time);
                            $zuluTime = $splitTime[0] . ':' . $splitTime[1] . '&nbsp;Z';
                            echo $zuluTime;
                        @endphp
                    </td>
                    <td>
                        @php
                            $time = $flight->arrival_time;
                            $splitTime = explode(':', $time);
                            $zuluTime = $splitTime[0] . ':' . $splitTime[1] . '&nbsp;Z';
                            echo $zuluTime;
                        @endphp ?>
                    </td>
                    <td style="text-align: center">
                        @if (!$flight->user_id == null)
                            <button type="button" class="btn btn-danger by flights" disabled>
                                {{ __('booking.BookedBy') }}&nbsp;{{ $flight->user_id }}
                            </button>
                        @else
                            @if (Auth::user())
                                <form action="{{ route('flights.update', $flight->id) }}" method="POST">
                                    @csrf @method('PUT')
                                    <div class="mb-3">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"
                                            class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-success flights">
                                        {{ __('booking.Available') }}
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-success flights" href="{{ route('Login') }}"
                                    role="button">{{ __('booking.Available') }}</a>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
