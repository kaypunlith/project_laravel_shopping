@extends('frontend.master')
@section('main-content')
<main class="product-detail">

<section class="review">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="thumbnail">
                    <img src="/backend/uplaod/{{$Mainproduct[0]->thumbnail}}" alt="">
                </div>
            </div>
            <div class="col-7">
                <div class="detail">
                    <div class="price-list">
                        <div class="price d-none">US 30.5</div>
                        <div class="regular-price"><strike> US{{$Mainproduct[0]->reguler_price}} </strike></div>
                        <div class="sale-price">US {{$Mainproduct[0]->sale_peice}}</div>
                    </div>
                    <h5 class="title">{{$Mainproduct[0]->name}}</h5>
                    <div class="group-size">
                        <span class="title">Color Available</span>
                        <div class="group">
                            {{$Mainproduct[0]->color}}
                        </div>
                    </div>
                    <div class="group-size">
                        <span class="title">Size Available</span>
                        <div class="group">
                            {{$Mainproduct[0]->size}}
                        </div>
                    </div>
                    <div class="group-size">
                        <span class="title">Description</span>
                        <div class="description">
                            {{$Mainproduct[0]->description}}=
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="main-title">
                    RELATED PRODUCTS
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
                            <img src="/assets/photo/zen2.jpg" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="/assets/photo/zen7.jpg" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="/assets/photo/zen5.jpg" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
            <div class="col-3">
                <figure>
                    <div class="thumbnail">
                        <div class="status">
                            Promotion
                        </div>
                        <a href="">
                            <img src="/assets/photo/zen2.jpg" alt="">
                        </a>
                    </div>
                    <div class="detail">
                        <div class="price-list">
                            <div class="price d-none">US 10</div>
                            <div class="regular-price "><strike> US 15</strike></div>
                            <div class="sale-price ">US 12</div>
                        </div>
                        <h5 class="title">T-Shirt 001</h5>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

</main>
@endsection