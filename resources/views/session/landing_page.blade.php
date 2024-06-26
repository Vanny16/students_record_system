<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClickNShop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">

</head>
<body>

<!---------------------------------------------------NAVBAR--------------------------------------------------->

<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a class="logo">Click N' Shop Market </a>

    <nav class="navbar">
        <a>Home</a>
        <a href="#about">About</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-bars"></a>
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        <a href="{{ route('login') }}" class="fas fa-user"></a>

    </div>
</header>

<!---------------------------------------------------HOME--------------------------------------------------->

<section class="home" id="home">
    <div class="content">
        <h3>Fresh Fruits N' Vegetables</h3>
        <span>Farm-to-Table Goodness</span>
        <p> Freshness guaranteed! Shop our wide variety of fruits and vegetables for a healthy and delicious addition to any dish. </p>
        <!-- <a href="#products" class="btn">Shop Now</a> -->
    </div>

</section>

<!---------------------------------------------------ABOUT--------------------------------------------------->

 <section class="about" id="about">
    <h1 class="heading"><span> About </span> us</h1>
    <div class="row">
        <div class="video-container">

        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>We make grocery shopping a breeze! Save time by ordering fresh, high-quality ingredients delivered straight to your door. Browse our wide selection of meats, seafood, and more at your convenience. Enjoy secure payment options, and save even more. Shop smarter, not harder, with Click N' Shop Market.</p>
            <p> Click N' Shop Online Market isn't just about convenience, it's about quality you can taste!  We partner directly with local farms and fisheries to bring the freshest fruits, vegetables, meats, and seafood straight to your doorstep.</p>

        </div>
    </div>
 </section>

<!---------------------------------------------------ICONS--------------------------------------------------->

 <section class="icons-container">
    <div class="icons">
        <img src="../assets/img/landing_images/delivery_icon.jpg" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>On orders above P1,500</span>
        </div>
    </div>

    <div class="icons">
        <img src="../assets/img/landing_images/return icon.jpg" alt="">
        <div class="info">
            <h3>4 days return</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="../assets/img/landing_images/quality icon.jpg" alt="">
        <div class="info">
            <h3>Quality Products</h3>
            <span>Quality You Can Trust</span>
        </div>
    </div>

    <div class="icons">
        <img src="../assets/img/landing_images/payment icon.jpg" alt="">
        <div class="info">
            <h3>secure payment</h3>
            <span>Guaranteed Payment Protection</span>
        </div>
    </div>
 </section>


<!---------------------------------------------------REVIEWS--------------------------------------------------->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>I don't usually write reviews, but I had to share my experience! Found the most incredible mangoes here at the ClickNShop market.  They were perfectly ripe, so juicy and sweet, it's like nothing I've ever tasted before.  Definitely worth buying!</p>
            <div class="user">
                <img src="" alt="">
                <div class="user info">
                    <h3>Mang Juan  </h3>

                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    <!----------------------------------------------->

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Been trying to find a good source of organic veggies since moving to the city. Stumbled upon this online market (ClickNShop), their vegetables are amazing! Super fresh, and clean, than anything I get at the supermarket.  Just wish they had a bigger selection of fruits.</p>
            <div class="user">
                <img src="" alt="">
                <div class="user info">
                    <h3>Japhet Cohitmingao</h3>

                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    <!----------------------------------------------->

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class=""></i>
            </div>
            <p> Love the variety of meats available at ClickNShop Market. Always find what I need, and the delivery is super fast. Only downside is the minimum order amount for free shipping.</p>
            <div class="user">
                <img src="" alt="">
                <div class="user info">
                    <h3>Hazel Minguito</h3>

                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
    </section>

<!---------------------------------------------------CONTACT--------------------------------------------------->

<section class="contact" id="contact">

    <h1 class="heading"><span> contact </span> us</h1>

    <div class="row">
        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number" class="box">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="../assets/img/landing_images/Message2.jpg" alt="">
        </div>

    </div>
</section>

<!---------------------------------------------------FOOTER--------------------------------------------------->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php#home">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#review">review</a>
            <a href="index.php#contact">contact</a>
        </div>

        <!-- <div class="box">
            <h3>Products</h3>
            <a href="Fruits.php">Fruits</a>
            <a href="Vegetables.php">Vegetables</a>
            <a href="Meats.php">Meats</a>
            <a href="Seafood.php">Seafood</a>
        </div> -->

        <div class="box">
            <h3>contact info</h3>
            <p>09776157839 / 09165914890</p>
            <p>clicknshop@gmail.com</p>
            <a href="#">Facebook Page</a>
            <a href="#">Instagram Page</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

</section>

</body>
</html>

