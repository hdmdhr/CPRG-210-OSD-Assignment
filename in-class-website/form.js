var myForm = document.myForm; // Select element by HTML name attribute, = document['name']
console.log(myForm);

console.log(myForm['name'].value); // Get the value of an input element
console.log(myForm.name.type); // Get the type of an input

var checkboxList = $('input:checkbox'); // Select all checkboxes

var submitBtn = $('button:submit')[0];
console.log(submitBtn);

// --- Error Messages ---
console.log($('#errorName'));
console.log($('#errorEmail'));


$("form").submit(function(event) {
  event.preventDefault();

  $('#errorName').css('display', 'none');
  $('#errorEmail').css('display', 'none');

  var nameValue = myForm.name.value;
  var emailAddress = myForm.email.value;
  var age = myForm.age.value;

  if (age < 18){
    myForm.age.focus();
    $('#errorAge').css('display', 'block');
    $('#errorAge').css('color', 'red');
  }

  if (!emailAddress) {
    myForm.email.focus();
    $('#errorEmail').css('display', 'block');
    $('#errorEmail').css('color', 'red');
  }

  if (!nameValue) {
    myForm.name.focus();
    $('#errorName').css('display', 'block');
    $('#errorName').css('color', 'red');
  }

});

// $("form").submit(function(event) {  // Add 'submit' event listener to the form
//   event.preventDefault();
//
//   myForm.name.focus();
//   console.log(myForm.name.value);
//   $('input').css('background-color', 'orange');
// });
