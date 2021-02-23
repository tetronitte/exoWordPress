window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  
window.myWidgetParam.push({
    id: meteoVar[2],
    cityid: meteoVar[1],
    appid: meteoVar[0],
    units: 'metric',
    containerid: 'openweathermap-widget-'+meteoVar[2],
  });  
(function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  
})();