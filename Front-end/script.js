function apiCall (){
    

    fetch(`http://127.0.0.1:8000/BDD`)
    .then(response => response.json())
    .then(data => { 

        const randomQuote = Math.floor(Math.random()*data.length);
        const citationElement = document.getElementById("citation");
        const auteurElement = document.getElementById("auteur");

            citationElement.textContent = data[randomQuote].content;
            auteurElement.textContent = data[randomQuote].author;
            
            console.log(randomQuote, data[randomQuote].content, data[randomQuote].author);




    })
        .catch(err => console.log('Erreur lors de l\'appel API:', err));

};

