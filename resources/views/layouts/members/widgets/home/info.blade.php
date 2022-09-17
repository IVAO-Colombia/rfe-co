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
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
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
                                            <td>SKBO_TWR</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_GND</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_CLR</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_APP</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td>{{ __('custom.Unkdown') }}</td>
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
                    <a class="btn btn-primary btn-large mr-2 mb-2" href="{{ asset('/src/doc/TMA.pdf') }}"
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
