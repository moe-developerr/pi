var googleMap = (function () {
	var map = null;
	var $map = $('#map');
	var googleMapStyles = [
	    {
	        "featureType": "water",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#d3d3d3"
	            }
	        ]
	    },
	    {
	        "featureType": "transit",
	        "stylers": [
	            {
	                "color": "#808080"
	            },
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#b3b3b3"
	            }
	        ]
	    },
	    {
	        "featureType": "road.highway",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#ffffff"
	            }
	        ]
	    },
	    {
	        "featureType": "road.local",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#ffffff"
	            },
	            {
	                "weight": 1.8
	            }
	        ]
	    },
	    {
	        "featureType": "road.local",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#d7d7d7"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#ebebeb"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "geometry",
	        "stylers": [
	            {
	                "color": "#a7a7a7"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#ffffff"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#ffffff"
	            }
	        ]
	    },
	    {
	        "featureType": "landscape",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#efefef"
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "color": "#696969"
	            }
	        ]
	    },
	    {
	        "featureType": "administrative",
	        "elementType": "labels.text.fill",
	        "stylers": [
	            {
	                "visibility": "on"
	            },
	            {
	                "color": "#737373"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "labels.icon",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "poi",
	        "elementType": "labels",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {
	        "featureType": "road.arterial",
	        "elementType": "geometry.stroke",
	        "stylers": [
	            {
	                "color": "#d6d6d6"
	            }
	        ]
	    },
	    {
	        "featureType": "road",
	        "elementType": "labels.icon",
	        "stylers": [
	            {
	                "visibility": "off"
	            }
	        ]
	    },
	    {},
	    {
	        "featureType": "poi",
	        "elementType": "geometry.fill",
	        "stylers": [
	            {
	                "color": "#dadada"
	            }
	        ]
	    }
	];

	function init() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: +$map.attr('data-zoom'),
          center: { lat: +$map.attr('data-lat'), lng: +$map.attr('data-lng') },
          styles: googleMapStyles
        });
	}

	function addButton(area) {
		var btn = document.createElement('div');
        new Btn(btn, map, area);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(btn);
	}

	function addMarker(area) {
		var marker = new google.maps.Marker({
          position: area.position,
          map: map,
          icon: '/assets/images/pin.png',
        });
	}

	function Btn(btn, map, area) {
		var controlUI = document.createElement('div');
		controlUI.style.backgroundColor = '#686868';
		controlUI.style.cursor = 'pointer';
		controlUI.style.marginBottom = '15px';
		controlUI.style.marginRight = '15px';
		controlUI.style.marginTop = '15px';
		controlUI.style.textAlign = 'center';
		controlUI.className = 'googleMapBtn';
		btn.appendChild(controlUI);

		var controlText = document.createElement('div');
		controlText.style.color = '#fff';
		controlText.style.fontFamily = 'Raleway, sans-serif';
		controlText.style.fontSize = '14px';
		controlText.style.lineHeight = '38px';
		controlText.style.paddingLeft = '20px';
		controlText.style.paddingRight = '20px';
		controlText.innerHTML = area.name;
		controlUI.appendChild(controlText);

		controlUI.addEventListener('click', function() {
		  map.setCenter(area.position);
		});
	}

	return {
		init: init,
		addButton: addButton,
		addMarker: addMarker
	};

})();