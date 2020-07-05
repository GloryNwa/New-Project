(function ($) {
    "use strict"; // Start of use strict

    $(document).ready(function () {

        $(window).trigger("resize");
        init_map();
    });

})(jQuery); // End of use strict


/* ---------------------------------------------
 Google map
 --------------------------------------------- */

var gmMapDiv = $("#map-canvas");

function init_map() {
    (function ($) {

        if (gmMapDiv.length) {

            var gmCenterAddress = gmMapDiv.attr("data-address");
            var gmMarkerAddress = gmMapDiv.attr("data-address");


            gmMapDiv.gmap3({
                action: "init",
                marker: {
                    address: gmMarkerAddress,
                    latLng: [22.952635, 91.282526],
                    options: {
                        icon: "images/map-marker.png"
                    },
                    events: {
                        // add events here
                        click: function (marker, event, data) {
                            infoWindowOpen($this, marker, data)
                        },
                    },
                    // also you can add marker-depending-data to fill info window content
                    data: "hello! i am infowindow!"
                },
                map: {
                    options: {
                        zoom: 14,
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL,

                        },
                        mapTypeControl: false,
                        scaleControl: false,
                        scrollwheel: false,
                        streetViewControl: false,
                        draggable: true,
                        styles: [{
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                                "saturation": 36
                            }, {
                                "color": "#000000"
                            }, {
                                "lightness": 40
                            }]
                        }, {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                                "visibility": "on"
                            }, {
                                "color": "#000000"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 17
                            }, {
                                "weight": 1.2
                            }]
                        }, {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 21
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 17
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 29
                            }, {
                                "weight": 0.2
                            }]
                        }, {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 18
                            }]
                        }, {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 19
                            }]
                        }, {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#000000"
                            }, {
                                "lightness": 17
                            }]
                        }]
                    }
                }
            });


        }
    })(jQuery);
}