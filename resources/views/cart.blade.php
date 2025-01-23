@extends('user_nav')

@section('user_navbar')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                    
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($records as $r)
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('Files/'.$r->Thumbnail)}}" alt="" style="height: 100px; width:80px;">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$r->Book_Title}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{$r->Price}}</h5>
                                </td>
                                <td></td>
                                <td>
                                <form action="/deletepg/{{$r->id}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" style="border: none; background-color: transparent;">
                                        <h4 class="fa fa-close" style="font-size:24px; color:red; padding-left: 20px;"></h4>
                                    </button>
                                </form>

                                </td>
                            </tr>
                            @endforeach
                            
                            <tr>
                                <td>

                                </td>
                                <td>
                                
                                    <h4>Total:</h4>
                                </td>
                                <td></td>
                                <td>
                                    <h4>Rs.{{ $records->sum('Price') }}</h4>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                <form action="/checkout" method="POST">
                                    @csrf
                                    <input type="hidden" name="Total" value="Rs.{{ $records->sum('Price') }}">
                                    <input type="hidden" name="BookId" value="{{$r->BookId}}">
                                    <button type="submit" class="gray_btn">Checkout</button>
                                </form>

                                
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--================End Cart Area =================-->

    @endsection