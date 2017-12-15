var map;
var json;
var markers = [];
var iconeFerme;
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
            icon:
            { url: 'img/farm.png',

                /*strokeColor: 'black'*/


                 /*fillColor: 'blue',
                 fillOpacity: 0.8,
scale: 3 ,

                 strokeWeight: 1*/


            }

        });





        attachSecretMessage(marker, json[i].societe,json[i].id);
        markers.push(marker);


    }
}



function attachSecretMessage(marker, secretMessage,id) {
    var infowindow = new google.maps.InfoWindow({
        content:
    '<div class="card horizontal" id="contentMap">' +
        '<div class="card-image">' +
        '<img src="https://lorempixel.com/100/190/nature/6">'+
        '</div>' +
        '<div class="card-stacked">' +
        '<div class="card-content">' +
        '<p>' + secretMessage + '</p>' +
    '</div>' +

    '</div>' +
    '</div>'

    });

    marker.addListener('click', function() {
    window.location.href = '/shop/' + id;

    });

    marker.addListener('mouseover', function() {

        infowindow.open(map, marker);
        var iwOuter = $('.gm-style-iw');
        var iwCloseBtn = iwOuter.next();
        iwCloseBtn.css({
            opacity: '0', // by default the close button has an opacity of 0.7

        });

        /* The DIV we want to change is above the .gm-style-iw DIV.
         * So, we use jQuery and create a iwBackground variable,
         * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
         */
        var iwBackground = iwOuter.prev();


        iwBackground.children(':nth-child(2)').css({'display' : 'none'});


        iwBackground.children(':nth-child(4)').css({'display' : 'none'});
    });







    marker.addListener('mouseout', function() {

        infowindow.close(map, marker);
    });




}












