document.addEventListener('DOMContentLoaded', function() {
    var leftSide = document.querySelector('.menubar-logo');

    leftSide.style.opacity = '0';
    leftSide.style.transition = 'opacity 4s';

    setTimeout(function() {
      leftSide.style.opacity = '1';
    }, 100);
 });

