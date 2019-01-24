// --- Home & Register Page ---
//   Confirm to sumbit & reset

if ($('title')[0].text === 'Travel Experts' | 'Register') {

  var form = document.registerForm;
  console.log(form);

  form.addEventListener('submit', function(event) {
    event.preventDefault();
    if (confirm('Ready to submit?')) {
      form.submit();
    }
  });

  form.addEventListener('reset', function(event) {
    if (confirm('This will reset all your infomation.')) {
      form.reset();
      event.preventDefault();
      form.name.focus();
    }
  });

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
