<!DOCTYPE html>
<html>
<head>
    <title></title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<button class="pull-right">preview</button> 
<button class="pull-right">Download</button> 
<div class="container">
    <h1 class="well">Enter Your CV Information</h1>
    <div class="col-lg-12 well">
                <div class="row">
                <form action = register.php method = "post">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Name</label>
                                <input type="text" name = "name" class="form-control">
                            </div>
                            
                        </div>


                       <h2>Personal Information </h2>
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <label>Phone</label>
                                <input type="text"  name = "phone"   class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input type="text"  name = "email" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Website</label>
                                <input type="text"  name = "website"  class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Linkedin</label>
                                <input type="text"  name = "linkedin" class="form-control">
                            </div>
                        </div>


         
          <div class="row">
        <div class="col-sm-6 form-group">
           <label>Language</label>
                                
                <input type="text" name="language" class="form-control">
                                    </div>
                            
                                       </div>
                                            </div>



                  
              <h2>Certification</h2>
                        <div class="row">
                        <div class="col-sm-6 form-group">
                               
                                   <div class="container">
                                     <textarea name="experience" class="form-control" rows="8"></textarea>
                                     </div>
                            </div>
                        
                        
                        </div>

                         
            



                        <h2>Professional Experience</h2>
                        <div class="row">
                        <div class="col-sm-6 form-group">
                               
                                   <div class="container">
                                     <textarea name="experience" class="form-control" rows="8"></textarea>
                                     </div>
                            </div>
                        
                        
                        </div>


                        <h2>Additional Skills </h2>
                         <div class="form-group">
                    <label for="exampleTextarea"></label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                     </div>



                         <h2>Education</h2>

                        <div class="row">
                            
                            <div class="col-sm-4 form-group"><br>
                             <label>Institution</label>
                             <input type="text" name="inst" class="form control">
                            </div>

                            <div class="col-sm-4 form-group">
                                <label>From</label>
                                <input type="date"  name = "from"  class="form-control">
                            </div>


                            <div class="col-sm-4 form-group">
                                <label>To</label>
                                <input type="date"  name = "to"  class="form-control">
                            </div>
            

                            </div>
                        
                        
                        </div>
                                
                                            
                            
                        
                    
                    <button type="submit" name = "submit" class="btn btn-lg btn-info">Submit</button>                   
                    </div>
                </form> 
                </div>