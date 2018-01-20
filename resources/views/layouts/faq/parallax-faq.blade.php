@foreach ($faqparallaxes as $faqparallax)
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">{{ $faqparallax->title }}</h1>
                <p>{{ $faqparallax->description }} <br/> {{ $faqparallax->description2 }}</p>
            </div>
</div>
<!--========== PARALLAX ==========-->
@endforeach