<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <!DOCTYPE html>
<html>

   <style>
body{
    margin:0;
    background: #f2f2f2; ;

background-size: 100%;

}
.Nav{
    width: 100%;
    background:white;
    height:80px;

}
.logo img{
    position:relative;
    margin-top: 15px;
    margin-left: 10px;
    float:right;
    padding: 5px;
    margin-top:3px ;
}
ul{
    list-style: none;
    padding:0;
    margin:0;
    position:absolute;

}
ul li{
    float:left;
    margin-top:15px;
}





ul li a{
    width:100px;
    color:black;
    display:block;
    text-decoration: none;
    font-size: 22px;
    text-align: center;
    padding: 15px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
}
a:hover{
    background-color: blue;

}
.Register{
    color:#f2f2f2;
background-color:rgba(0,0,0, 0.5);
margin:0;
padding: 0;
float: right;
margin-right: 50px;
padding-left: 50px;
margin-top: 30px;
margin-bottom: 10px;







}
.slider{
    width: 100%;
    height: 100vh;
    border-radius: 0%;
    background-image:url(c.jpeg);
    background-size: cover;
    margin: 0px auto;
    animation: slide 30s infinite;

}
@keyframes slide{
    25%{
        background-image: url(e.jpg);
    }
    50%{
        background-image: url(a.jpg);
    }
    100%{
        background-image: url(hostel.jpg);
    }

}

   </style>
<body>





<div class="Nav">


    <ul>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="Home.html">Home</a></li>

        <li><a href="students.html">Students</a></li>
        <li><a href="gallary.html">Gallery</a></li>
        <li><a href="Message.html">Message</a></li>
        <li><a href="Contact.html">Contact</a></li>

    </ul>
</div>
<div class="main">
    <div class="Register">

        <h1>Admission Form</h1>
        <form   method="post" action="register.php" >
            <label>Name:</label><br>
            <input type ="text" name="name">
            <br>

            <label>Age:</label><br>
            <input type="number"  name="age" placeholder="Optional">
             <br>

            <label>Phone Number:</label><br>
            <input type ="tel" name="phoneNumber">
            <br>


            <label>Pernament Address:</label><br>
            <input type ="text" name="PernamentAddress">
           <br> <br>

           <button type="submit">submit</button>




        </form>
    </div>
</div>


</div>

<div class="slider">

</div>
<div class="div1"><button><a href="4.jpg">Click To view Room</a></button></div>
<p>4 Seated Room</p>
<p1>Price RS.9500/per month only</p1>


<style>
    .div1 {
      width: 450px;
      height: 250px;
      border: 1px solid rgb(0, 255, 42);
      border-radius: 10px;
      border-width: 10px;
      margin-top: 20px;
      margin-left: 20px;
      background-image: url(41.jpg);
    }
    .div1 button{
        margin-left: 120px;
        margin-top: 220px;
        border-radius: 20px;


    }
    p{
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
    }
    p1{
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    </style>

    <div class="div2"><button><a href="3room.jpg">Click To view Room</a></button></div>
<p3>3 Seated Room</p3>

<p4>Price RS.9999/per month only</p4>
<style>
    .div2 {
      width: 450px;
      height: 250px;
      border: 1px solid rgb(0, 255, 42);
      border-radius: 10px;
      border-width: 10px;
      margin-top: 0px;
      margin-left: 1100px;
      background-image: url(3rm.jpg);
    }
    .div2 button{
        margin-left: 120px;
        margin-top: 220px;
        border-radius: 20px;


    }
    p3{
        margin-left: 1100px;
        font-size: 20px;
        font-weight: bold;
    }
    p4{
        margin-left: 1100px;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    </style>
    <div class="div3"><button><a href="2.jpeg">Click To view Room</a></button></div>
    <p>2 Seated Room</p>
    <p1>Price RS.10500/per month only</p1>






    <style>
        .div3 {
          width: 450px;
          height: 250px;
          border: 1px solid rgb(0, 255, 42);
          border-radius: 10px;
          border-width: 10px;
          margin-top: 20px;
          margin-left: 20px;
          background-image: url(2.jpeg);
          background-color: aqua;
        }
        .div3 button{
            margin-left: 120px;
            margin-top: 220px;
            border-radius: 20px;


        }
        p{
            margin-left: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        p1{
            margin-left: 20px;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }


        </style>


<div class="footer">
    <div class="col-1">
        <script src="https://kit.fontawesome.com/7e33e82502.js" crossorigin="anonymous"></script>
        <h7>USEFUL LINKS</h7><br><br>
        <a href="aboutus.html">About</a><br>
        <a href="Message.html">Message</a><br>
        <a href="Contact.html">Contact</a><br>
        <a href="">Blog</a>
    </div>
    <div class="col-2">
        <h8>NEWSLATER</h8>
        <form>
            <input type="email" placeholder="Your email address"><br>
            <button types="submit">SUBSCRIBE NOW</a></button>

        </form>
    </div>
    <div class="col-3">
        <h8>CONTACT</h8><br><br>
        <p6>Dillibazaar
            Radhe Marg
            Nepal 98431<br>
        Kathmandu</p6>
        <section id="footer" class="py-5">
            <div class="container text-center">
              <a href="https://twitter.com/?lang=en" class="twitter"></a>

              <a href="https://www.facebook.com/SaathiKoGhar" class="facebook"></a>
              <a href="https://www.linkedin.com/" class="linkedin"></a>

            </div>
          </section>
    </div>
    <div class="col-4">
        <p7>DEVELOPER</p7><br>
        <img src="kum.jpg" height="120px" width="115px"><br>
        <p8>KUMAR BK</p8><br>
        <p7>Senior Developer</p7>

        </div>
</div>

<style>

.footer{
    margin-top: 100px;
    width: 70%;
    padding: 100px 15%;
    background: #333;
    color:#efefef;
    display: flex;
}
.footer div{
    text-align: center;
}
.col-2{
  flex-grow: 2;
}
.footer div h7{
    font-weight: 300;
    margin-bottom: 40px;
    margin-left: 0px;    letter-spacing: 1px;
}
.col-1 a{
    display: block;
    text-decoration: none;
    color:#efefef;
    margin-bottom: 4px;
    margin-top: 8px;
    font-size: 15px;
}
.footer form input{
    width: 300px;
    height: 35px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    outline: none;
    border: none;

}
.footer form button{
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 15px;
    cursor: pointer;
}
.social-icons{
    margin-top: 30px;

}
.social-icons i{
    font-size: 20px;
    margin: 10px;
    cursor: pointer;
}
.col-4{
    margin-left: 100px;
}

</style>
<style>
    #footer .twitter {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: 0 0;
    }
    #footer .linkedin {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -78px 0;
    }
    #footer .facebook {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -233px 0;
    }
    #footer .skype {
      background-image: url(http://manstyle.coralixthemes.com/dark/img/dark/icons/footer-icons.png);
      background-repeat: no-repeat;
      background-position: -156px 0;
    }

    #footer a {
      height: 56px;
      width: 56px;
      display: inline-block;
      margin: 10px;
    }
    #footer a:hover {
      transition: all 0.3s ease-out;
      -webkit-transition: all 0.3s ease-out;
    }
    #footer .twitter:hover {
      background-position: 0 -56px;
    }
    #footer .facebook:hover {
      background-position: -233px -56px;
    }
    #footer .skype:hover {
      background-position: -156px -56px;
    }
    #footer .linkedin:hover {
      background-position: -78px -56px;
    }
    #footer .flickr:hover {
      background-position: -310px -56px;
    }
    .bg-dark-1{
      background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);

    }

    </style>



</body>
</html>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">My Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif







                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
