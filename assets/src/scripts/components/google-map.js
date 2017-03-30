var googleMap = (function () {
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
	var beirut = {
		position: {lat: 33.8938, lng: 35.5018},
		title: 'Click to go to Beirut',
		text: 'BEIRUT - LEBANON',
		id: 'beirutBtn'
	}
	var cannes = {
		position: {lat: 43.5528, lng: 7.0174},
		title: 'Click to go to Cannes',
		text: 'CANNES - FRANCE',
		id: 'cannesBtn'
	}
	var newyork = {
		position: {lat: 37.0902, lng: 95.7129},
		title: 'Click to go to New York',
		text: 'NEW YORK - USA',
		id: 'newyorkBtn'
	}

	function init() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: beirut.position,
          styles: googleMapStyles
        });
        var marker = new google.maps.Marker({
          position: beirut.position,
          map: map,
          icon: '/assets/images/pin.png',
        });
        var marker = new google.maps.Marker({
          position: cannes.position,
          map: map,
          icon: '/assets/images/pin.png',
        });
        var marker = new google.maps.Marker({
          position: newyork.position,
          map: map,
          icon: '/assets/images/pin.png',
        });
        positionBtns(map);
	}

	function initBeirut() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: beirut.position,
          styles: googleMapStyles
        });
        var marker = new google.maps.Marker({
          position: beirut.position,
          map: map,
          icon: '/assets/images/pin.png',
        });
	}

	function positionBtns(map) {
		var btn1 = document.createElement('div');
        var btn2 = document.createElement('div');
        var btn3 = document.createElement('div');
        new CenterControl(btn1, map, beirut);
        new CenterControl(btn2, map, cannes);
        new CenterControl(btn3, map, newyork);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(btn1);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(btn2);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(btn3);
	}

	function CenterControl(controlDiv, map, area) {
		var controlUI = document.createElement('div');
		controlUI.style.backgroundColor = '#686868';
		controlUI.style.cursor = 'pointer';
		controlUI.style.marginBottom = '15px';
		controlUI.style.marginRight = '15px';
		controlUI.style.marginTop = '15px';
		controlUI.style.textAlign = 'center';
		controlUI.title = area.title;
		controlUI.id = area.id;
		controlDiv.appendChild(controlUI);

		var controlText = document.createElement('div');
		controlText.style.color = '#fff';
		controlText.style.fontFamily = 'Raleway, sans-serif';
		controlText.style.fontSize = '14px';
		controlText.style.lineHeight = '38px';
		controlText.style.paddingLeft = '20px';
		controlText.style.paddingRight = '20px';
		controlText.innerHTML = area.text;
		controlUI.appendChild(controlText);

		controlUI.addEventListener('click', function() {
		  map.setCenter(area.position);
		});
	}

	return {
		init: init,
		initBeirut: initBeirut
	}

})();