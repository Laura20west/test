<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>

<body>



<!-- site header
================================================== -->
<header class="s-header">

    <div class="header-logo">
        <a class="site-logo" href="index.html">
            <img src="{{URL('images/Frame 1.png')}}" alt="Homepage">
        </a>
    </div>

    <nav class="header-nav-wrap">
        <ul class="header-main-nav">
            <li class="current"><a class="smoothscroll" href="#home" title="intro">Home</a></li>
            <li><a class="smoothscroll" href="#about" title="our shop">Our shop</a></li>
            <li><a class="smoothscroll" href="#services" title="contact us">Contact us</a></li>

            
           
        </ul>
        <ul class="header-social">
        <li style="border: 2px solid yellow; border-radius:5px;">
                <a  href="BYS.html" style="background-color:yellow; color:black; font-size:medium;"><b>Build your site</b></a>
            </li>
        </ul>
        

---------------        
    </nav>

    <a class="header-menu-toggle" href="#"><span>Menu</span></a>

</header> <!-- end s-header -->


<!-- intro
================================================== -->
<!-- end intro -->

<section class="new">
<div class="new-pic" style="background-color:black; ">
        <img src="{{url('/images/frame 1000007667.png')}}" alt="Image" style=" display: block;
  margin-left: auto;
  margin-right: auto; width:20%; height:10%;padding-top:10%; ";>
    </div>

    <h2 style="color:aliceblue; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; padding-top:0%; font-size:40px;">Shop it here</h2>
    <p style="color:aliceblue; text-align:center; padding-top:0px;">Classic Exclusive Women collection</p>
    <form  method="" id="" style="position:relative; padding-left:43%; position:relative;">
        <button style="background-color:yellow; border:0px solid; border-radius:10px;">
            Shop now
        </button>
    </form>
</section>

<section class="items" > 
    <div class="sale">
<nav class="header-nav-wrap" style="width:100%;">
        <ul class="header-main-nav" >
            <li class="current" ><a href="#home" title="shop">
                <img src="{{url('/images/frame 30.png')}}" >
            </a></li>
            <li><a href="#" title="shop">
            <img src="{{url('/images/image 33.png')}}" >
            </a></li>
            <li><a href="#" title="shop">
            <img src="{{url('/images/image 34.png')}}" >
            </a></li>
            <li><a href="#" title="shop">
            <img src="{{url('/images/image 32.png')}}"  >
            </a></li>           
           
        </ul>
        <ul class="header-social">
        <li style="border: 2px solid yellow; border-radius:5px;">
                <a  href="BYS.html" style="background-color:yellow; color:black; font-size:medium;"><b>Build your site</b></a>
            </li>
        </ul>
        

---------------        
    </nav>

    <nav class="header-nav-wrap">
        <ul class="header-main-nav">
            <li class="current"><a class="smoothscroll" href="#home" title="intro">Item 5</a></li>
            <li><a class="smoothscroll" href="#about" title="our shop">Item 6</a></li>
            <li><a class="smoothscroll" href="#services" title="contact us">Item 7</a></li>
            <li><a class="smoothscroll" href="#services" title="contact us">Item 8</a></li>           
           
        </ul>
        <ul class="header-social">
        <li style="border: 2px solid yellow; border-radius:5px;">
                <a  href="BYS.html" style="background-color:yellow; color:black; font-size:medium;"><b>Build your site</b></a>
            </li>
        </ul>
        

---------------        
    </nav>
    </div>
</section>

<!-- about
================================================== -->


</body>
</html>


