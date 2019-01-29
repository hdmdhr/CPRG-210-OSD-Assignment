<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Travel Experts</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,700,700i,900" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>

    <div class="logo-line">
      <a href="index.html">
        <img src="img/balloon.png" alt="Logo" class="logo">
      </a>
      <h1 class="big-title">WELCOME TO TRAVEL EXPERTS</h1>
    </div>

    <nav class="nav-bar">
      <div class="nav-tab">
        <a href="contact.php" target="_blank"><img src="img/contacts.png" alt="Contact Us">Contact Us</a>
      </div>
      <div class="nav-tab">
        <a href="register.php" target="_blank"><img src="img/register.png" alt="Register Now">Register</a>
      </div>
      <div class="nav-tab">
        <a href="spots.php" target="_blank"><img src="img/chillies.png" alt="hot spots">Famous Spots</a>
      </div>
      <div class="nav-tab">
        <a href="https://tenor.com/search/cute-kitten-gifs" target="_blank"><img src="img/avatar.gif" alt="fun">Fun</a>
      </div>
      <div class="nav-tab">
        <a href="links.php" target="_blank"><img src="img/computer.png" alt="tech">Links Page</a>
      </div>
    </nav>

  </header>

  <div class="gallery">
    <div class="picture-box">
      <img src="img/Australia.jpg" alt="Australia Landscape">
      <p class="caption">Australia Landscape</p>
    </div>
    <div class="picture-box">
      <img src="img/Norway.jpg" alt="Norway Landscape">
      <p class="caption">Norway Forest</p>
    </div>
    <div class="picture-box">
      <p class="caption">Canadian Mountains</p>
      <img src="img/Canada.jpg" alt="Canada Landscape">
    </div>
    <div class="picture-box">
      <p class="caption">Japanese Temple</p>
      <img src="img/Japan.jpg" alt="Canada Landscape">
    </div>
    <div class="picture-box">
      <p class="caption">China Valley</p>
      <img src="img/China.jpg" alt="Canada Landscape">
    </div>
  </div>


  <aside class="side-bar">
    <ul>
      <a href="">
        <li>See Gallery</li>
      </a>
      <a href="">
        <li>Register Now</li>
      </a>
      <a href="">
        <li>Contact Us</li>
      </a>
    </ul>
  </aside>



  <div id="carousel" class="carousel slide hide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0"></li>
      <li data-target="#carousel" data-slide-to="1" class="active"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
      <li data-target="#carousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="img/Australia.jpg" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-inline-block">
          <h5>Australia</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="img/Norway.jpg" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-inline-block">
          <h5>Norway</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/Canada.jpg" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-inline-block">
          <h5>Rocky Mountain</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/Japan.jpg" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-inline-block">
          <h5>Japanese Temple</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/China.jpg" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-inline-block">
          <h5>China ZhangJiaJie</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>



  <article id="form" class="hide" style="display:none;">
    <form action="bouncer.php" name="registerForm">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
          <p class="input-hint-hidden">Your first name and last name.</p>
          <p id="errorName" style="display:none; color:red;">Please enter your full name.</p>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}">
          <p class="input-hint-hidden">Email format: john@example.com</p>
          <p id="errorEmail" style="display:none; color:red;">Please enter your email address.</p>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Gender</label>
          <div class="radio-btns">
            <input type="radio" name="gender" id="male"><label for="male">Male</label>
            <input type="radio" name="gender" id="female"><label for="female">Female</label>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="age">Age</label>
          <input type="number" name="age" id="age" class="form-control" placeholder="Your Age" required>
          <p class="input-hint-hidden">You need to be over 18 to have our services.</p>
          <p id="errorAge" style="display:none; color:red;">You have to be above 18 to have our services.</p>
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="123 Main St">
        <p class="input-hint-hidden">Your current mailing address, include suite number.</p>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" placeholder="Calgary">
          <p class="input-hint-hidden">City you currently live.</p>
        </div>
        <div class="form-group col-md-4">
          <label for="province">Province</label>
          <select id="province" class="form-control">
            <option selected>--Select Province--</option>
            <option>AB</option>
            <option>BC</option>
            <option>ON</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="T3T3T3" pattern="[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d">
          <p class="input-hint-hidden">6 digits zip code without space.</p>
          <p id="errorZip" style="display:none; color:red;">Zip doesn't match the format. eg. T6J0C8.</p>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-3">Prefered Spots</div>
        <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Canada
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck2">
            <label class="form-check-label" for="gridCheck2">
              The US
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck3">
            <label class="form-check-label" for="gridCheck3">
              China
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck4">
            <label class="form-check-label" for="gridCheck4">
              Japan
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="fav-city">Favourite City</label>
        <input id="fav-city" class="form-control" name="favCity" placeholder="City Name" minlength="2">
        <p class="input-hint-hidden">You can use city code. For example: LA, YYC.</p>
      </div>
      <div class="form-group">
        <label for="comment">Your Comment</label>
        <textarea class="form-control" id="comment" placeholder="Please leave your comment here."></textarea>
        <p class="input-hint-hidden">You can ask questions, give your advices, do claims, basically anything you want to say to us.</p>
      </div>
      <div class="form-btns">
        <button type="submit" name="submitBtn" class="form-btn btn btn-primary btn-lg">Submit</button>
        <button type="reset" name="resetBtn" class="form-btn btn btn-primary btn-lg">Reset</button>
      </div>
    </form>
  </article>


  <table id="table" class="table hide" style="display:none;">
    <thead>
      <tr>
        <th colspan="4">Contact List</th>
      </tr>
    </thead>
    <tr>
      <th>Region</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Agent</th>
    </tr>
    <tr>
      <th>Asia</th>
      <td>asia@travel.com</td>
      <td>111000111</td>
      <td>Tanaka</td>
    </tr>
    <tr>
      <th>North America</th>
      <td>namerica@travel.com</td>
      <td>222000222</td>
      <td>Clare</td>
    </tr>
    <tr>
      <th>Europe</th>
      <td>eu@travel.com</td>
      <td>333000333</td>
      <td>Vector</td>
    </tr>
    <tr>
      <th>China</th>
      <td>cn@travel.com</td>
      <td>444000444</td>
      <td>Mei</td>
    </tr>
  </table>



  <hr>
  <footer>
    <p class="copyright">&copy; DongMing Hu 2019</p>
    <p class="company">&reg; Little Bit Everything 2018-2019</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


  <script src="script.js" charset="utf-8"></script>
</body>

</html>