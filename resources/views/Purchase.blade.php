@extends('layouts.layout-1')

@section('title', 'Stephmond | ' . $PageTitle) 

@section('content')
    <div class="purchase">
        <section class="product">
            <div style="background-image: url('/images/bg.jpg')"></div>
            <div>
                <h1>Future Sound Flyer</h1>
                <h2><span>Price : N45,000</span>  <button>ADD TO CART</button> <button>BUY</button></h2>
                <br><br>
                <h3>Description</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium at nam rerum voluptatibus illo. Magni, doloribus numquam odio placeat ea quasi repellat molestias possimus ducimus necessitatibus assumenda, delectus, eius repellendus!
                    llitia quas cupiditate cumque, eos amet repudiandae consequatur tempora iusto fugit, sunt maxime, illo perferendis rerum. Libero voluptas recusandae voluptates sequi esse quidem minima distinctio?
                </p>
                
                <br><br>
                <h3>Item Details</h3>
                <ul>
                    <li>Fast support</li>
                    <li>Fast support</li>
                    <li>Fast support</li>
                    <li>Fast support</li>
                    <li>Fast support</li>
                </ul> 
            </div>
        </section>

        <section class="related-products">
            <h1>Related Products</h1> 
            <div class="products">
                <div class="products-inner">
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                    <div class="product">
                        <h1 class="sale">SALE</h1>
                        <div style="background-image: url('/images/switch.webp')"></div>
                        <span>TP-Link</span>
                        <p>TP-Link 24 Port 10-100 Rackmount Switch</p>
                        <h1>₦35,000</h1> 
                    </div>
                </div> 
            </div>
        </section>
    
        <section class="sec-3" style="background-image: url('/images/newsletter.jpg')">
            <div>
                <form action="">
                    <h1>Subscribe to our newsletter and get 10% Off!</h1>
                    <p>Join Over 1000+ People</p>
                    <br>
                    <input type="email" name="" placeholder="Enter Email..."> <button>Subscribe</button> 
                </form>
            </div>
        </section>
        
        <section class="sec-5">
            <img src="/images/01.png" alt="">
            <img src="/images/02.png" alt="">
            <img src="/images/03.png" alt="">
            <img src="/images/04.png" alt="">
            <img src="/images/05.png" alt="">
        </section>

    </div>
@endsection