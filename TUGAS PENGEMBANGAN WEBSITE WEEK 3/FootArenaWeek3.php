<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foot Arena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: darkgreen;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 2.2, 1.1, 0.1);
        }
        .services {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .service {
            width: 30%;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .popup{
            width: 100%;
            height: 100%;
            background-color:rgba(0, 2.2, 1.1, 0.1);
            position: fixed;
            top: 0;
            left: 0;

            opacity: 0;
            visibility: hidden;
        }
        .popup__content{
            width: 50%;
            background-color:rgb(14, 113, 194);
            box-shadow: rgba(52, 54, 52, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        .popup__header{
            text-align: center;
            text-transform: uppercase;
            color: #130a0a;
            margin-bottom: 20px;
        }
       
       }
       
        
        #popup:target {
            opacity: 1;
            visibility: visible;}
        #popup:target .popup__content {
            opacity: 1;
        }
        

    </style>
</head>
<body>
    <header>
        <h1>Welcome to Foot Arena!</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        
        <div class="services">
            <div class="service">
                <h3>Field Booking</h3>
                <p>Book our mini soccer field for your team and enjoy a great game.</p>
                <a href="#popup" class="btn">Click here</a>
            </div>
            <div class="service">
                <h3>Training Sessions</h3>
                <p>Join our training sessions to improve your skills and techniques.</p>
            </div>
            <div class="service">
                <h3>Events</h3>
                <p>Host your soccer events and tournaments on our field.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Mini Soccer Field. All rights reserved.</p>
    </footer>
  
    <div class="popup" id="popup">
        <div class="popup__content">
        <div class="popup__header">Nama Anggota Kelompok</div>
        <div class="popup__text">
            <p>Vickram Eka Faza - 2311103079</p>
            <p>Michael Atia Mauliate Hutagalung - 2311103114</p>
            <p>Gohan Willy Christopher Sihite - 2311103131</p>
            <p>Ardianta Mumtaz - 2311103049</p>
        </div>
    </div></div>
</body>
</html>
