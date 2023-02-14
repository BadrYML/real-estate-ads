function searchCards() {
    // Get the search text from the input field
    let searchText = document.getElementById("searchBar").value.toLowerCase();
    
    // Get all the card elements
    let cards = document.getElementsByClassName("card");
    
    // Loop through all the cards
    for (let i = 0; i < cards.length; i++) {
      // Get the card elements
      let card = cards[i];
      let title = card.getElementsByTagName("h3")[0].innerHTML.toLowerCase();
      let description = card.getElementsByTagName("p")[0].innerHTML.toLowerCase();
      let superficie = card.getElementsByTagName("p")[1].innerHTML.toLowerCase();
      let addresse = card.getElementsByTagName("p")[2].innerHTML.toLowerCase();
      let montant = card.getElementsByTagName("p")[3].innerHTML.toLowerCase();
      let dateAnnonce = card.getElementsByTagName("p")[4].innerHTML.toLowerCase();
      let typeAnnonce = card.getElementsByTagName("p")[5].innerHTML.toLowerCase();
      
      // Check if the card's information matches the search text
      if (title.indexOf(searchText) > -1 || description.indexOf(searchText) > -1 || superficie.indexOf(searchText) > -1 || addresse.indexOf(searchText) > -1 || montant.indexOf(searchText) > -1 || dateAnnonce.indexOf(searchText) > -1 || typeAnnonce.indexOf(searchText) > -1) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  }
  
function addCard() {
    var cardContainer = document.querySelector('.cardContainer');
    var card = document.createElement('div');
    card.classList.add('card');

    card.innerHTML = `
      <h3>Title</h3>
      <img src="image.jpg" alt="Image">
      <p>Description</p>
      <p>Superficie: </p>
      <p>Addresse: </p>
      <p>Montant: </p>
      <p>Date Annonce: </p>
      <p>Type Annonce: </p>
    `;
    cardContainer.appendChild(card);
  }
