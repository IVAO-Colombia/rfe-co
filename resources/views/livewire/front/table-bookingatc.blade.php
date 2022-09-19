<div class="container">
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
    <div class="row">
        <div class="col-md-12 text-center my-3">
            <h1>ATC Booking</h1>
        </div>
    </div>

    <div class="table-responsive">
        @php
            $facilitys = ['SKBO_DEL', 'SKBO_N_GND', 'SKBO_S_GND', 'SKBO_N_TWR', 'SKBO_S_TWR', 'SKBO_N_APP', 'SKBO_S_APP', 'SKBO_W_APP', 'SKBO_C_APP', 'SKED_CTR'];

            foreach ($facilitys as $key => $value) {
                $facilitybooks[$value] = $this->getPositionBooking($value);
            }

            // $skbodel = $skbo_n_gnd = $this->getPositionBooking('SKBO_N_GND');
            // $skbo_s_gnd = $this->getPositionBooking('SKBO_S_GND');
            // $skbo_n_twr = $this->getPositionBooking('SKBO_N_TWR');
            // $skbo_s_twr = $this->getPositionBooking('SKBO_S_TWR');
            // $skbo_n_app = $this->getPositionBooking('SKBO_N_APP');
            // $skbo_s_app = $this->getPositionBooking('SKBO_S_APP');
            // $skbo_w_app = $this->getPositionBooking('SKBO_W_APP');
            // $skboapp = $this->getPositionBooking('SKBO_APP');
            // $skedctr = $this->getPositionBooking('SKED_CTR');

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
                @foreach ($facilitybooks as $key => $facility)
                    <tr>
                        <td>{{ $key }}</td>
                        @foreach ($facility as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">
                                @if (!$item->vid)
                                    <x-jet-input type="checkbox" wire:click="booking({{ $item->id }})"
                                        class="form-check-input"></x-jet-input>
                                @endif
                                {{ $item->vid }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach

                {{-- <tr>
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
                    <td>SKBO_C_APP</td>
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
                </tr> --}}
            </tbody>
        </table>
    </div>

    <div class="clearfix" style="height: 2rem">
    </div>

</div>
