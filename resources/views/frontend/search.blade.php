@extends('frontend.master')
@section('main-content')
<main class="shop">

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="main-title">
                    Product Result
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                        <img src="{{asset('backend/uplaod/'.$prodcutSearch[0]->thumbnail)}}" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US {{$prodcutSearch[0]->reguler_price}}</strike></div>
                            <div class="sale-price ">US {{$prodcutSearch[0]->sale_peice}}</div>
                        </div>
                        <h5 class="title">{{$prodcutSearch[0]->name}}</h5>
                    </div>
                </figure>
            </div>
         
            
         
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="main-title">
                    News Result
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <a href="">
                            <img src="https://placehold.co/300x300" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

</main>
@endsection