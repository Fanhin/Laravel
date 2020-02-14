<!DOCTYPE html>
<html>
 <head>
  <title> Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
    background-color:#BED6FF;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  
   
  </style>
 </head>
 <body >
  <br />
  <br />
  <br />
  <div class="container box" >
   <h3 align="center"><br><b>Send Email in Laravel</b></br></h3><br />
    <div align="center" >
    <?php echo "Time is " .date("H:i:s d-m-Y");
?>  
    </div>



   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif

   <form method="post" action="{{url('sendemail/send')}}"class="" >
    {{ csrf_field() }}

    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>

    <div class="form-group">
     <label>Enter Receiver Name</label>
     <input type="text" name="receiverName" class="form-control" value="" />
    </div>


    <div class="form-group">
     <label>Enter Subject Title</label>
     <input type="text" name="subject" class="form-control" value="" />
    </div>
    
    <div class="form-group">
     <label>Enter Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>

    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>

    <div class="form-group"align="center">
     <br><input  type="submit" name="send" class="btn btn-info" value="Send" /></br>

   
    </div>


    <h2 align="center"><b>FANHIN BUNKLOM 6010110684 sec 02</b></h2><br />
   </form>

   
  


  </div>
 </body>
</html>
