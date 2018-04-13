<div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white card-colour-{{$sub->name}} o-hidden h-100">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fa fa-fw fa-fw fa-list"></i>
            </div>
            <div class="card_details">
                <h2>{{$sub->name}}</h2>
                <p>{{$sub->description}}</p>
                <p>{{$sub->price}}</p>
            </div>

        </div>
        @inject('payLinks', 'App\Http\Controllers\SubscriptionController')
        <a class="card-footer card-buy text-white clearfix small z-1" href="{{$payLinks->getServices($sub->id)}}">
            <span class="byt-btn">Buy</span>
        </a>
    </div>
</div>

