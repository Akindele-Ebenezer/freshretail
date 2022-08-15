@extends('layouts.layout-2')

@section('title', 'Stephmond | ' . $PageTitle)
@section('page_title', $PageTitle)

@section('page_content')
    <div class="shopping-cart-heading">
        <h1>Shopping Cart</h1>
        <h1>3 Items</h1>
    </div>
    <div class="shopping-cart">
        <table>
            <tr>
                <th>PRODUCT ITEMS</th>
                <th>QTY</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <td>
                    <img src="/images/bg.jpg" alt=""> 
                    <h1>LLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL <br> <span>kkkkkkkkkk</span></h1> 
                </td>
                <td>- <input type="text"> +</td>
                <td>N43,000</td>
                <td>Ssa</td>
            </tr>
            <tr>
                <td>
                    <img src="/images/bg.jpg" alt=""> 
                    <h1>LLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL <br> <span>kkkkkkkkkk</span></h1> 
                </td>
                <td>- <input type="text"> +</td>
                <td>N43,000</td>
                <td>Ssa</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>2 items</td>
                <td class="total">N43,000</td>
                <td></td>
            </tr>
        </table>
    </div>
    <section class="save">
        <button>SAVE ITEMS</button>
        <button>PROCEED TO CHECKOUT</button>
    </section>
@endsection