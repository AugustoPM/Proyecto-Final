<!-- Service -->
<div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                        @foreach($services as $service)
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>{{ $service->titulo }}</h3>
                                    <p class="margin-b-5">{{ $service->descripcion }}</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>  
                    @endforeach
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->