<?php
$json = file_get_contents('data.json');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=27544797-3131-4759-9f4b-54f17c827eb2&lang=ru_RU" type="text/javascript"></script>

    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/master.css"> -->
</head>
<body>
    <div class="result" style="position:fixed;width: 20%; height: 100%;left:0;">
      <!-- <section id="info-company" class="section-info">
        <div class="main-item-result">
          <div class="logo">
            <div class="burger-logo">
              <img src="img/burger-menu.svg" alt="">
            </div>
            <div class="img-logo">
              <img src="img/logo.svg" alt="">
            </div>
          </div>
          <div id="company-info">
            <span id="title-company">Компания</span>
            <div class="ts-title">
              <span class="ts-img"><img src="img/delivery-truck.svg" alt="#" class="span-img-h3"></span>
              <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
            </div>
            <div id="total" class="item-info">
              <span id="" class="trans-auto">Всего, шт.</span>
              <span id="figure1" class="figures">311</span>
            </div>
            <div class="item-info">
              <p id="on-line" class="trans-auto">На линии, шт.</p>
              <p id="figure2" class="figures">124</p>
            </div>
            <div class="item-info">
              <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
              <p id="figure3" class="figures">3</p>
            </div>
            <div class="item-info">
              <p id="on-to" class="trans-auto">На ТО, шт.</p>
              <p id="figure4" class="figures">4</p>
            </div>
          </div>

            <div id="request" class="">
              <div class="request-title">
                <span class="img"><img src="img/copy.svg" alt="#" class="span-img-h3-2nd"></span>
                <span id="title-request" class="text">Заявки</span>
              </div>
              <div class="item-info">
                <p id="done" class="trans-auto">Выполнено, шт.</p>
                <p id="figure5" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="canseled" class="trans-auto">Отменено, шт.</p>
                <p id="figure6" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="transfered" class="trans-auto">Переданы на СП, шт.</p>
                <p id="figure7" class="figures">3</p>
              </div>
            </div>

          <div id="indicators" class="indicators-class">
            <div class="indicators-title">
              <span class="img"><img src="img/pie.svg" alt="#" class="span-img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">60%</p>
                <div id="circle1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">30%</p>
                <div id="circle2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">90%</p>
                <div id="circle3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">100%</p>
                <div id="circle4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section id="department-info" class="section-info hide ">
        <div class="sidebar">
          <div id="head-filial">
            <div class="logo">
              <div class="burger-logo">
                <img src="img/burger-menu.svg" alt="">
              </div>
              <div class="img-logo">
                <img src="img/logo.svg" alt="">
              </div>
            </div>
            <div class="level-menu">
              <span id="level-menu-company" class="text-level-menu">Компания</span>
              <img src="img/arrow.svg" alt="">
            </div>
            <div class="title-department">
              <!-- <a id="a-back" href="#"><img class="a-back" src="img/back.svg" alt="#"></a> -->
              <span class="title-department-text">Московский филиал</span>
            </div>
            <!-- <h2 id="h2-city" class="h2-city">г. Москва</h2> -->
              <div class="">
                <!-- <span id="title-company">Компания</span> -->
                <div class="ts-title">
                  <span class="ts-img"><img src="img/delivery-truck.svg" alt="#" class="span-img-h3"></span>
                  <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
                </div>
                <div id="total-department" class="item-info">
                  <span id="" class="trans-auto">Всего, шт.</span>
                  <span id="figure-department" class="figures">311</span>
                </div>
                <div class="item-info">
                  <p id="on-line-department" class="trans-auto">На линии, шт.</p>
                  <p id="figure-department" class="figures">124</p>
                </div>
                <div class="item-info">
                  <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
                  <p id="figure-department" class="figures">3</p>
                </div>
                <div class="item-info">
                  <p id="on-to" class="trans-auto">На ТО, шт.</p>
                  <p id="figure-department" class="figures">4</p>
                </div>
              </div>

              <div class="div-transport">
                <hr/ class="hr-trans">
                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="img/car-1.svg" alt="#" class="span-img-h3-filial"></span>
                    <p id="passenger-car" class="p-type-transport">Легковые</p>
                  </div>

                  <p id="quantity-passenger" class="p-quantity">40</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="img/car-2.svg" alt="#" class="span-img-h3-filial"></span>
                    <p id="freight" class="p-type-transport">Грузовые</p>
                  </div>
                  <p id="quantity-freight" class="p-quantity">221</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="img/car-3.svg" alt="#" class="span-img-h3-filial"></span>
                    <p id="bus" class="p-type-transport">Автобусы</p>
                  </div>
                  <p id="quantity-bus" class="p-quantity">20</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="img/car-4.svg" alt="#" class="span-img-h3-filial"></span>
                    <p id="spec" class="p-type-transport">Спецтехника</p>
                  </div>
                  <p id="quantity-spec" class="p-quantity">12</p>

                </div>
                <hr/ class="hr-trans">
              </div>

          </div>

          <div class="">
            <div id="request-department" class="">
              <div class="request-title">
                <span class="img"><img src="img/copy.svg" alt="#" class="span-img-h3-2nd"></span>
                <span id="title-request" class="text">Заявки</span>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Выполнено, шт.</p>
                <p id="done-request-department" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Отменено, шт.</p>
                <p id="canseled-request-department" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Переданы на СП, шт.</p>
                <p id="transfered-request-department" class="figures">3</p>
              </div>
            </div>
          </div>
          <div id="indicators-department" class="indicators-class">
            <div class="indicators-title">
              <span class="img"><img src="img/pie.svg" alt="#" class="span-img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">60%</p>
                <div id="circle1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">30%</p>
                <div id="circle2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">90%</p>
                <div id="circle3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">100%</p>
                <div id="circle4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
          </div>
          <div class="indic-bot">
            <div class="div-meanings div-pr25">
              <p id="lmch-2" class="p-meanings-2nd"><span class="span-figures-2nd">5,1</span> л\мч<br/>ТМЧ</p>
            </div>
            <div class="div-meanings">
              <p id="terminals-2" class="p-meanings-2nd"><span class="span-figures-2nd">110</span><br/>Терминалов</p>
            </div>
          </div>
              <!-- <div id="indicators-2" class="indicators-class">
                <div class="d-flex mb15 mt20 align-items-center">
                <span class="span-h3-2nd"><img src="img/pie.svg" alt="#" class="span-img-h3-3nd"></span>
                <h3 id="h3-indicator-2" class="h3-main-2nd">Показатели компании</h3>
                  </div>
              <div class="">
                <div id="circle1-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="filed-2" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle2-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="processed-2" class="p-bar-text-str">Обработано ПЛ, %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle3-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="dtp-2" class="p-bar-text">ДТП по вине<br/>компании, %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle4-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="mileage-2" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
                </div>
                <br/><br/>
                  </div>
              <div class="">
                <div id="circle5-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="sla-2" class="p-bar-text-str">SLA филиала, %</p>
                </div>
              </div>

              <div class="div-meanings div-pr25">
                <p id="lmch-2" class="p-meanings-2nd"><span class="span-figures-2nd">5,1</span> л\мч<br/>ТМЧ</p>
              </div>
              <div class="div-meanings">
                <p id="terminals-2" class="p-meanings-2nd"><span class="span-figures-2nd">110</span><br/>Терминалов</p>
              </div>
            </div> -->
          </div>


      </section>

      <section id="ts-info" class="section-info">
        <div id="head-filial">
          <div class="logo">
            <div class="burger-logo">
              <img src="img/burger-menu.svg" alt="">
            </div>
            <div class="img-logo">
              <img src="img/logo.svg" alt="">
            </div>
          </div>
          <div class="level-menu">
            <span id="level-menu-company" class="text-level-menu">Компания</span>
            <img src="img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Филиал</span>
            <img src="img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Автоколонна</span>
            <img src="img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Участок</span>
            <img src="img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Транспортное средство</span>
          </div>
          <div class="title-ts">
            <span class="title-ts-text">ТС №93 BMW</span>
          </div>
          <div class="">
            <div id="route" class="">
              <div class="route-title">
                <span class="img"><img src="img/route.svg" alt="#" class="span-img-h3-2nd"></span>
                <span id="title-route" class="text">Маршрут</span>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во пройденного пути, км</p>
                <p id="done-route" class="figures">1300</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во отработанного t, ч.</p>
                <p id="canseled-request-department" class="figures">10</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Объем потреченного топлива, л.</p>
                <p id="transfered-request-department" class="figures">12</p>
              </div>
            </div>
          </div>
          <div id="oil" class="item-distance">
            <div class="plr-img-distance my-auto">
              <img class="img-distance" src="img/fuel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">50 000 км</p>
              <p id="total" class="distance-text">До замены масла</p>
            </div>
            <div id="oilLongbar" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-img-distance my-auto">
              <img class="img-distance" src="img/wheel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">2 000 км</p>
              <p id="total" class="distance-text">До замены шин</p>
            </div>
            <div id="wheelLongbar" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-img-distance my-auto">
              <img class="img-distance" src="img/battery.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">23 000 часа</p>
              <p id="total" class="distance-text">До замены АКБ</p>
            </div>
            <div id="totalLongbar" class="longlar"></div>
          </div>

          <div id="wheel" class="item-distance">
            <div class="plr-img-distance my-auto">
              <img class="img-distance" src="img/key.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">70 000 км</p>
              <p id="total" class="distance-text">До ТО</p>
            </div>
            <div id="repairLongbar" class="longlar"></div>
          </div>
        </div>
      </section>
    </div>
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
                // if(!append) {resultDiv.innerHTML = text;} else
                // {resultDiv.innerHTML += text;}
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
<script src="js/progressbar.min.js"></script>
<script src="js/main.js"></script>
</html>
