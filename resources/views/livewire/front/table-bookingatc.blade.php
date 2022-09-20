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

        .btn-large {
            font-size: 1.5rem;
            padding: 10px 30px;
        }
    </style>
    <div class="row">
        <div class="col-md-12 text-center my-3">
            <h1>ATC Booking</h1>
        </div>
    </div>

    <div class="table-responsive">
        @php
            $facilitys = [['rating' => 5, 'name' => 'SKBO_DEL'], ['rating' => 5, 'name' => 'SKBO_N_GND'], ['rating' => 5, 'name' => 'SKBO_S_GND'], ['rating' => 5, 'name' => 'SKBO_N_TWR'], ['rating' => 5, 'name' => 'SKBO_S_TWR'], ['rating' => 6, 'name' => 'SKBO_N_APP'], ['rating' => 6, 'name' => 'SKBO_S_APP'], ['rating' => 6, 'name' => 'SKBO_W_APP'], ['rating' => 6, 'name' => 'SKBO_C_APP'], ['rating' => 6, 'name' => 'SKED_CTR']];

            foreach ($facilitys as $key => $value) {
                $item = (object) $value;
                $item->book = $this->getPositionBooking($item->name);
                $facilitybooks[$key] = $item;
            }

        @endphp
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
                        <td>{{ $facility->name }}</td>
                        @foreach ($facility->book as $item)
                            <td class="text-center {{ $item->vid ? 'bg-danger' : 'bg-success' }}">
                                @if (!$item->vid &&
                                    auth()->user() &&
                                    $facility->rating <= auth()->user()->ratingatc &&
                                    auth()->user()->division == 'CO')
                                    <x-jet-input type="checkbox" wire:click="booking({{ $item->id }})"
                                        class="form-check-input"></x-jet-input>
                                @endif
                                {{ $item->vid }}
                                @if (auth()->user() && auth()->user()->id == $item->vid)
                                    <div class="d-inline-block" style="cursor: pointer"
                                        wire:click="unbook({{ $item->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12 text-center my-3">
            <a href="{{ route('AtcBooking') }}" class="btn btn-primary btn-large mb-3">View Schedule</a>
            <br>

        </div>
    </div>
    <div class="clearfix" style="height: 2rem">
    </div>

</div>
