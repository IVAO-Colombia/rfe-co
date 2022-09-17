@php $myVID = Auth::id();
$myFlights = App\Models\Flight::where('user_id', "$myVID")->get(); @endphp
<div class="accordion" id="accordionFlights">
    @foreach ($myFlights as $flight)
        @if ($flight->type == 'departure')
            <div class="card">
                <div class="card-header p-0" id="heading{{ $flight->id }}">
                    <h2 class="mb-0">
                        <button class="btn btn-light btn-block text-left p-3 rounded-0" type="button"
                            data-toggle="collapse" data-target="#collapse{{ $flight->id }}" aria-expanded="true"
                            aria-controls="collapse{{ $flight->id }}">
                            {{ $flight->flight }}
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $flight->id }}" class="collapse" aria-labelledby="heading{{ $flight->id }}"
                    data-parent="#accordionFlights">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h1>{{ $flight->flight }}</h1>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h2>
                                        <i class="fas fa-plane-departure"></i>&nbsp;{{ $flight->departure }}
                                    </h2>
                                </div>
                                <div class="col" style="text-align: center">
                                    <h2><i class="fas fa-arrow-right"></i></h2>
                                </div>
                                <div class="col-md-4" style="text-align: center">
                                    <h2>
                                        {{ $flight->destination }}&nbsp;<i class="fas fa-plane-arrival"></i>
                                    </h2>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h4>
                                        <i class="fas fa-hourglass-start"></i>&nbsp;
                                        @php
                                            $time = $flight->departure_time;
                                            $splitTime = explode(':', $time);
                                            $zuluTime = $splitTime[0] . ':' . $splitTime[1] . '&nbsp;Z';
                                            echo $zuluTime;
                                        @endphp
                                    </h4>
                                </div>
                                <div class="col" style="text-align: center"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h4>
                                        @php
                                            $time = $flight->arrival_time;
                                            $splitTime = explode(':', $time);
                                            $zuluTime = $splitTime[0] . ':' . $splitTime[1] . '&nbsp;Z';
                                            echo $zuluTime;
                                        @endphp &nbsp;<i class="fas fa-hourglass-end"></i>
                                    </h4>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h4>
                                        <i class="fas fa-sign-in-alt"></i>&nbsp;{{ $flight->departure_gate }}
                                    </h4>
                                </div>
                                <div class="col" style="text-align: center"></div>
                                <div class="col-md-4" style="text-align: center">
                                    <h4>
                                        {{ $flight->destination_gate }}&nbsp;<i class="fas fa-sign-out-alt"></i>
                                    </h4>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-10" style="text-align: center">
                                    <h5>{{ $flight->aircraft }}</h5>
                                </div>
                                <div class="col"></div>
                            </div>
                            @if (!$flight->route == '')
                                <div class="row justify-content-md-center">
                                    <div class="col"></div>
                                    <div class="col-md-10" style="text-align: center">
                                        <h5>{{ $flight->route }}</h5>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            @endif
                            <div class="row justify-content-md-center">
                                <div class="col"></div>
                                <div class="col-md-10" style="text-align: center">
                                    <h5>{{ $flight->information }}</h5>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <form action="{{ route('unbook.update', $flight->id) }}" method="POST">
                            @csrf @method('PUT')
                            <button type="submit" class="btn btn-danger flights">
                                {{ __('custom.Unbook') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
