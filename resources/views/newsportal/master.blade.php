<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS for Dropdown table  --}}
    <style>
            .dropbtn {
              background-color: #66a3ff
;
              color: white;
              padding: 10px;
              font-size: 16px;
              border: none;
            }
            
            .dropdown {
              position: relative;
              display: inline-block;
            }
            
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f1f1f1;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
            .dropdown-content a:hover {background-color: #ddd;}
            
            .dropdown:hover .dropdown-content {display: block;}
            
            .dropdown:hover .dropbtn {background-color:  #66a3ff;}
            </style>

{{--  end CSS for Dropdown table nav button  --}}
<style>
    /* navbar background font size */
.bgc {    
              background-color: #e6f0ff;
              color: white;
              padding: 5px;
              font-size: 10px;
              border: none;
              text-align:;
              a:hover {background-color:  #66a3ff;}

              
            }
/* social logo style */
.scs {
              background-color: #66a3ff;
              color: white;
              padding: 8px;
              font-size: 16px;
              border: none;
              text-align:;
            }




/* for overflow text */
.text {
    display: block;
   
 
    height: 50px;
    margin: 0 auto;
    line-height: 1.2;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}




</style>





</head>
<body>
  
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'summary-ckeditor' );
     
  </script>  
<script >
  function createTextSnippet() {
   //example as before, replace YOUR_TEXTAREA_ID
   var html=CKEDITOR.instances.YOUR_TEXTAREA_ID.getSnapshot();
   var dom=document.createElement("DIV");
   dom.innerHTML=html;
   var plain_text=(dom.textContent || dom.innerText);
  
   //create and set a 128 char snippet to the hidden form field
   var snippet=plain_text.substr(0,127);
   document.getElementById("hidden_snippet").value=snippet;
  
   //return true, ok to submit the form
   return true;
  }
  </script>



  
{{-- slider image script --}}
<script>  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }</script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>