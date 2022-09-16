<div class="container-fluid" style="height: 100vh">
    <div class="clearfix" style="height: 3rem"></div>
    <div class="row">
     
        

        <div class="col-md-10 position-relative mx-5 mb-3">
            <h1 class="descripRFE"><?php echo e(__("custom.RfeTitle")); ?></h1>
        </div>

        <div class="col-md-7 mx-2">
            <h4 style="text-align: justify" class="aboutRFE">
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
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
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
                                            <td>SKBO_TWR</td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_GND</td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_CLR</td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td>SKBO_APP</td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
                                        </tr>
                                        <tr>
                                            <td>SKED_CTR</td>
                                            <td><?php echo e(__("custom.Unkdown")); ?></td>
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
                        href="<?php echo e(URL::asset('/src/doc/SKBO.pdf')); ?>"
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

    </div>
    <div class="clearfix" style="height: 2rem"></div>
</div>