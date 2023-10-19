fetch("https://dummyjson.com/products").then((result)=>{
    let myData = result.json();
    return myData;

}).then((full)=>{
    full.length = 30;
    return(full);
}).then((ten)=>{
  
    for(let i = 0;i< ten.length; i++){

 document.querySelector(".shop-content").innerHTML += `
    
    <a href="my_product.php?product_id=${ten.products[i].id}" style="text-decoration:none">
        <div class="product-box">
            <form action="add_cart.php?user_id=${js_var}" method="POST"> 
                <img src="${ten.products[i].images[0]}" alt="Aeroready shirt" class="product-img">
                <h2 class="product-title">${ten.products[i].title}</h2>
                <span class="price"> ${ten.products[i].price}</span>

                <input type="hidden" name="id" value="${ten.products[i].id}">
                <input type="hidden" name="image" value="${ten.products[i].images[0]}">
                <input type="hidden" name="title" value="${ten.products[i].title}">
                <input type="hidden" name="description" value="${ten.products[i].description}">
                <input type="hidden" name="price" value="${ten.products[i].price}">
                <input type="hidden" name="discountpercentage" value="${ten.products[i].discountPercentage}">
                <input type="hidden" name="rating" value="${ten.products[i].rating}">
                <input type="hidden" name="stock" value="${ten.products[i].stock}">
                <input type="hidden" name="brand" value="${ten.products[i].brand}">
                <input type="hidden" name="category" value="${ten.products[i].category}">

                <button type='submit' name="submit">
                    <i class='bx bx-shopping-bag add-cart'></i>
                </button>
            </form>
        </div>
    </a>
    
`;


    }


});

