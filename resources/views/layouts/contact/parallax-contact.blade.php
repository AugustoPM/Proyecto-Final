@foreach ($contactparallaxes as $contactparallax)
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">{{ $contactparallax->title }}</h1>
                <p>{{ $contactparallax->description }} <br/> {{ $contactparallax->description2 }}</p>
            </div>
</div>
<!--========== PARALLAX ==========-->
@endforeach