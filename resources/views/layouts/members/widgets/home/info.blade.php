<div class="container" style="height: 100vh">
    <div class="clearfix" style="height: 3rem"></div>
    <div class="row">



        <div class="col-md-12 position-relative mb-3">
            <h1 class="descripRFE">{{ __('custom.RfeTitle') }}</h1>
        </div>

        <div class="col-md-12 px-2">
            <h4 style="text-align: justify" class="aboutRFE">
                {{ __('custom.RfeDescription') }}

            </h4>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-6">
                    <div class="card homeCard">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('custom.Frequencies') }}

                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Position</th>
                                            <th scope="col">Frecuency</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SKBO_DEL</td>
                                            <td>121,6 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_N_GND</td>
                                            <td>121,8 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_S_GND</td>
                                            <td>122,75 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_N_TWR</td>
                                            <td>118,1 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_S_TWR</td>
                                            <td>118,25 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_N_APP</td>
                                            <td>121,3 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_S_APP</td>
                                            <td>119,65 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_W_APP</td>
                                            <td>119,95 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_APP (Arrivals)</td>
                                            <td>119,5 MHz</td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td>128,6 MHz</td>
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
                                {{ __('custom.RunwayInformation') }}

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
                                            <td> 134°</td>
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

            </div>
        </div>
        <div class="col-md-12">
            <div>
                <h3>Charts</h3>
            </div>

            <div class="clearfix" style="height: 2rem">
            </div>
            <div class="card homeCard">
                <div class="card-body">
                    <a href="{{ asset('/src/doc/gates.pdf') }}" target="_blank"
                        class="btn btn-primary btn-large mr-2 mb-2">
                        Gates
                    </a>
                    <a href="{{ asset('/src/doc/airport.pdf') }}" target="_blank"
                        class="btn btn-primary btn-large mr-2 mb-2">
                        Airport
                    </a>
                    <a class="btn btn-primary btn-large mr-2 mb-2" href="{{ asset('/src/doc/SKBO.pdf') }}"
                        target="_blank">
                        {{ __('custom.AirportChart') }}
                    </a>
                    <a class="btn btn-primary btn-large mr-2 mb-2" href="{{ asset('/src/doc/TMABOGOTA.pdf') }}"
                        target="_blank">
                        {{ __('custom.TMAChart') }}
                    </a>
                </div>
            </div>
            <div class="clearfix" style="height: 2rem">
            </div>

        </div>

    </div>
    <div class="clearfix" style="height: 2rem"></div>
</div>
