<div class="container" style="height: 100vh">
    <div class="clearfix" style="height: 3rem"></div>
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h1 class="descripRFE"><?php echo e(__("custom.RfeTitle")); ?></h1>
        </div>
        <div class="col-md-7">
            <h4 style="text-align: justify">
                <?php echo e(__("custom.RfeDescription")); ?>

            </h4>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-6">
                    <div class="card homeCard">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo e(__("custom.RunwayInformation")); ?>

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
                                            <td>01</td>
                                            <td>006°</td>
                                            <td>6967 ft</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>186°</td>
                                            <td>7025 ft</td>
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
                                <?php echo e(__("custom.Frequencies")); ?>

                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>SKRG_TWR</td>
                                            <td>118.600</td>
                                        </tr>
                                        <tr>
                                            <td>SKRG_GND</td>
                                            <td>121.900</td>
                                        </tr>
                                        <tr>
                                            <td>SKRG_CLR</td>
                                            <td>121.650</td>
                                        </tr>
                                        <tr>
                                            <td>SKMD_APP</td>
                                            <td>126.100</td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td>128.600</td>
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
                    href="<?php echo e(URL::asset('/src/doc/airport.pdf')); ?>"
                    target="_blank"
                    ><img
                        src="<?php echo e(URL::asset('/src/img/chart/airport.png')); ?>"
                        class="card-img" style="width:50%"
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <a href="<?php echo e(URL::asset('/src/doc/gates.pdf')); ?>" target="_blank"
                    ><img
                        src="<?php echo e(URL::asset('/src/img/chart/gates.png')); ?>"
                        class="card-img"  style="width: 80%
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="<?php echo e(URL::asset('/src/doc/SKRG.pdf')); ?>"
                        target="_blank"
                        ><h5 class="card-title">
                            <?php echo e(__("custom.AirportChart")); ?>

                        </h5></a
                    >
                </div>
            </div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="<?php echo e(URL::asset('/src/doc/TMA.pdf')); ?>"
                        target="_blank"
                        ><h5 class="card-title">
                            <?php echo e(__("custom.TMAChart")); ?>

                        </h5></a
                    >
                </div>
            </div>
            
        </div>

        <!-- START SKMD (EOH) PAGE -->
        
        <div class="col-md-10">
            <h1 class="descripRFE"><?php echo e(__("custom.RfeTitle2")); ?></h1>
        </div>
        <div class="col-md-7">
            <h4 style="text-align: justify">
                <?php echo e(__("custom.RfeDescription2")); ?>

            </h4>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-6">
                    <div class="card homeCard">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo e(__("custom.RunwayInformation")); ?>

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
                                            <td>02</td>
                                            <td>017°</td>
                                            <td>4922 ft</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>197°</td>
                                            <td>4888 ft</td>
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
                                <?php echo e(__("custom.Frequencies")); ?>

                            </h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>SKMD_TWR</td>
                                            <td>118.000</td>
                                        </tr>
                                        <tr>
                                            <td>SKMD_GND</td>
                                            <td>121.900</td>
                                        </tr>
                                        <tr>
                                            <td>SKMD_CLR</td>
                                            <td>121.750</td>
                                        </tr>
                                        <tr>
                                            <td>SKMD_APP</td>
                                            <td>121.100</td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td>128.600</td>
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
                    href="<?php echo e(URL::asset('/src/doc/airport_eoh.pdf')); ?>"
                    target="_blank"
                    ><img
                        src="<?php echo e(URL::asset('/src/img/chart/airport_eoh.png')); ?>"
                        class="card-img" style="width:50%"
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <a href="<?php echo e(URL::asset('/src/doc/gates_eoh.pdf')); ?>" target="_blank"
                    ><img
                        src="<?php echo e(URL::asset('/src/img/chart/gate_eoh.png'));  ?>"
                        class="card-img" style="width: 80%"
                /></a>
            </div>
            <div class="clearfix" style="height: 2rem"></div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="<?php echo e(URL::asset('/src/doc/SKMD.pdf')); ?>"
                        target="_blank"
                        ><h5 class="card-title">
                            <?php echo e(__("custom.AirportChart2")); ?>

                        </h5></a
                    >
                </div>
            </div>
            <div class="card homeCard">
                <div class="card-body">
                    <a
                        class="LinkSKBO"
                        href="<?php echo e(URL::asset('/src/doc/TMA.pdf')); ?>"
                        target="_blank"
                        ><h5 class="card-title">
                            <?php echo e(__("custom.TMAChart2")); ?>

                        </h5></a
                    >
                </div>
            </div>
        </div>
        
    </div>
    <div class="clearfix" style="height: 2rem"></div>
</div>