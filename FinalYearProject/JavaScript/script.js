let slideIndex = 1;
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
  let i;
  let slides = document.getElementsByClassName("carousel-row");
  let dots = document.getElementsByClassName("dot");
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
}

// JavaScript function to handle displaying a product
function viewProduct() {
    // Get the product ID from the query string
    const params = new URLSearchParams(location.search);
    const productId = params.get("id");

    // Make an HTTP request to get the product details from the server
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `/FinalYearProject/php/product.php?id=${productId}`);
    xhr.onload = () => {
        if (xhr.status === 200) {
            // Parse the response JSON data
            const product = JSON.parse(xhr.response);
            // Display the product data
            document.getElementById("product-name").innerHTML = product.name;
            document.getElementById("product-description").innerHTML = product.description;
            document.getElementById("product-price").innerHTML = product.price;
            document.getElementById("product-image").src = product.image;
        } else {
            console.error(`Error fetching product data: ${xhr.status} ${xhr.statusText}`);
        }
    };
    xhr.send();
}



