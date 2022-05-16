// console.log("Hello girl");
// let card = document.body.querySelector(".card");

// let cardVerso = '<img src="./asset/image/Pizza 1.jpeg" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">Pinard</h5></div>'
// let cardRecto = '<div class="card" style="width: 12rem;"><h5>Ingredient :</h5><p>Salade, tomate, oignons</p><div class="card-body"><h5>Prix : 12.50</h5></div></div>'

function switchCard(card, cardVerso, cardRecto){

    let contenuCard = '';
    let statusCard = false;

    card.addEventListener('click', function(){
        console.log("clique")
        if(statusCard == false){
            contenuCard= cardRecto;
            card.innerHTML=contenuCard;
            statusCard = true
        }else if(statusCard == true){
            contenuCard = cardVerso;
            card.innerHTML = contenuCard;
            statusCard = false
        }
        
    })
}

// switchCard(card, cardVerso, cardRecto);