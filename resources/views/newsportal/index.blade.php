@extends('newsportal.master')
<div>
<div>
      @include('newsportal.nav')
</div>
<br>
<br>
<br>
<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="img\s1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="img\s1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="img\s1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="img\s1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="img\s3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="img\s2.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div> 
    <div class="column">
      <img class="demo cursor" src="img\s1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>


<br>


<div class="container">
   <div class="row">  
    <div class='col-md-4 col-sm-6'>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/java.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Java</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="newsportal/detail" class="btn btn-primary">See More..</a>
        </div>
      </div>
  </div>
       
        <div class='col-md-4 col-sm-6'>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/javascript.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Javascript</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">See More..</a>
            </div>
          </div>
        </div>
          
          <div class='col-md-4 col-sm-6'>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/html.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">HTML</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">See More..</a>
              </div>
            </div>
          </div>
        </div> 
  </div>
</div>
<div class="container">
<div class="row"> 
    <div class='col-md-4 col-sm-6'>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/python.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Python</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">See More..</a>
        </div>
      </div>
      
      </div>
      <div class='col-md-4 col-sm-6'>
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/php.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">PHP</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">See More..</a>
          </div>
        </div>
        </div>
        <div class='col-md-4 col-sm-6'>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/css.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">CSS</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">See More..</a>
            </div>
          </div>
          </div>
      </div>
    </div>
   <br/>

   <br/>
   <br/>
   

               
@include('newsportal.footer')






   

                
   
    


        
                



    




