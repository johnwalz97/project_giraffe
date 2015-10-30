<?php $this->load->view('partials/customers', ['title' => 'Store']) ?>
<style> 
body {
    /*background-image: url("assets/pics/motorcycle04.jpg");*/
    background-color: black;
    color: #fff;
}

img{
  border: 3px solid #fff;
  opacity: 0.7;
  -webkit-transition: -webkit-transform .15s linear;
  -webkit-box-shadow: 0 3px 6px rgba(0,0,0,.25);
  -moz-box-shadow: 0 3px 6px rgba(0,0,0,.25);
}


img:hover{
  border: 3px solid #fff;
  opacity: 1;
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  position: relative;
  z-index: 5;
}

#intro { 
    background: url(/assets/pics/motorcycle07.jpg) 50% 0 fixed;
    -webkit-filter: brightness(300%);
    height: auto;  
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 50px 10px;
}
#home { 
    background: url(/assets/pics/motorcycle04.jpg) 50% 0 fixed; 
    margin: 0 auto;
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 50px 10px;
}
#footer { 
    background: url(/assets/pics/helmet01.jpg) 50% 0 fixed; 
    height: auto;
    margin: 0 auto; 
    width: 100%; 
    position: relative; 
    box-shadow: 0 0 50px rgba(0,0,0,0.8);
    padding: 100px 0;

}

.foot p{
    color: #337ab7;
    width: auto;
    font-size: 1.5em;
    background: black 0.5;
}

.foot:hover{
    color: #337ab7;
    width: auto;
    background: white;
    -webkit-transform: translate(360deg);
    transform: translate(360deg);
}

.foot {
  width: auto;
  background: black;
  padding: 5px;
  opacity: 0.7;
  text-align: center;
  -webkit-transition: background-color 2s, -webkit-transform 2s;
  transition: background-color 2s, transform 2s;
}

.quote:hover{
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg);
}

.quote p {
  font-size: 2em;
  width: auto;
  background: black 0.5;
  color:#fff;
}

.quote {
  background: black;
  opacity: 0.7;

  -webkit-transition: width .2s, height .2s, background-color .2s, -webkit-transform .2s;
  transition: width .2s, height .2s, background-color .2s, transform .2s;
}
figure {
  display: inline-block;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
   // cache the window object
   $window = $(window);
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);      
      $(window).scroll(function() {
        // negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
        // background position
        var coords = '50% '+ yPos + 'px';
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
</script>
<script type="text/javascript">
  TweenMax.to(".foot", 2, {left:600});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script> <!-- gsap -->
<body>
  <!-- Section 1 -->
  <section id="intro" data-speed="6" data-type="background">
    <div class="row">
      <div class="quote col-md-8 col-md-offset-2">
          <p><i class="fa fa-quote-left fa-3x"></i> A biker was riding down the street and on the back of his shirt it said, "If you can read this than my mrs has fallen off!" <i class="fa fa-quote-right fa-3x"></i></p>
      </div>
    </div>
  </section>
  <!-- Section 2 -->
  <section id="home" data-speed="4" data-type="background">
    <div class="row">
        <div class="container col-md-2">
             <div class="btn-group-vertical">
                <h5><b>View by Category:</b></h5>
                <a href="/mains/productsInCategory/1" class="btn btn-primary" role="button">Sport</a>
                <a href="/mains/productsInCategory/2" class="btn btn-primary" role="button">Dirt Bike</a>
                <a href="/mains/productsInCategory/3" class="btn btn-primary" role="button">Cross Country</a>
                <a href="/mains/productsInCategory/4" class="btn btn-primary" role="button">Electric</a>
                <a href="/mains/productsInCategory/5" class="btn btn-primary" role="button">Cruiser</a>
             </div>  
        </div>
        <div class="col-md-10">
          <h1>All Products</h1> 
          <?php foreach($products as $product){ ?>
            <figure>
              <a href="/mains/oneProduct/<?= $product['id']?>"><img width="200px" height="200px" src="/assets/pics/img (<?=$product['picture_link']?>).jpg" data-toggle="tooltip" title="View"></a><figcaption><?= $product['name'] ?></figcaption>
            </figure>
          <?php } ?>
        </div>
    </div>
  </section>
  <!-- Section 3 -->
  <section id="footer" data-speed="2" data-type="background">
      <div class="container">
          <footer class="foot">
            <p>Contact Information:</p>
            <p>Email: <a href="mailto:someone@example.com">info@ajconceptz.com</a>.</p>
            <p>Phone: 206-206-2062</p>
            <p>Address: 12345 Main St., Bellevue, WA 54321</p>
            <p>Designed by AJ Conceptz &copy; 2015. All rights reserved.</p>
          </footer> 
      </div>
  </section>

</body>
</html>