function apiCall (){
    

    fetch(`http://127.0.0.1:8000/BDD`)
    .then(response => response.json())
    .then(data => { 
        console.log(data);
        const randomQuote = Math.floor(Math.random()*28);
        document.getElementById("citation").innerHTML=`${data[randomQuote].content}`
        
        
       

})
.catch(err => console.log('Erreur : ' + err));

};

apiCall()