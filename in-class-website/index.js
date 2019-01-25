// jshint esversion:6

var header = $("#header");
console.log(header);

var listItems = $('.nav-item');
console.log(listItems);

var firstItem = listItems[0];
console.log(firstItem);

console.log($('p')[1]); // second p

var img = $('#main img')[0];
// img.style.borderRadius = '25%';
$('h1').css('font-size', '4rem');
$('img').css('margin', '20px 30px');


var newWindow = window.open("https://www.sait.ca");
// location.href = 'http://www.sait.ca';     // Redirect to sait.ca


// --- History: customized back forward buttons ---
$('body').append('<button class="back-btn"><<</button>', '<button class="forward-btn">>></button>');

$('.back-btn').on('click', function(event) {
  history.back();
});

$('.forward-btn').click(function(event) {
  history.forward();
});

// --- Geolocation ---

// navigator.geolocation.getCurrentPosition(showPosition, showError);

function showPosition(position) {
  $('h1').text(`The latitude of your current location is ${position.coords.latitude.toFixed(1)}, the longitude is ${position.coords.longitude.toFixed(1)}.`);
  console.log(position);
}

function showError(error) {
  console.log(error);
  switch (error.code) {
    case error.PERMISSION_DENIED:
      $('h1').textContent = "User denied the request for Geolocation.";
      break;
    case error.POSITION_UNAVAILABLE:
      $('h1').textContent = "Location information is unavailable.";
      break;
    case error.TIMEOUT:
      $('h1').textContent = "The request to get user location timed out.";
      break;
    case error.UNKNOWN_ERROR:
      $('h1').textContent = "An unknown error occurred.";
      break;
    case 1:
      console.log('error code 1');
      $('h1').text(error.message);
      break;
  }
}

// --- Timer, Animation ---

var intervalTimer = setInterval(showDate, 1000);

function showDate() {
  $('#big-title').text((new Date()).toTimeString());
}

var cat = $('#cat-img')[0];
var animationTimer = setInterval(catWalk, 8000);
var toRight = true;

function catWalk() {
  if (toRight) {
    cat.style.transform = 'scaleX(1)';
    $('#cat-img').animate({
      width: '30%',
      left: document.body.offsetWidth - cat.offsetWidth,
      top: document.body.offsetHeight
    }, 8000);
  } else {
    cat.style.transform = 'scaleX(-1)';
    $('#cat-img').animate({
      width: '10%',
      left: 0,
      top: 0
    }, 8000);
  }
  toRight = !toRight;
}

// --- Storage ---
localStorage.userName = 'DongMing';
