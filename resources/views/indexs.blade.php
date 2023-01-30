<!DOCTYPE html>
<html>

<head lang="ar">
    <meta charset="UTF-8">
    <title>لوحة التحكم | الصفحة الرئيسية</title>
    <link rel="stylesheet" href="/dash/css/main.css">
    <link rel="stylesheet" href="/dash/css/home.css">
    <link rel="stylesheet" href="/dash/responsive/responsive-main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

</head>

<body>

 

    <div class="container">
        <!-- Nav Bar -->
        <nav>
            <!-- Logo -->
            <div class="logo">
                <img src="/dash/img/logo.png" alt="logo">
            </div>
            <!-- End Logo -->
            <!-- ul -->
            <ul>
                <li><a class="activ" href="./indexs">الصفحة الرئيسية</a></li>
                <li><a href="./accounts.html">أسماء المراكز / المراكز المعتمدة</a></li>
                <li><a href="./account_statement.html">كشف حساب</a></li>
                <li><a href="./cut_coins.html">قص العملات</a></li>
                <li><a href="./transformation.html">التحويل من مركز الي مركز</a></li>
                <li><a href="">الاعتمادات</a></li>
                <li><a href="./login.html">تسجيل الخروج</a></li>
            </ul>
            <!-- end ul -->
            <span class="menu"><i class="fa-solid fa-bars"></i></span>
        </nav>
        
        <!-- End Nav Bar -->

        <div class="content">
                <h3>فتح حساب جديد</h3>
                <form>
                    <div class="form-info">

                        <div class="input-info">
                            <lable for="">اسم المستخدم</lable>
                            <input type="text" class="inputText" id="username" >
                        </div>

                        <div class="input-info">
                            <lable for="">رقم الصندوق</lable>
                            <input type="number" class="inputText" id="boxnumber" >
                        </div>

                        <div class="input-info">
                            <lable for="">اسم المكتب</lable>
                            <input type="text" class="inputText" id="nameoffice" >
                        </div>

                        <div class="input-info">
                            <lable for="">صاحب المكتب</lable>
                            <input type="text" class="inputText" id="p-nameoffice" >
                        </div>

                        <div class="input-info">
                            <lable for="">رقم التواصل</lable>
                            <input type="tel" class="inputText" id="phonenumber" >
                        </div>
                        
                        <div class="input-info select">
                            <lable for="">الدولة</lable>
                            <select name="" id="country">
                                 <option id="defult" value="defult" selected>اختر الدولة</option>
                            </select>
                        </div>

                        <div class="input-info">
                            <lable for="">المدينة</lable>
                            <input type="text" class="inputText" id="city" >
                        </div>

                        <div class="input-info">
                            <lable>معلومات </lable>
                            <input type="text" class="inputText" id="info-addres" >
                        </div>

                        <div class="input-info checkbox">
                            <h3>العملة</h3>
                            <input type="checkbox" id="dolar"  value="dolar" >
                            <label for="dolar">دولار</label>
                            <input type="checkbox" id="turkey" value="Turkey" >
                            <label for="turkey">ليرة</label>
                            <input type="checkbox" id="syria"   value="syria" >
                            <label for="syria">يورو</label>
                        </div>


                    </div>
                    <div class="form-btn">
                        <input class="btn-orange submit" type="submit" value="انشاء حساب">
                    </div>
                </form>
               
        </div>


    </div>
    
    <!-- <script src="dash/js/main.js" type="module"></script> -->
    <script src="/dash/js/home.js" type="module"></script>
    <script src="/dash/js/main.js" type="module"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    

    
</body>

</html>