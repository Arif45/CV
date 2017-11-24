
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <base target="_self">
  <meta name="description" content="User information form snippet with timezones" />
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/images/cp_ico.png">

  
  <!--stylesheets / link tags loaded here-->



  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  

  

  <style type="text/css">/* CSS used here will be applied after bootstrap.css */</style>

</head>
<body >
  
  
  <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	
        <h3>Personal info</h3>
        
        <form action="store" method="post " class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="firstname" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="company" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Designation:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="designation" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Location:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="location" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">University:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="university" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Sector:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="sector" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Skill:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="skill" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Mobile Number:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="mobile" value="">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="submit">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
  
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <script>
  
  </script>

</body>
</html>
