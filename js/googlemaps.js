$(document).ready(function() {

    if ($('#map').length) {
        var styles = [{
            featureType: "administrative",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "landscape",
            elementType: "all",
            stylers: [{
                color: '#aaaaaa'
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "road",
            elementType: "all",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -30
            }]
        }, {
            featureType: "transit",
            elementType: "all",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "all",
            stylers: [{
                color: '#cccccc'
            }]
        }];
        var map;
        var mapOptions = {
            center: new google.maps.LatLng(4.17528, 73.50889),
            zoom: 3,
            scrollwheel: false,
            panControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            disableDefaultUI: false,
            zoomControl: false,
            styles: styles
        };

        function initMap() {
            "use strict";
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var bounds = new google.maps.LatLngBounds();
            var myIcon = new google.maps.MarkerImage("images/icons/location-pin-3.png", null, null, null, new google.maps.Size(24, 24));
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(4.17528, 73.50889),
                map: map,
                title: 'Safarihub',
                icon: myIcon
            });
        }

        initMap();
        google.maps.event.addDomListener(window, 'load', initMap);
    }
});