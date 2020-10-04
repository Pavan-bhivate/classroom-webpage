
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> shivaji akola</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a:-webkit-any-link {
    color: #fff;
    cursor: pointer;
    text-decoration: underline
}
    </style>
</head>
<body>
    <section class="sec">
        <header>
            <a href="#"><img src="img/logo1.png" class="logo"></a>
            <ul>
            </ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">subject's</a></li>
            <li><a href="student/create_account.php">student login</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Contact</a></li>
        </header>
        <div class="content">
            <div class="textBox">
                <h1> Wellcome <br>to<br><span>Class</span></h1>
                <p></p>
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAMAABAZuKZUNzBYRzVCR1EwWkdNRk02MFBBODJQM0tMRi4u">Student's Corner</a>
            </div>
            <div class="imgBox">
                <img src="img/pepsi1.png" class="pepsi">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="img/pepsi1.png" height="40px" onclick="imgSlider('img/pepsi1.png');changebgcolor('#0062be')"> </li> 
            <li><a href="student/create_account.php"><img src="img/pepsi2.png" height="40px" width="40px" onclick="imgSlider('img/pepsi2.png');changebgcolor('#e60c2c')"> </a></li> 
            <li><img src="img/pepsi3.png" height="40px" width="70px" onclick="imgSlider('img/pepsi3.png');changebgcolor('#1e1e1e')"> </li> 
        </ul>
        <ul class="sci">
            <li><a href="facebook.com"><img src="img/facebook.png"></a></li>
            <li><a href="twitter.com"><img src="img/twitter.png"></a></li> 
            <li><a href="#"><img src="img/instagram.png"></a></li> 
        </ul>
    </section>
    <script type="text/javascript">
    function imgSlider(anything){
        document.querySelector('.pepsi').src = anything;
    }
    function changebgcolor(color){
        const sec = document.querySelector('.sec');
        sec.style.background = color;
    }
    </script>
</body>
</html>
