

if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(Geo,erreurGeo,{maximunAge : 120000});
}else{

}

function Geo(position){
    var lati = position.coords.latitude;
    var longi = position.coords.longitude;

    document.getElementById('latitude').innerHTML = lati;
    document.getElementById('longitude').innerHTML = longi;

    var map = L.map('map').setView([lati,longi],18);
    //création du calques d'images
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 12,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    //ajout d'un markeur
    var marker = L.marker([lati,longi]).addTo(map);
    //ajout d'un popoup
    marker.bindPopup('<h3>vous êtes là<h3>')
}

function erreurGeo(erreur){
    var msg;
    switch(erreur.code){
        case erreur.TIMEOUT:
            msg = 'Le temps de la requete a expiré';
            break;
        case erreur.UNKNOWN_ERROR:
            msg = 'erreur inconnu';
            break;
        case erreur.POSITION_UNVAILABLE:
            msg = 'erreur technique';
            break;
        case erreur.PERMISSION_DENIED:
            msg = 'géolocalisation refusé';
            break;           
    }

    alert(msg);
}








//note
//watchPosition(); //donne la position a intervale regulier

