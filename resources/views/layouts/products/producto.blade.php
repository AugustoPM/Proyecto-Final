
<div class="row margin-b-50">
   
    
    @foreach ($products as $product)
                <!-- Our Exceptional Solutions -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="img/970x647/01.jpg" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h4><a href="#">{{ $product->title }}</a> <span class="text-uppercase margin-l-20">{{ $product->subtitle }}</span></h4>
                    <p>{{ $product->text }}</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Our Exceptional Solutions -->
                @endforeach
            </div>
            
            <!--// end row -->
  </div>
        <!-- End Our Exceptional Solutions -->