<div class="swiper-slide">
    <div class="slide slide--filosofy"
         style="background-image:url({{ Voyager::image($researchStage->image) ?: '/images/faza2.jpg' }});">
        <div class="slide__image">
            <img src="{{ Voyager::image($researchStage->image) ?: '/images/faza2.jpg' }}" alt="">
        </div>
        <div class="slide__content">
            <div class="slide__text-card">
                <div class="text-block text-block--dark slide__pagination">
                    <span class="text-block--s slide__taxometry">Фазы исследования &mdash;</span>
                    <span class="slide__taxometry">{{sprintf("%02d", $researchStage->order)}} / </span>
                    <span>{{sprintf("%02d", $researchStage->count())}}</span>
                </div>
                <h3 class="heading heading--dark heading--ms">{!! $researchStage->title !!}</small></h3>
                @if($researchStage->body)
                    <div class="text-block text-block--dark text-block--s">
                        {!! $researchStage->body !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
