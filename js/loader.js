$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 320;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});