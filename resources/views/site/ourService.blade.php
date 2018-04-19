<section id="our-service" class="service-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center">
                <div class="section-title wow fadeInDown">
                    <h2>Service <span>Price</span></h2>
                    <div class="section-borders"> <span></span> <span></span> <span></span> </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
                </div>
            </div>
        </div>
        <div class="row flat">
            @foreach( $services as $sub)
                @include('site.cardSite')
            @endforeach

        </div>
        {{--<div class="row">--}}
            {{--@foreach( $subs as $sub)--}}
                {{--@include('site.cardSite')--}}
            {{--@endforeach--}}
        {{--</div>--}}
    </div>
</section>