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
                                    <h3>{{ $pricing->title }}<span> - $</span>{{ $pricing->value }}</h3>
                                    <p>{{ $pricing->content }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricing->features1 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features2 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features3 }}</li>
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
                                    <h3>{{ $pricing->title2 }}<span> - $</span>{{ $pricing->value2 }}</h3>
                                    <p>{{ $pricing->content2 }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricing->features4 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features5 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features6 }}</li>
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
                                    <h3>{{ $pricing->title3 }}<span> - $</span>{{ $pricing->value3 }}</h3>
                                    <p>{{ $pricing->content3 }}</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">{{ $pricing->features7 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features8 }}</li>
                                    <li class="pricing-list-item">{{ $pricing->features9 }}</li>
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