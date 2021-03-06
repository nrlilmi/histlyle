<!DOCTYPE html>
<html>
<head>
  <title>Detail Produk</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="histyle.css" rel="stylesheet" type="text/css">
  <script src="bootstrap/js/jquery.min.js">
  </script>
  <script src="bootstrap/js/bootstrap.min.js">
  </script>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; border-color: white">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="Home.php" title="HiStyle"><img alt="HiStyle" src="img/HiStyle.png" style="width:250px; height:80px"></a>
      </div>
      <ul class="nav navbar-nav" style="padding-top: 40px; margin-left: 200px">
        <li>
          <a href="signup.php" title="Sign Up"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
        </li>
        <li>
          <a data-toggle="modal" href="#myModal" title="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
      </ul>
      <form action="/action_page.php" class="navbar-form navbar-right">
        <div class="input-group" style="padding-top: 40px">
          <input class="form-control" name="search" placeholder="Search" type="text">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <hr class="container" style="border-color: lightgrey">
    </nav></div>
    <div class="container" style= "margin-top: 10%">
      <div class="col-sm-12">
            <div class="col-sm-2">
      <div class="list-group">
          <p><strong>Brand</strong></p>
          <hr style="border-color: black; margin-top: -8px; margin-bottom: 0px">
          <a href="#" class="list-group-item">Dannis</a>
  <a href="#" class="list-group-item">Elzatta</a>
  <a href="#" class="list-group-item">Esme</a>
  <a href="#" class="list-group-item">Lunan Go</a>
  <a href="#" class="list-group-item">Rabbani</a>
  <a href="#" class="list-group-item active">Tuneeca</a>
  <a href="#" class="list-group-item">Zoya</a>
        </div>
        <div class="list-group">
          <p><strong>Product</strong></p>
          <hr style="border-color: black; margin-top: -8px; margin-bottom: 0px">
          <a href="#" class="list-group-item">Gamis</a>
  <a href="#" class="list-group-item">Bergo</a>
  <a href="#" class="list-group-item active">Gamis</a>
  <a href="#" class="list-group-item">Khimar</a>
  <a href="#" class="list-group-item">Mukenah</a>
  <a href="#" class="list-group-item">Scarf</a>
        </div>
      </div>
          <div class="col-sm-6 text-center">
          <img title="A Future Planner - Tuneeca" src="img/A Future Planner bgg.jpg" width="100%" height="100%">
</div>
        <div class="col-sm-4">
          <h3><strong>A Future Planner</strong></h3>
          <p>by <span><img src="img/tun.png" width="40%" height="20%"></span></p>
          <br>
          <h5><strong>Product Detail</strong></h5>
          <hr style="margin-top: -5px">
          <label><strong>Fabric</strong></label>
          <p style="line-height: 25px; margin-top: -5px">
            Tosca Blue  : dobby rayon. <br>
            Brown       : polycotton. <br>
            Plaid Denim : cotton.</p>
          <br>
          <label><strong>Price</strong></label>
          <p style="line-height: 25px; margin-top: -5px; font-size: 20px">
            Rp765.000</p>
            <br>
            <div class="col-md-4" style="margin-left: -15px">
            <label><strong>Size</strong></label>
              <div class="form-group">
                <input class="form-control" name="size" style="width: 100%" readonly value="S">
        </div>
      </div>
          <div class="col-sm-3">
          <label><strong>Stock</strong></label>
              <div class="form-group">
                <input class="form-control" style="width: 100%; text-align: center;" type="text" name="stok" value="5" readonly="">  
        </div>
        </div>
        <div class="col-sm-4" style="width: 30%">
          <label><strong>Quatity</strong></label>
              <div class="form-group">
                <input type="number" class="form-control" style="width: 100%;" name="qty" placeholder="Qty" min="1" max="5" readonly="">
        </div>
        </div>
      </div>
      <div class="text-center">
      <button href="#" class="btn add" style="margin-top: 15px" title="Add to Cart" disabled=""><img src="img/glyphicons-209-cart-in.png"></button><br>
      <button href="#" class="btn btn-default" style="margin-top: 15px" title="Add to Wishlist" disabled=""><span class="glyphicon glyphicon-plus"></span> Add to <span class="glyphicon glyphicon-heart"></span></button><br>
      <button href="#" class="btn btn-default" style="margin-top: 15px" title="Buy Now" disabled=""> Buy Now <span class="glyphicon glyphicon-shopping-cart"></span></button>
    </div><br><br>
    <p>Please<a data-toggle="modal" href="#myModal" title="Login"> Login</a> and enjoy more feature.</p>
    <p>Out of Product?<a href="https://api.whatsapp.com/send?phone=6285230540054"> Click Me</a> for PO.</p>
</div>
</div>
<br><br>
    <footer>
      <nav class="navbar-default">
        <div class="panel-footer">
          <div class="container">
            <div class="row test">
              <div class="col-md-12">
                <div class="col-md-4">
                  <h4><strong>Customer Care</strong></h4>
                  <p>Monday - Friday on 9AM - 6PM</p>
                  <p><span class="glyphicon glyphicon-map-marker"></span> Muncar, Banyuwangi, Jawa Timur 68472</p>
                  <p><span class="glyphicon glyphicon-phone"></span> Phone: +6285230540054</p>
                  <p><span class="glyphicon glyphicon-envelope"></span> Email: histyle@gmail.com</p>
                  <p>2018 © Histyle. ALL Rights Reserved.</p>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <h4><strong>Payment Option</strong></h4>
                    <ul class="nav navbar-nav" style="width:90%">
                      <li><img src="img/bca.png" style="width: 80px; height: 25px; margin-top: 10px"></li>
                      <li><img src="img/bri.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                      <li><img src="img/bni.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 10px"></li>
                      <li><img src="img/mandiri.png" style="width: 80px; height: 25px; margin-top: 20px"></li>
                      <li><img src="img/btn.png" style="width: 100px; height: 25px; margin-left: 20px; margin-top: 20px;"></li>
                      <li><img src="img/jatim.png" style="width: 80px; height: 25px; margin-left: 20px; margin-top: 20px"></li>
                    </ul>
                  </div><br>
                  <div class="row">
                    <h4 style="display: inline-block;"><strong>Shipment Option</strong></h4>
                    <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                      <li><img src="img/jne.png" style="width: 30px; height: 30px; margin-right: 10px"></li>
                      <li><img src="img/j&t.png" style="width: 35px; height: 15px; margin-right: 10px"></li>
                      <li><img src="img/pos.png" style="width: 25px; height: 25px; margin-right: 10px"></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4">
                  <h4><strong>Information</strong></h4>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="aboutus.php" style="padding-left: 0px; padding-top: 0px; padding-bottom: 0px">
                      <p>About Us</p></a>
                    </li>
                    <li>
                      <a href="contactus.php" style="padding-top: 0px; padding-bottom: 0px">
                      <p>Contact Us</p></a>
                    </li>
                    <li>
                      <a href="why.php" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Why Must Us?</p></a>
                  </li>
                </ul>
              </div>
                <div class="col-md-4">
                <h4><strong>Make Us Better</strong></h4>
                <ul class="nav navbar-nav">
                  <li>
                    <a href="mailto:histyle@gmail.com?subject=Suggestion%20&body=Send%20Me%20Your Suggest" style="padding-left:0px; padding-top: 0px; padding-bottom: 0px">
                    <p>Suggestion</p></a>
                  </li>
                  <li>
                    <a href="mailto:histyle@gmail.com?subject=Critic%20&body=Send%20Me%20EYour Critic" style="padding-top: 0px; padding-bottom: 0px">
                    <p>Critic</p></a>
                  </li>
                </ul>
              </div>
                <h4 style="display: inline-block; margin-left: 15px"><strong>Find Us On</strong></h4>
                <ul class="list-inline list-unstyled" style="display: inline; padding-left: 15px">
                  <li>
                    <a href="https://www.facebook.com/HiStyle" title="Facebook"><img src="img/fb.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com/HiStyle" title="Twitter"><img src="img/tw.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/HiStyle" title="Instagram"><img src="img/ig.png" style="width: 24px; height: 24px; margin-right: 10px"></a>
                  </li>
                  <li>
                    <a href="https://www.line.com/HiStyle" title="Line"><img src="img/line.png" style="width: 48px; height: 20px; margin-right: 10px"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </footer>
  </nav><!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" type="button">&times;</button>
          <h3 style="color:black;">Login</h3>
        </div>
        <div class="modal-body">
          <form role="form" action="dataLogin.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-user"></span> E-mail</label> <input class="form-control" name="email" placeholder="Email" type="email">
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-lock"></span> Password</label> <input class="form-control" name="password" placeholder="Password" type="password">
            </div>
            <button class="btn btn-default btn-success btn-block" type="submit" name="login">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="signup.php">Sign Up</a></p>
          <p>Forgot <a href="forgot.php">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>