<?php

     $insert=true;

   if(isset($_POST['name'])){
      $server="localhost";
      $username="root";
      $password="";
      
      $con=mysqli_connect($server,$username,$password);
      
      if(!$con)
      {
          die("connection to this data base failed due to ".mysqli_connect_error() );
          echo "not connect to db";
      }
      
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $feedback=$_POST['feedback'];
      
      $sql=" INSERT INTO `website`.`website` (`name`, `email`, `mobile`, `feedback`, `dt`) VALUES ('$name', '$email', '$mobile', '$feedback',current_timestamp());";
      if($con->query($sql) == true){
        //    echo "Successfully inserted";
        $insert=false;
    
        }
        else
        {
            echo "ERROR: $sql <br> $con->error";
        }
        
        $con->close();
    }        

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aakashrrsdce</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <style>
        * {
            margin: 0px auto;
            padding: 0px;
            user-zoom: fixed;
        }
        body{
            max-width: 1500px;
            min-width: fit-content;
            background: #cacadb;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
/*          margin-left: 5%; */
            justify-content: center;
            max-width: 1550px;
            border: 2px solid dodgerblue;
            background: ghostwhite;
        }

        .main {
            background: white;
            height: 350px;
            width: 300px;
            border: 1px solid rgb(16 48 227 / 51%);
            justify-content: space-around;
            margin: 30px 10px;
            overflow: hidden;
        }

        .main:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
            transition: 0.2s;
        }

        /* .nav:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
            transition: 0.2s;
        } */

        .box {
            background: linear-gradient(to right, rgb(16 48 227 / 60%), rgb(34 241 180 / 62%));
            height: 80px;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .box h1 {
               text-shadow: 1px 1px 5px white;
         }
        h1 {
            margin-top: 17px;
        }

        .p {
            text-align: left;
            font-size: 15px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            padding: 10px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            line-height: 20px;
        }

        .read-more {
            background: linear-gradient(to right, rgb(34 241 180), rgb(98 0 255 / 86%));
            height: 15px;
            width: 80%;
            text-align: center;
            padding: 10px;
            /* margin: 30px; */
            /* margin-top: 73px; */
            cursor: pointer;
            color: white;
            display: block;
            margin-left: 20px;
            margin-top: 50px;
            text-decoration: none;
        }

        .heading {
/*          position:fixed; */
            text-align: center;
/*          margin-top: -5px; */
            font-size: 30px;
            background: rgba(3, 3, 179, 0.742);
            margin-top: 1.0rem;
        }

        .nav {
            /* height: 100px; */
            width: 87%;
            background: linear-gradient(to right, rgb(34 111 241), rgb(161 37 142 / 96%));;
            border: 1px solid rgb(0 0 0 / 25%);
            margin-top: 20px;
/*          margin-left: 5%; */
            padding: 10px;
            color: white;
            margin-bottom: 15px;
            /* overflow: hidden; */
        }

        .navbar {
            margin-top: 0px;
        }

        .container-2 {
            margin-top:100px;
            display: flex;
            flex-wrap: wrap;
/*             background: linear-gradient(45deg, rgb(98 0 255 / 86%), transparent); */
            background: linear-gradient(-45deg, rgb(98 0 255 / 47%), transparent);
            /* background-color: gainsboro; */
        }

        /* .link{
            border: 2px solid black;
        } */
        .link {
              margin-top: 45px;
         }
        .li {
            list-style: none;
            margin: 10PX;
            font-size: 25px;
        }

        .li-a {
            text-decoration: none;
            color: gray;
        }

        .li-a:hover {
            color: tomato;
        }

        .web_dev {
            margin-top: 5px;
            text-align: center;
            color: gray;
            font-size: 25px;
        }

        .web_dev:hover {
            color: tomato;
        }

        .gmail {
            margin-top: 5px;
            color: gray;
            font-size: 25px;
        }

        .gmail:hover {
            color: tomato;
        }

        .link-h1 {
            text-align: center;
            margin-top: -1px;
        }

        .link-h1:hover {
            text-decoration: underline;
            text-decoration-color: tomato;
        }

        .aakash-img {
            width: 150px;
            height: 150px;
            margin-left: 30px;
            margin-top: -25px;
            border-radius: 50%;
        }

        .aakash-img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
            transition: 0.2s;
        }

        .copyright {
            text-align: center;
            font-size: 20px;
            margin: 15px;
            padding: 10px;
            background-color: black;
            color: white;
            margin-bottom: 10px;
/*          width: 100%; */
        }

        .heading {
            display: flex;
            flex-wrap: wrap;
        }

        .nav-bar {
            display: flex;
            flex-wrap: wrap;
        }

        .nav-name {
            padding: 5px;
            margin: 5px 10px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 30px;
            text-align: center;
            list-style: none;
            cursor: pointer;
        }

        .nav-a:hover {
            text-decoration: underline;
            text-decoration-color: white;
        }

        .nav-h {
            font-size: 40px;
            margin-top: 17px;
            color: #e6ecff;
            font-family: sans-serif;
        }

        .nav-h:hover {
            transform: scale(1.05);
            /* box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25); */
            transition: 0.2s;
            text-shadow: 1px 1px 10px white;
        }

        .nav-a {
            text-decoration: none;
            color: white;
            font-family: 'Rubik'
        }
        #html{
            margin-top: 30px;
        }
        #css{
            margin-top: 50px;
        }
        #php{
            margin-top: 59px;
        }
        #cplus{
            margin-top: 40px;
        }
        #python{
            margin-top: 41px;
        }
        #java{
            margin-top: 22px;
        }
       @media screen and (max-width:349px) {
        .container{
            display: flex;
            flex-wrap: wrap;  
        }
        .nav-bar{
            display: block;
        }
        
       }
       @media screen and (min-width:1024px) {
        .container{
            display: flex;
            flex-wrap: wrap;  
        }
    }
        .message {
            margin-top: 100px;
            padding: 30px;
            /* display: flex; */
            /* margin-left: 290px; */
            background: linear-gradient(45deg, rgb(98 0 255 / 44%), transparent);
        }

        input {
            padding: 5px 5px;
            margin: 5px 5px;
            background-color: white;
            border: none;
            width: 100%;
        }
        button{
            margin-left: 10px;
            padding: 10px 30px;
            /* background: linear-gradient(blue,tomato); */
            background-color: tomato;
            border: none;
            color: white;
            font-size: large;
            cursor: pointer;
            width: 98.6%;
        }
        .message p{
            background-color: rgba(193, 192, 192, 0.825);
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="heading">
        <h1 class="nav-h">Aakash Kumar</h1>
        <div class="nav-name-container">
            <ul class="nav-bar">
                <li class="nav-name"><a href="http://aakashrrsdce.me/" class="nav-a">Home</a></li>
                <li class="nav-name"><a href="Portfolio.html"  class="nav-a"target="_blank">Portfolio</a></li>
                <li class="nav-name"><a href="notes.html"  class="nav-a"target="_blank">Notes</a></li>
                <li class="nav-name"><a href="Gallery.html"  class="nav-a"target="_blank">Gallery</a></li>
                <li class="nav-name"><a href="contactform.html"  class="nav-a"target="_blank">Contact us</a></li>
                
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="main">
            <div class="box">
                <h1>HTML</h1>
            </div>
            <div class="p">
                HTML is the standard markup language for documents designed to be displayed in a web browser. It can be
                assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as
                JavaScript. HTML. (HyperText Markup Language)
            </div>
            <div><a class="read-more" href="what_is_html.html" id="html">Read more</a></div>
        </div>
        <div class="main">
            <div class="box">
                <h1>CSS</h1>
            </div>
            <div class="p">
                CSS is the acronym for Cascade Styling Sheets. In short, it is a sheet style language, which is a type
                of language you can use to describe the presentation of a markup language in this case, to describe
                the movements of HTML
            </div>
            <div><a class="read-more" href="#" id="css">Read more</a></div>
        </div>
        <div class="main">
            <div class="box">
                <h1>JAVA-SCRIPT</h1>
            </div>
            <div class="p">
                JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of
                the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client
                side for webpage behavior
            </div>
            <div><a class="read-more" href="#" id="javascript">Read more</a></div>
        </div>
        <div class="main">
            <div class="box">
                <h1>PHP</h1>
            </div>
            <div class="p">
                PHP(short for Hypertext PreProcessor) is the most widely used open source and general purpose server
                side scripting language used mainly in web development to create dynamic websites and applications.
                <div><a class="read-more" href="#" id="php">Read more</a></div>
            </div>
        </div>
        <div class="main">
            <div class="box">
                <h1>C</h1>
            </div>
            <div class="p">
                C is a general-purpose computer programming language. It was created in the 1970s by Dennis Ritchie, and
                remains very widely used and influential. By design, C's features cleanly reflect the capabilities of
                the targeted CPUs.
            </div>
            <div><a class="read-more" href="#" id="c">Read more</a></div>
        </div>
        <div class="main">
            <div class="box">
                <h1>C++</h1>
            </div>
            <div class="p">
                C++ is a cross-platform language that can be used to create high-performance applications. C++ was
                developed by Bjarne Stroustrup, as an extension to the C language. C++ gives programmers a high level of
                control over system resources and memory.
                <div><a class="read-more" href="#" id="cplus">Read more</a></div>
            </div>
        </div>
        <div class="main">
            <div class="box">
                <h1>PYTHON</h1>
            </div>
            <div class="p">
                Python is a computer programming language often used to build websites and software, automate tasks, and
                conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety
                of different programs and isn't specialized for any specific problems.
                <div><a class="read-more" href="#" id="python">Read more</a></div>
            </div>
        </div>
        <div class="main">
            <div class="box">
                <h1>JAVA</h1>
            </div>
            <div class="p">
                Java is the official language for Android mobile app development. In fact, the Android operating system
                itself is written in Java. Even though Kotlin has recently become an alternative to using Java for
                Android development, Kotlin still uses the Java Virtual Machine and can interact with Java code.
                <div><a class="read-more" href="#" id="java">Read more</a></div>
            </div>
        </div>


    </div>

    <div class="section5">
            <form action="web.php" method="post">
                <div class="message">
                    <p>Name*<input type="text" name="name" id="name" class="fullname" required></p>
                    <p>Email* <input type="email" name="email" id="email" class="email" required></p>
                    <p>Mobile* <input type="text" name="mobile" id="mobile" class="mobile" required></p>
                    <p>Feedback* <input type="text" name="feedback" id="feedback" class="feedback" required></p>
                <button>SUBMIT</button>
            </form>
        </div>
    <div class="container-2">
        <div class="link">
            <div><img class="aakash-img" src="admin.png" alt="photo"></div>
            <h1 class="link-h1" id="name">Aakash Kumar</h1>
        <div class="web_dev"> Web developer</div>
        </div>
        <div class="link">
            <h1 class="link-h1">HELPFUL LINK</h1>
            <div>
                <ul class="li">
                    <li><a class="li-a" href="http://aakashrrsdce.me/">Home</a></li>
                    <li><a class="li-a" href="#">Course</a></li>
                    <li><a class="li-a" href="#">Privacy Policy</a></li>
                    <li><a class="li-a" href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="link">
            <h1 class="link-h1">GET IN TOUCH</h1>
            <div class="gmail">aakashrrsdce@gmail.com</div>
        </div>
        <div class="link">
            <h1 class="link-h1">CONNECT WITH US</h1>
            <div>
                <ul class="li">
                    <li><a class="li-a" href="https://www.youtube.com/@TechURLOfficial" target="_blank">Youtube</a></li>
                    <li><a class="li-a" href="https://www.instagram.com/er_aakashkumar/" target="_blank">Instagram</a></li>
                    <li><a class="li-a" href="https://www.linkedin.com/in/aakash-kumar-2b8895247/" target="_blank">Linkedin</a></li>
                    <li><a class="li-a" href="#">Facebook</a></li>
                    <li><a class="li-a" href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="nav-2">
        <div class="copyright">
            Copyright &#169 2023           
        </div>
        
    </nav>
</body>

</html>
