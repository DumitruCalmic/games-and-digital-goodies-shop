@extends('layouts.layout')

<!-- slider section starts  -->

<!-- slider section ends  -->

<!-- home section starts  -->
@section('header')
<section class="home" id="home">

    <div class="image">
        <img src="img/image-home.jpg" alt="">
    </div>

    <div class="content">
        <span>Games and Digital Goodies</span>
        <h3>Exactly what do you need !</h3>
        <a href="#" class="btn">More</a>
    </div>

</section>
@endsection
<!-- home section ends -->

<!-- banner section starts  -->
@section('offers')
<section class="banner-container">

    <div class="banner">
        <img src="img/banner-1.jpg" alt="">
        <div class="content">
            <h3>special offer</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="img/banner-2.jpg" alt="">
        <div class="content">
            <h3>limited offer</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

</section>
@endsection
<!-- banner section ends -->

