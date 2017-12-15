var map;
var json;
var markers = [];
$( document ).ready(function() {
    $.get( "/js/shops.json", function( data ) {
        json = data;
        initMap();
    });




});



    function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(50.6665, 3.04498),
        mapTypeId: 'terrain'
    });




        /*

            var geojson = {
                type: "FeatureCollection",
                features: [],
            };

            for (i = 0; i < json.length; i++) {

                geojson.features.push({
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [json[i].lng, json[i].lat]
                    },
                    "properties": {
                        "id": json[i].id,
                        "name": json[i].name,
                        "address": json[i].address,
                        "type": json[i].type,

                    }
                });

            }
        */


    for (var i = 0; i < json.length; i++) {




        /*   var coords = geojson.features[i].geometry.coordinates;

           var latLng = new google.maps.LatLng(coords[1], coords[0]);*/

        var marker= new google.maps.Marker({
            position: {
                lat: json[i].lat,
                lng: json[i].lng
            },
            title: json[i].name,
            map: map,
            icon: {
                path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
                fillColor: 'blue',
                fillOpacity: 0.8,
                scale: 3,
                strokeColor: 'black',
                strokeWeight: 1

            },



        });




        attachSecretMessage(marker, json[i].societe,json[i].id);
        markers.push(marker);


    }
}



function attachSecretMessage(marker, secretMessage,id) {
    var infowindow = new google.maps.InfoWindow({
        content: "<a href=' /shop/" + id + "'>" + secretMessage + "</a>"
    });

    marker.addListener('click', function() {
    window.location.href = '/shop/' + id;

    });

    marker.addListener('mouseover', function() {

        infowindow.open(map, marker);
    });

    marker.addListener('mouseout', function() {

        infowindow.close(map, marker);
    });


}











