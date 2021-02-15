window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  
window.myWidgetParam.push({id: 11,cityid: '3037854',appid: '5480d49a7f1c8320ddad411236174aaf',units: 'metric',containerid: 'openweathermap-widget-11',  });  
(function() {
    var script = document.createElement('script');
    script.async = true;
    script.charset = "utf-8";
    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
    var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  
})();