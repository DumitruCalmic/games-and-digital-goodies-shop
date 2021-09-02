<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive grocery website design tutorial</title>
     
    <!-- bootstrap css link  -->
   

    <!-- bootstrap javascript link  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/application4.css">
</head>
<body>

<!-- header section starts  -->

@include('header')
<section class="home" id="home">

    <div class="image">
        <img src="images/image-home.jpg" alt="">
    </div>

    <div class="content">
        <span>Games and Digital Goodies</span>
        <h3>Exactly what do you need !</h3>
        <a href="#" class="btn">More</a>
    </div>

</section>
<!-- header section ends -->

@yield('header')

@yield('content')
@yield('offers')
<!-- footer section starts  -->

@include('footer')

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="assets/js/button.js"></script>

</body>
</html>