<div class="row margin-b-50">
    <!-- Our Exceptional Solutions -->
    @foreach($products as $product)
    <div class="col-sm-4 sm-margin-b-50">
        <div class="margin-b-20">
            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                <img class="img-responsive" src="img/970x647/01.jpg" alt="Our Exceptional Solutions Image">
            </div>
        </div>
        <h3><a href="#">{{ $product->title }}</a> <span class="text-uppercase margin-l-20">{{ $product->subtitle }}</span></h3>
        <p>{{ $product->text }}</p>
        <a class="link" href="#">Read More</a>
    </div>
    @endforeach
    <!-- End Our Exceptional Solutions -->
</div>
</div>
</div>