
<div class="splide">
    <div class="splide__track">
            <ul class="splide__list">
                
                @foreach($sliders as $slide)
                    <li class="splide__slide">
                        <div class="splide__slide__container">
                            <img src="{{$slide->path}}" alt="" class="img-fluid rounded">
                        </div>
                    </li>
                @endforeach
                
            </ul>
    </div>

    <div class="splide__progress">
		<div class="splide__progress__bar">
		</div>
  </div>
</div>


<link rel="stylesheet" href="/assets/splide-js/css/splide.min.css">
<script src="/assets/splide-js/js/splide.min.js"></script>
<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.splide',{
            type: 'loop',
            autoplay: true,
            interval: 2000
        } );

        splide.mount();
    } );
</script>