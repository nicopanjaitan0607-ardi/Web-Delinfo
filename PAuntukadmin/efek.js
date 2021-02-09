$(document).ready(function(){
  $('.modal-trigger').leanModal();
});


(function () {
  var span = document.createElement('span'),
      message = document.getElementById('message');

  span.className = 'fa';
  span.style.display = 'none';
  document.body.insertBefore(span, document.body.firstChild);

  function css(element, property) {
    return window.getComputedStyle(element, null).getPropertyValue(property);
  }

  if (css(span, 'font-family') === 'FontAwesome') {
    message.innerHTML += 'Yay, Font Awesome loaded!';
  } else {
    message.innerHTML += 'Oops, Font Awesome didn\'t load!';
  }
  document.body.removeChild(span);
})();