<div class="container" style="height: 100vh">
    <div class="clearfix" style="height: 3rem"></div>
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h1 class="descripRFE">{{ __("custom.RfeTitle") }}</h1>
        </div>
        <div class="col-md-7">
            <h4 style="text-align: justify">
                {{ __("custom.RfeDescription") }}
            </h4>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-6">
                    <div class="card homeCard">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __("custom.RunwayInformation") }}
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Runway</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Elevation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>13L</td>
                                            <td>134°</td>
                                            <td>8356 ft</td>
                                        </tr>
                                        <tr>
                                            <td>31R</td>
                                            <td>314°</td>
                                            <td>8360 ft</td>
                                        </tr>
                                        <tr>
                                            <td>13R</td>
                                            <td>134°</td>
                                            <td>8352 ft</td>
                                        </tr>
                                        <tr>
                                            <td>31L</td>
                                            <td>314°</td>
                                            <td>8356 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card homeCard">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __("custom.Frequencies") }}
                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>SKBO_DEL</td>
                                            <td>121.600</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_S_GND</td>
                                            <td>122.750</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_N_GND</td>
                                            <td>121.800</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_S_TWR</td>
                                            <td>118.250</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_N_TWR</td>
                                            <td>118.100</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_APP</td>
                                            <td>119.500</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_W_APP</td>
                                            <td>119.950</td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td>128.600</td>
                                        </tr>
                                        <tr>
                                            <td>SKEC_CTR</td>
                                            <td>128.400</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card homeCard">
                <a
                    href="{{ URL::asset('/src/doc/airport.pdf') }}"
                    target="_blank"
                    ><img
                        src="{{ URL::asset('/src/img/chart/airport.png') }}"
                        class="card-img"
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <a href="{{ URL::asset('/src/doc/gates.pdf') }}" target="_blank"
                    ><img
                        src="{{ URL::asset('/src/img/chart/gates.png') }}"
                        class="card-img"
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="{{ URL::asset('/src/doc/SKBO.pdf') }}"
                        target="_blank"
                        ><h5 class="card-title">
                            {{ __("custom.AirportChart") }}
                        </h5></a
                    >
                </div>
            </div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="{{ URL::asset('/src/doc/TMA.pdf') }}"
                        target="_blank"
                        ><h5 class="card-title">
                            {{ __("custom.TMAChart") }}
                        </h5></a
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix" style="height: 2rem"></div>
</div>
