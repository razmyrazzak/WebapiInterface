<div class="col-sm-4">
    <div class="pricing-table wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
        <ul class="plan">
            <li class="plan-name">{{$sub->name}}</li>
            <li class="plan-price">
                <p><i class="fa fa-fw fa-check"></i>{{$sub->description_1}}</p>
                <p><i class="fa fa-fw fa-check"></i>{{$sub->description_2}}</p>
                <p><i class="fa fa-fw fa-check"></i>{{$sub->description_3}}</p>
                <p><i class="fa fa-fw fa-check"></i>{{$sub->description_4}}</p>
                <h3>
                    <span class="currency">$</span>{{$sub->price}}/
                    <span class="year">year</span>
                </h3>
            </li>
            <li class="plan-action"> <a  href="#" class="btn buy_login">BUY NOW</a> </li>
        </ul>
    </div>
</div>
