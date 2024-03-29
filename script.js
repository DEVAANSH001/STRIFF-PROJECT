let products = {
  data: [
    {
      productName: "Banking Management",
      category: "Python",
      keywords: ["system", "users", "transactions", "create", "allows", "check", "deposits", "withdrawals", "application", "simple", "python", "perform", "use", "suitable", "intended", "history", "balances", "view", "purposes", "educational", "project", "accounts", "transaction", "applications", "banking"],
     // price: "30",
      image: "bank.jpg",
      htmlFile: "banking_management_system.html",
    },
    {
      productName: "Sudoko",
      category: "Python",
      keywords: ["row", "9", "without", "1", "sudoku", "regions", "known", "combinatorial", "subgrids", "nine", "9x9", "objective", "also", "3x3", "contain", "puzzle", "blocks", "column", "fill", "digits", "grid", "repetition"],
      //price: "49",
      image: "sudoko.jpg",
      htmlFile: "sudoku_solver.html",
    },
    {
      productName: "Playing Cards",
      category: "Python",
      keywords: ["simple", "compete", "shuffled", "players", "higher", "player", "wins", "drawing", "war", "cards", "deck", "card", "round", "game", "two", "known"],
      //price: "99",
      image: "playing-cards.jpg",
      htmlFile: "card_game.html",
    },
    {
      productName: "Minesweeper",
      category: "Java",
      keywords: ["classic", "minesweeper", "created", "using"],
      //price: "A",
      image: "maxresdefault.jpg",
      htmlFile: "minesweeper.html",
    },
    {
      productName: "Calculator",
      category: "Java",
      keywords: ["java", "using", "creating", "basic", "calculator"],
      //price: "129",
      image: "calculator.png",
      htmlFile: "calculator.html",
    },
    {
      productName: "Snake game",
      category: "Java",
      keywords: ["fruit", "increase", "size", "randomly", "earned", "created", "classic", "board", "snake", "java", "points", "consuming", "time", "nostalgic", "game", "every", "fruits", "using", "consumed", "spawn"],
      //price: "89",
      image: "Snake_OG-logo (1).jpg",
      htmlFile: "snake_game.html",
    },
    {
      productName: "Car rental system",
      category: "C++",
      keywords: ["creating", "rental", "system", "using", "car", "easy", "use"],
      //price: "189",
      image: "rental-car-min.png",
      htmlFile: "car_rental_system.html",
    },
    {
      productName: "Library management system",
      category: "C++",
      keywords: ['using', 'management', 'creating', 'system', 'library'],
      //price: "49",
      image: "library.jpg",
      htmlFile: "library_management_system.html",
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

/*
document.getElementById("search-button").addEventListener("click", () => {
  // Initializations
  let searchInput = document.getElementById("keyword").value.toLowerCase();
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  // Loop through all elements
  elements.forEach((element, index) => {
    // Check if text includes the search value
    if (
      element.innerText.toLowerCase().includes(searchInput) ||
      (elements.classList.contains(searchInput))
    ) {
      // Display matching card
      cards[index].classList.remove("hide");
    } else {
      // Hide others
      cards[index].classList.add("hide");
    }
  });
});*/ 

/*
document.getElementById("search-button").addEventListener("click", () => {
  // Initializations
  let searchInput = document.getElementById("keyword").value.toLowerCase();
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  // Loop through all elements
  elements.forEach((element, index) => {
    // Check if text includes the search value or if the second class includes the search value
    if (
      element.innerText.toLowerCase().includes(searchInput) ||
      element.classList.length > 1 && element.classList[1].toLowerCase().includes(searchInput)
    ) {
      // Display matching card
      cards[index].classList.remove("hide");
    } else {
      // Check if the category includes the search value
      let category = element.closest('.card').classList[1].toLowerCase();
      if (category.includes(searchInput)) {
        cards[index].classList.remove("hide");
      } else {
        // Hide others
        cards[index].classList.add("hide");
      }
    }
  });
});*/


document.getElementById("search-button").addEventListener("click", () => {
  // Initializations
  let searchInput = document.getElementById("keyword").value.toLowerCase();
  let searchTerms = searchInput.split(/\s+/); // Split the search input into an array of terms
  let cards = document.querySelectorAll(".card");

  // Loop through all cards
  cards.forEach((card) => {
    let productName = card.querySelector(".product-name").innerText.toLowerCase();
    let category = card.classList[1].toLowerCase();

    // Check if any term matches either product name or category
    let match = searchTerms.some(term => productName.includes(term) || category.includes(term));

    if (match) {
      // Display matching card
      card.classList.remove("hide");
    } else {
      // Hide others
      card.classList.add("hide");
    }
  });
});

// document.getElementById("search-button").addEventListener("click", () => {
//   // Initializations
//   let searchInput = document.getElementById("keyword").value.toLowerCase();
//   let searchTerms = searchInput.split(/\s+/); // Split the search input into an array of terms
//   let cards = document.querySelectorAll(".card");

  // Loop through all cards
//   cards.forEach((card) => {
//     let productName = card.querySelector(".product-name").innerText.toLowerCase();
//     let category = card.classList[1].toLowerCase();
//     let productData = products.data.find(product => product.productName.toUpperCase() === productName.toUpperCase());
//     let keywords = productData ? productData.keywords.map(keyword => keyword.toLowerCase()) : [];

//     // Check if any term matches category or product name partially
//     let matchCategory = category.includes(searchInput);
//     let matchProductName = productName.includes(searchInput);

//     // If there is no partial match in category or product name, check in keywords
//     if (!matchCategory && !matchProductName) {
//       // Check if any term partially matches in keywords
//       matchCategory = searchTerms.some(term => keywords.some(keyword => keyword.includes(term)));
//     }

//     // Show or hide the card based on the match
//     if (matchCategory || matchProductName) {
//       card.classList.remove("hide");
//     } else {
//       card.classList.add("hide");
//     }
//   });

//   // Clear previous search results
//   if (searchInput.trim() === "") {
//     cards.forEach(card => card.classList.remove("hide"));
//   }

//   // Display no results message
//   let noResultsMessage = document.getElementById("no-results-message");
//   if (cards.length > 0 && document.querySelectorAll(".card:not(.hide)").length === 0) {
//     noResultsMessage.style.display = "block";
//   } else {
//     noResultsMessage.style.display = "none";
//   }
// });
















//Initially display all products
window.onload = () => {
  filterProduct("All");
};
