
$(document).ready(function(){
  $(".CourseDetails").click(function(){
   var id = $(this).attr("data-id");
   var html="";
   $.ajax({
    type:'GET',
     url: "http://127.0.0.1:8000/api/detail/"+id,
  success: function(result){
      console.log(result)
      html += `<div class="card text-center"><div class="card-header">${result.Sub_cat}</div>      <div class="card-body">
     <h5 class="card-title">${result.Sub_title}</h5>

</div>
 <div class="card-footer text-muted">
 ${result.updated_at}
 </div></div>`;
   $('#result').html(html);
  }
});

});
});







$(document).ready(function(){
    $("#backbtn").click(function(){
       // alert("AJAX request successfully completed");

     var id = $(this).attr("data-id");
     var html="";
     $.ajax({
      type:'GET',
       url: "http://127.0.0.1:8000/api/detail/"+id,
    success: function(result){
        console.log(result)
        html += `<div class="card text-center"><div class="card-header">${result.Sub_cat}</div>      <div class="card-body">
       <h5 class="card-title">${result.Sub_title}</h5>

  </div>
   <div class="card-footer text-muted">
   ${result.updated_at}
   </div></div>`;
     $('#result').html(html);
    }
  });

  });
  });


















//console.log($.ajax;




// function getDetails(id)
// {
//     alert(id);
//     $(document).ready(function(){
//     $.ajax({
//     type:'GET'
//   url: "http://127.0.0.1:8000/api/detail/",
//   success: function(result){
//    console.log(result);
//   }
// });
// });
// }

