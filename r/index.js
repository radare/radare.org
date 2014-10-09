(function () {
  'use strict';

  var version = "0.9.8",
    oss = {
      Win: { url: '/get/pkg/radare2-w32-0.9.8git.zip', name: 'for Windows' },
      Mac: { url: '/get/pkg/radare2-0.9.8git.pkg', name: 'for OSX' },
      iPhone: { url: 'http://cydia.radare.org', name: 'Cydia' },
      Android: { url: 'https://play.google.com/store/apps/details?id=org.radare.installer', name: 'Android' }
    };

  document.addEventListener('DOMContentLoaded', function () {
    Object.keys(oss).forEach(function (os) {
      if (navigator.appVersion.indexOf(os) !== -1) {
        var link = document.getElementById("button_download");
        link.innerHTML = "Download " + version + " " + oss[os].name;
        link.setAttribute("href", oss[os].url);
      }
    });
  });

}());
