
$(document).ready(function() {
      fetchCategories();
      fetchProducts();
    /* attach a submit handler to the form */
    $("#registration").submit(function(event) {

    /* stop form from submitting normally */
    event.preventDefault();

    var formData = $(this).serialize(); // Serialize form data

    $.ajax({
            url: "controllers/UserController.php",
            type: "POST",
            data: formData + "&action=add",
            success: function(response) {
                alert(response); // Alert the response from server
                $('#userModal').modal('hide'); // Hide the modal
                $('#registration')[0].reset(); // Reset the form
               
            },
            error: function(err) {
                console.log(err);
            }
    });
   });
});
function fetchCategories(){
    $.ajax({
        url: "controllers/CategoryController.php",
        type: "POST",
        data: "action=read",
        success: function(response) {
            //alert(response);
            $(".categories").html(response);
        },
        error: function(err) {
            console.log(err);
        }
    });
}


function fetchProducts(){
    $.ajax({
        url: "controllers/ProductController.php",
        type: "POST",
        data: "action=read",
        success: function(products) {
           //console.log(products);
           products =JSON.parse(products);
           let data ='';
           for(let i=0;i<products.length;i++){
                // console.log(products[i].id);
                // console.log(products[i].name);
                data +=  '<div class="col-md-3 mb-1">';
                data +=  '<div class="card">';
                data +=  '<img class="card-img-top"';
                data +=  ' src="assets/images/'+products[i].image+'"';
                data +=  ' alt="Card image cap">';
                data +=  '<div class="card-body">';
                data+=' <p class="card-text">';
                data+='<a href="#" class="text-dark">'+products[i].name+'</a></p>';
                data+='<h4 class="pb-0 pt-0"><i class="fa fa-rupee"></i>'+products[i].price+'</h4>';
                data+='</div></div></div>';
           }
          // console.log(data);
        
           $(".products").html(data);
        },
        error: function(err) {
            console.log(err);
        }
    });
}


