<?php
    require('query_kel_lain.php');       
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDF Kelompok Lain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
              /*=========== HERO ============*/

            ul{
                list-style: none;
            }

            a{
                text-decoration: none;
            }

            .main{
                width: 100%;
                height: 100vh;
                background-image: url(img/bg4.jpg);
                background-size: cover;
                background-position: center;
                position: relative;
            }

            /*=========== NAVBAR ===========*/

            nav{
                display: flex;
                font-family: Arial, Helvetica, sans-serif;
                align-items: center;
                justify-content: space-around;
                padding: 10px 30px;
                background-color: white;
                box-shadow: 2px 2px 20px rgba(90,118,253,0.13);
                z-index: 1;
                width: 100%;
            }

            nav ul{
                display: flex;
                margin: 0px;
                padding: 0px;
            }

            nav ul li a{
                height: 40px;
                line-height: 60px;
                margin: 8px;
                padding: 0px 22px;
                font-size: 15px;
                color:black;
                letter-spacing: 1px;
            }

            nav ul li:hover{
                border-bottom: 1px solid #4629ad;
                transition: all ease 0.2s;
            }

            /*=========== LANDING PAGE ============*/

            .home-content{
                display: flex;
                justify-content: space-around;
                align-items: center;
                position: absolute;
                right: 30%;
                top: 40%;
                width: 90%;
            }

            .home-text{
                width: 500px;
                margin: 20px;
            }

            .home-text h1{
                font-size: 30px;
                line-height: 37px;
                color: white;
                margin: 0px;
                letter-spacing: 1px;
            }

            .home-text p{
                font-size: 15px;
                color: beige;
            }

        
        /*======== CARD =========*/
        
            #banner{
                background-color: #dbe5e6;
                padding: 30px 0px;
            }
            
            #banner h3{
                font-weight: 600;
                font-size: 34px;
                padding-bottom: 5px;
                align-items: center;
                text-align: center;
            }
            
            .title{
                text-align: center;
                padding: 25px 0px;
                align-items: center
            }
            
            .title p{
                font-size: 18px;
            }
        
            .container {
                display: flex;
                justify-content: center;
                flex-direction: row;
            }
        
        /*========= FOOTER ==========*/
                footer{
                background-image: url(img/bg2.png);
                height: auto;
                width: 100vw;
                font-family: "Open Sans";
                padding-top: 60px;
                color: #fff;
                margin-top: 50px;
            }

            .footer-content{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }

            .footer-content h4{
                font-size: 1.5rem;
                font-weight: 400;
                text-transform: capitalize;
                line-height: 2rem;
            }

            .footer-content p{
                max-width: 500px;
                margin: 10px auto;
                line-height: 28px;
                font-size: 14px;
            }

            .footer-bottom{
                width: 100vw;
                padding: 20px 0;
                text-align: center;
            }

            .footer-bottom p{
                font-size: 14px;
                word-spacing: 2px;
                text-transform: capitalize;
            }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
     <section class="main">
            <!-- NAVBAR -->
            <nav>
            <!-- MENU -->
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#info">Info</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="rdf.php">RDF</a></li>
                </ul>
            </nav>
            <!-- MAIN CONTENT -->
             <div class="home-content">
            <!-- TEXT -->
            <div class="home-text">
                <h1>Music Makes You Feel Alive</h1>
                    <p>It heals you when you let them in</p>
                    </div>
                </div>
        </section>
    
            <!-- CARD -->
    
     <section id="banner">
        <div class="container">
            <h3>Our favorite Bands</h3>
        </div>
    
        <div class="card" style="width: 18rem;">
            <?php
                $i=0;
                    foreach($subjek as $row){
            ?>
            <img src="<?=$image[$i]?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?=$namaBand[$i]?></h5>
                <p class="card-text"><?=$tanggalBand[$i]?></p>
                <p class="card-text"><?=$memberBand[$i]?></p>
                <p class="card-text"><?=$musicBand[$i]?></p>
            </div>
            <?php
                    $i++; 
                            }
            ?>
        </div>
    </section>

    
 <!-- FOOTER -->
    
      <footer>
            <div class="footer-content">
                <h4>Tugas Besar SW</h4>
                <p> Tugas web ini dibuat dan diajukan untuk memenuhi persyaratan tugas besar dari mata kuliah Semantic Web 2020.</p>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2020 Tubes SW</p>
            </div>
        </footer>
</body>
</html>
