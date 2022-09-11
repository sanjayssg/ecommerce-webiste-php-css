
function getProducts(value){
$.post("product.php",{partialProduct:value},function(data)
$("#results").html(data);
});
}
