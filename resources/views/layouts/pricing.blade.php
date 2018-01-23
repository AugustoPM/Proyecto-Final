<!--========== PAGE LAYOUT ==========-->
        <!-- Pricing -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-chemistry"></i>
                                    <h3>{{ $pricings[0]->title }}<span> - $</span>{{ $pricings[0]->value }}</h3>
                                    <p>{{ $pricings[0]->content }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricings[0]->features1 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[0]->features2 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[0]->features3 }}</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <!-- Pricing -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-badge"></i>
                                    <h3>{{ $pricings[1]->title }}<span> - $</span>{{ $pricings[1]->value }}</h3>
                                    <p>{{ $pricings[1]->content }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricings[1]->features1 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[1]->features2 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[1]->features3 }}</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <i class="pricing-icon icon-shield"></i>
                                    <h3>{{ $pricings[2]->title }}<span> - $</span>{{ $pricings[2]->value }}</h3>
                                    <p>{{ $pricings[2]->content }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricings[2]->features1 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[2]->features2 }}</li>
                                    <li class="pricing-list-item">{{ $pricings[2]->features3 }}</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Pricing -->