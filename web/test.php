<?php
$json = file_get_contents('data.json');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=27544797-3131-4759-9f4b-54f17c827eb2&lang=ru_RU" type="text/javascript"></script>

    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="result" style="position:fixed;width: 20%; height: 100%;left:0;"></div>
    <div id="map" style="position:fixed;width: 80%; height: 100%;right:0;"></div>
</body>
<script type="text/javascript">
    var pWrap = function(e) {
        return '<p>' + e + '</p>';
    };

    ymaps.ready(function () {
        function $(e) {return document.querySelector(e);}
        var
            cars = JSON.parse('<?= $json ?>').features,
            geoObjects = [],
            resultDiv = $('div.result'),
            writeResult = function(text, append=false) {
                if(!append) {resultDiv.innerHTML = text;} else
                {resultDiv.innerHTML += text;}
            },
            coordinates,
            properties,
            balloonContent,
            pointData,
            pointOption,
            point;

        for(var i = 0, len = cars.length, points = [];i < len;i++) {
            points.push(cars[i].geometry.coordinates);
            coordinates = cars[i].geometry.coordinates;
            properties = cars[i].properties;
            balloonContent = properties.balloonContent;
            pointData = {
                balloonContentHeader: pWrap('Car with ID:' + cars[i].id + ' ' + balloonContent.brand) + pWrap('Litres = ' + balloonContent.litr),
                balloonContentBody: '<p></p>',
                balloonContentFooter: '<font size=1>Information provided by: placemark </font> balloon <strong>',
                clusterCaption: 'placemark <strong>',
                brand: balloonContent.brand,
                autocolumn_id: balloonContent.autocolumn_id,
                spot: balloonContent.spot,
                filial: balloonContent.filial
            };
            pointOption = {
                preset: 'islands#violetIcon'
            };
            point = new ymaps.Placemark(coordinates, pointData, pointOption);
            point.events.add('click', function(e){
                writeResult(pWrap(e.originalEvent.target.geometry.getCoordinates()));
                writeResult(pWrap('Autocolumn = ' + e.originalEvent.target.properties._data.autocolumn_id), true);
            });
            geoObjects[i] = point;
        }

        var myMap = new ymaps.Map('map', {
            center: [55.751574, 37.573856],
            zoom: 11,
            behaviors: ['default', 'scrollZoom']
        }, {
            searchControlProvider: 'yandex#search'
        });

        var c = ymaps.geoQuery(geoObjects).searchInside(myMap);
        myMap.geoObjects.add(c.clusterize());

        var isSingle = function(pointsArray) {

            var currentSpot = 0,
                currentAutocolumn = 0,
                currentFilial = 0,
                elZero = pointsArray[0],
                currentData;

            window.currentStatus = {
                isSingleSpot: true,
                isSingleAutocolumn: true,
                isSingleFilial: true
            };

            for(var i = 0;i<pointsArray.length;i++) {
                currentData = pointsArray[i].properties._data;
                currentSpot = currentData.spot;
                currentAutocolumn = currentData.autocolumn_id;
                currentFilial = currentData.filial;
                window.current = {
                    spot: elZero.properties._data.spot,
                    autocolumn: elZero.properties._data.autocolumn_id,
                    filial: elZero.properties._data.filial
                };

                if (window.currentStatus.isSingleSpot) {window.currentStatus.isSingleSpot = window.current.spot === currentSpot;}
                if (window.currentStatus.isSingleAutocolumn) {window.currentStatus.isSingleAutocolumn = window.current.autocolumn === currentAutocolumn;}
            }
            return window.currentStatus.isSingleSpot ? 'Spot #:' + currentSpot :
                window.currentStatus.isSingleAutocolumn ? 'Autocolumn #:' + currentAutocolumn : false;
        };


        myMap.events.add('boundschange', function(e) {
            window.pointsVisible = ymaps.geoQuery(geoObjects).searchInside(myMap)._objects;
            writeResult(isSingle(window.pointsVisible));
            if (window.pointsVisible.length === 1) {
                carData = window.pointsVisible[0].properties._data;
                writeResult(pWrap(carData.brand), true);
            }
        });
    });
</script>
</html>