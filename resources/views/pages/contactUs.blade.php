@extends('layouts.layout')

@section('content')
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>
    @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                 <li>
                     {{ $error }}
                 @endforeach
                 </li>
             </ul>
         </div>
    @endif
    @if (sessions)
         <div class="alert alert-succes">
             Mesajul a fost transmis cu succses!
         </div>
    @endif
    <form action="/store-contact-info" method="POST">

        <div class="inputBox">
            <input type="text" required="required" name="name" placeholder="name">
            <input type="email" required="required" name="email" placeholder="email">
        </div>

        <div class="inputBox">
            <input type="number" required="required" name="number" placeholder="number">
            <input type="text" required="required" name="subject" placeholder="subject">
        </div>

        <div class="inputBox">
            <label for="Problem category"><p>Select Department</p></label>
            <select name="department" id="problemCategory"> 
                 <option value="technical">Technical Department</option>
                 <option value="selling">Selling Department</option>
                 <option value="help">Help Department</option>
            </select>
       </div>

        <textarea required="required" name="textarea" placeholder="message" id="" cols="30" rows="10"></textarea>

        @csrf

        <input type="submit" value="send message" class="btn">

    </form>

</section>

<!-- contact section ends  -->

<!-- map section starts  -->

<div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10883.258179228795!2d28.8407153!3d47.
             0046143!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b7bd74bc15dd0cf!2sShopping%20MallDova!
             5e0!3m2!1sru!2s!4v1629144141459!5m2!1sru!2s" 
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<!-- map section ends -->
@endsection