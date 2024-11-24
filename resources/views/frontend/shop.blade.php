@extends('frontend.master')
@section('main-content')
<main>
            <main class="shop">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                @foreach ($shopproduct as $proshop )
                           <div class="col-4">
                                    <figure>
                                    
                                        <div class="thumbnail">
                                        @if($proshop->qty==0)
                                     <div class="stock-status">
                                    out-stock
                                      </div>
                                      @endif
                                            <a href="/product-detail/{{$proshop->id}}">
                                                <!-- <img src="backend/uplaod/{{$proshop->thumbnail}}" alt=""> -->
                                                <img src="{{asset('backend/uplaod/'.$proshop->thumbnail)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="detail">
                                            <div class="price-list">
                                                @if ($proshop->sale_peice==0)
                                                    <div class="price">US {{$proshop->	reguler_price}}</div>
                                                    @else
                                                        <div class="regular-price "><strike> US {{$proshop->reguler_price}}</strike></div>
                                                <div class="sale-price ">US {{$proshop->sale_peice}}</div>
                                                @endif        
                                            </div>
                                            <h5 class="title">{{$proshop->name}}</h5>
                                        </div>
                                    </figure>
                                </div>
                                @endforeach
                                   
                                    
                                    <div class="col-12">
                                        <ul class="pagination">
                                            @for ($i=1;$i<=$Totalpage;$i++)
                                            <li>
                                                <a href="/shop/{{$i}}">{{$i}}</a>
                                            </li>
                                            
                                            
                                            @endfor
                                           
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 filter">
                                <h4 class="title">Category</h4>
                                <ul>
                                    <li>
                                        <a href="/shop">ALL</a>
                                    </li>
                                    @foreach ($listCategory as $categoryItem )
                                    <li>
                                        <a href="/shop/{{$page}}/?category={{$categoryItem->id}}">{{$categoryItem->name}}</a>
                                    </li> 
                                    @endforeach
                                  
                                  
                                </ul>
                                
                                <h4 class="title mt-4">Price</h4>
                                <div class="block-price mt-4">
                                    <a href="/shop/{{$page}}?price=max">High</a>
                                    <a href="/shop/{{$page}}?price=min">Low</a>
                                </div>
            
                                <h4 class="title mt-4">Promotion</h4>
                                <div class="block-price mt-4">
                                    <a href="/shop/{{$page}}?promotion=true">Promotion Product</a>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </section>
            
            </main>
        </main>

@endsection