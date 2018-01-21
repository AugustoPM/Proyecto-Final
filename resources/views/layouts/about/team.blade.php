<!-- Team -->
<div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Meet the Team</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">

                @foreach( $teams as $team)
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/01.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">{{ $team->nombre }}</a> <span class="text-uppercase margin-l-20">{{ $team->cargo }}</span></h4>
                        <p>{{ $team->mensaje }}</p>
                        
                    </div>
                    <!-- End Team -->
                    @endforeach
                   
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->