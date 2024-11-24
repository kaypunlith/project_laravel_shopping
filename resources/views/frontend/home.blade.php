@extends('frontend.master')
@section('main-content')
<main class="home">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                NEW PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($newproduct as $newpro )
                        <div class="col-3">
                            <figure>
                               
                                <div class="thumbnail">
                                     @if($newpro->qty==0)
                                     <div class="stock-status">
                                    out-stock
                                      </div>
                                      @endif
                                       <!-- <div class="status">
                                        out-stock
                                    </div> -->
                                    <a href="/product-detail/{{$newpro->id}}">
                                        <img src="backend/uplaod/{{$newpro->thumbnail}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        @if ($newpro->sale_peice==0)
                                             <div class="price">US {{$newpro->	reguler_price}}</div>
                                            @else
                                                <div class="regular-price "><strike> US {{$newpro->	reguler_price}}</strike></div>
                                        <div class="sale-price ">US {{$newpro->sale_peice}}</div>
                                        @endif        
                                    </div>
                                    <h5 class="title">{{$newpro->name}}</h5>
                                </div>
                            </figure>
                        </div>
                        @endforeach
                       

                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                PROMOTION PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                    @foreach ($promotion as $promo )
                        <div class="col-3">
                            <figure>
                               
                                <div class="thumbnail">
                                    
                                    <a href="/product-detail">
                                        <img src="backend/uplaod/{{$promo->thumbnail}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        @if ($promo->sale_peice==0)
                                             <div class="price">US {{$promo->	reguler_price}}</div>
                                            @else
                                                <div class="regular-price "><strike> US {{$promo->reguler_price}}</strike></div>
                                        <div class="sale-price ">US {{$promo->sale_peice}}</div>
                                        @endif        
                                    </div>
                                    <h5 class="title">{{$promo->name}}</h5>
                                </div>
                            </figure>
                        </div>
                        @endforeach
                       
                       
                    </div>
                </div>
            </section>  

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                POPULAR PRODUCTS
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                    @foreach ($pupuler as $pup )
                        <div class="col-3">
                            <figure>
                               
                                <div class="thumbnail">
                                    <a href="/product-detail">
                                        <img src="backend/uplaod/{{$pup->thumbnail}}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        @if ($pup->sale_peice==0)
                                             <div class="price">US {{$pup->	reguler_price}}</div>
                                            @else
                                                <div class="regular-price "><strike> US {{$pup->reguler_price}}</strike></div>
                                        <div class="sale-price ">US {{$pup->sale_peice}}</div>
                                        @endif        
                                    </div>
                                    <h5 class="title">{{$pup->name}}</h5>
                                </div>
                            </figure>
                        </div>
                        @endforeach

                  </div>
                </div>       
        </main>  
@endsection