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

            <div class="col-sm-4">
                <div class="pricing-table wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                    <ul class="plan">
                        <li class="plan-name" style="<?php echo (Auth::user() && $last_payments->service_id == $service->id ? 'background: #5cb85c !important' : ''); ?>">NAME <p><i>Lorem Ipsum is not simply random</i></p></li>
                        <li class="plan-price">
                            <h3>
                                <span class="currency">$</span>100/
                                <span class="year">year</span>
                            </h3>
                        </li>

                        {{--<li class="plan-action"> <a href="javascript:void(0)" class="btn">Current Plan</a></li>--}}

                        {{--<li class="plan-action"> <a href="gfdgf" class="btn">BUY NOW</a></li>--}}

                        <li class="plan-action"> <a  href="javascript:void(0)" class="btn buy_login">BUY NOW</a> </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>