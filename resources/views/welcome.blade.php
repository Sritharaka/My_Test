<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>



    </style>

      <script>
       var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }

     </script>

</head>

<body>
    <form name="myForm" action="{{ url('pass') }}" method="post" id="form" >

    {{csrf_field()}}
        <div class="container">
            <h1 class="reg">SIGN UP</h1><br>
         <textarea id="subject" name="subject" cols="102" rows="3" placeholder="   I'm signing becacuse"></textarea>
         <button type="button" class="facebookbtn">Sign with facebook</button>
        <button type="button" class="twitterbtn">Sign with Twitter</button>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name*</label>
                    <input type="text" class="form-control ipt" name="fname" id="fname" >
                     <div id="fname_error" class="val_error"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name*</label>
                    <input type="text" class="form-control ipt" name="lname" id="lname">
                    <div id="lname_error" class="val_error"></div>
                </div>
               </div>

               <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email*</label>
                    <input type="email" class="form-control ipt" name="email" id="email" >
                    <div id="email_error" class="val_error"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Country*</label>
                    <div class="select">


         <select name="country" id="country"  >
        <option selected disabled >Please Select</option>
         <option value="Sri Lanka">Sri Lanka</option>
         <option value="India">India</option>
         <option value="US">US</option>
         </select>
                </div>
                <div id="country_error" class="val_error"></div>
                </div>
            </div>
      <br><button type="submit" class="registerbtn">SIGN NOW</button>
    </form>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>
