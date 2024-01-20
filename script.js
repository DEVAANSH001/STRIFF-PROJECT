let products = {
  data: [
    {
      productName: "Banking Management",
      category: "Python",
     // price: "30",
      image: "bank.jpg",
      htmlFile: "topics-detail.html",
    },
    {
      productName: "Sudoko",
      category: "Python",
      //price: "49",
      image: "sudoko.jpg",
      htmlFile: "topics-detail copy.html",
    },
    {
      productName: "Playing Cards",
      category: "Java",
      //price: "99",
      image: "playing-cards.jpg",
    },
    {
      productName: "A",
      category: "A",
      //price: "A",
      image: "playing-cards.jpg",
    },
    {
      productName: "B",
      category: "B",
      //price: "129",
      image: "playing-cards.jpg",
    },
    {
      productName: "C",
      category: "C",
      //price: "89",
      image: "playing-cards.jpg",
    },
    {
      productName: "Playing Cards",
      category: "C++",
      //price: "189",
      image: "playing-cards.jpg",
    },
    {
      productName: "Playing Cards",
      category: "C++",
      //price: "49",
      image: "playing-cards.jpg",
    },
  ],
};

for (let i of products.data) {                        //Create Card
  let card = document.createElement("div");          //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");   //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");    //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);                    //container
  let container = document.createElement("div");
  container.classList.add("container");               //product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);  
  // Added an eventListener
  card.addEventListener("click", () => {
    // Redirect to the specified HTML file
    window.location.href = i.htmlFile; 
                      });                    //price
  /*let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);*/

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active-button");
    } else {
      button.classList.remove("active-button");
    }
  });

  //select all cards
  let elements = document.querySelectorAll(".card"); //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "All") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
/*document.getElementById("search-button").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("keyword").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value\
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});*/

document.getElementById("search-button").addEventListener("click", () => {
  // Initializations
  let searchInput = document.getElementById("keyword").value.toLowerCase();
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  // Loop through all elements
  elements.forEach((element, index) => {
    // Check if text includes the search value
    if (
      (element.innerText.toLowerCase().includes(searchInput) ||
      cards[index].classList.contains(searchInput))
    ) {
      // Display matching card
      cards[index].classList.remove("hide");
    } else {
      // Hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("All");
};
