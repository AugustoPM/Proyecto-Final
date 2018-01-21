<!-- Features -->
<div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                   
                    
                        @foreach( $infos as $info )
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3>{{ $info->titulo }}</h3>
                            <p>{{ $info->desc_res }}</p>
                            <a class="link" href="#">Read More</a>
                        </div>
                    </div> 
                        
                      @endforeach 
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Features -->