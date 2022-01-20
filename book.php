<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حجز</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    
    <!-- header section starts -->

    <header class="header">
        <a href="home.php" class="logo">سافر</a>

        <nav class="navbar">
            <a href="home.php">الرئيسية</a>
            <a href="about.php">عنا</a>
            <a href="package.php">حزمة</a>
            <a href="book.php">حجز</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->


    <div class="heading" style="background: url(images/header-bg-3.png) no-repeat;">
        <h1>أحجز الآن</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

    <h1 class="heading-title">أحجز رحلتك!</h1>

    <form action="book_form.php" method="POST" class="book-form">

    <div class="flex">
        <div class="inputBox">
            <span>الأسم: </span>
            <input type="text" placeholder="أدخل أسمك" name="name" />
        </div>

        <div class="inputBox">
            <span>البريد الإلكتروني: </span>
            <input type="email" placeholder="أدخل بريدك الإلكتروني" name="email" />
        </div>

        <div class="inputBox">
            <span>الهاتف: </span>
            <input type="number" placeholder="أدخل رقم جوالك" name="phone" />
        </div>

        <div class="inputBox">
            <span>العنوان: </span>
            <input type="text" placeholder="أدخل عنوانك " name="address" />
        </div>

        <div class="inputBox">
            <span>إلى أين: </span>
            <input type="text" placeholder="المكان الذي تريد زيارته" name="location" />
        </div>

        <div class="inputBox">
            <span>كم العدد: </span>
            <input type="number" placeholder="عدد اللي يسافرون" name="guests" />
        </div>

        <div class="inputBox">
            <span> مدة البقاء هناك: </span>
            <input type="date" name="arrivals" />
        </div>

        <div class="inputBox">
            <span> المغادرة </span>
            <input type="date" name="leaving" />
        </div>

    </div>
    <input type="submit" value="حجز" class="btn" name="book"/>

    </form>
    </section>











    <!-- footer section starts -->

    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>روابط سريعة</h3>
            <a href="home.php"> <i class="fas fa-angle-left"></i> الرئيسية</a>
            <a href="about.php"> <i class="fas fa-angle-left"></i> عنا</a>
            <a href="package.php"> <i class="fas fa-angle-left"></i> حزمة</a>
            <a href="book.php"> <i class="fas fa-angle-left"></i> الكتاب</a>
            </div>

            <div class="box">
                <h3>روابط إضافية</h3>
            <a href="#"> <i class="fas fa-angle-left"></i> اسئلة و أجوبة</a>
            <a href="#"> <i class="fas fa-angle-left"></i> عنا</a>
            <a href="#"> <i class="fas fa-angle-left"></i> سياسة الخصوصية</a>
            <a href="#"> <i class="fas fa-angle-left"></i> شروط الأستخدام</a>

            </div>

            <div class="box">
                <h3>معلومات التواصل</h3>
            <a href="#"> <i class="fas fa-phone"></i> 966+ 540233555</a>
            <a href="#"> <i class="fas fa-envelope"></i> safr@info.com</a>
            <a href="#"> <i class="fas fa-map"></i> السعودية, الرياض - شارع العليا</a>
            </div>

            <div class="box">
                <h3>تابعنا</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> فيس بوك </a>
                <a href="#"> <i class="fab fa-twitter"></i> تويتر </a>
                <a href="#"> <i class="fab fa-instagram"></i> انستقرام </a>

            </div>

        </div>
        
        <div class="crider">
                صمم من قبل <span>فيصل العنزي</span> | جميع الحقوق محفوظة
            </div>
    </footer>
    <!-- footer section ends -->


<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link --> 
<script src="./js/main.js"></script>

</body>
</html>