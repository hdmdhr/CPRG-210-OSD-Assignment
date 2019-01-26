// --- Forms on Home & Register Pages ---

if (document.querySelector('title').text === 'Travel Experts' || 'Register') {

  var form = document.registerForm;
  console.log(form);

  //   Feature 1: Ask user to confirm after click sumbit & reset

  form.submitBtn.addEventListener('click', function(event) {
    // event.preventDefault();
    if (confirm('Ready to submit?')) {
      if (validateForm(event)){
        console.log('Submit the form.');
        // form.submit();
      }
    }
  });

  form.resetBtn.addEventListener('click', function(event) {
    if (confirm('This will reset all your infomation.')) {
      form.reset();
      event.preventDefault();
      form.name.focus();
    }
  });

  // Feature 2: Focus & blur to show & hide description text

  var allDescriptions = document.querySelectorAll('.input-hint-hidden');

  for (i = 0; i < allDescriptions.length; i++) {

    var description = allDescriptions[i];

    // check if the previous element is text field, if yes, add focus & blur event listener to it

    if (description.previousElementSibling.tagName === 'INPUT' || 'TEXTAREA') {

      var input = description.previousElementSibling;

      input.addEventListener('focus', function(event) {
        this.nextElementSibling.className = "input-hint-show";
      });

      input.addEventListener('blur', function(event) {
        this.nextElementSibling.className = 'input-hint-hidden';
      });

    }

  }

  // Feature 3: Validate the form before submit

  form.addEventListener('submit', validateForm);

  function validateForm(event) {
    // event.preventDefault();
    var isValidated = true;

    var nameValue = form.name.value;
    var emailAddress = form.email.value;
    var age = form.age.value;

    if (age < 18) {
      form.age.focus();
      $('#errorAge').css('display', 'block');
      $('#errorAge').css('color', 'red');
      isValidated = false;
    }

    if (!emailAddress) {
      form.email.focus();
      $('#errorEmail').css('display', 'block');
      $('#errorEmail').css('color', 'red');
      isValidated = false;
    }

    if (!nameValue) {
      form.name.focus();
      $('#errorName').css('display', 'block');
      $('#errorName').css('color', 'red');
      isValidated = false;
    }

    return isValidated;
  }


}

// --- Famous Spots Page ---
//    Insert Image Table
if ($('title')[0].text === 'Famous Spots') {

  console.log('This is Famous Spots page.');

  var spotsTable = {
    image: [
      'img/Australia.jpg',
      'img/Canada.jpg',
      'img/China.jpg',
      'img/Japan.jpg',
      'img/US.jpg'
    ],
    description: [
      'Photo was taken in Australia.',
      'Spectacular Canadian Rocky Mountain.',
      'Landscape of ZhangJiaJie in China.',
      'Japanese temple surronded by maples.',
      'Beautiful sunset in the US.'
    ]
  };

  $('.spots-table').append('<table class="table"><thead><tr><th colspan="2">Hot Spots Photos</th></tr></thead></table>');

  var table = $('.table')[0];

  for (i = 0; i < spotsTable.image.length; i++) {
    // append tr to table, append 2 td to tr
    var img = document.createElement('img');
    img.src = spotsTable.image[i];
    var td1 = document.createElement('td');
    td1.appendChild(img);
    var td2 = document.createElement('td');
    td2.innerHTML = `<p>${spotsTable.description[i]}</p>`;
    var tr = document.createElement('tr');
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.firstChild.style.width = '50%';
    tr.firstChild.nextSibling.style.width = '50%';

    table.appendChild(tr);
  }


}
