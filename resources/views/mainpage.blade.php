<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/alsoltan project/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="alsoltan project/bootstrap/js/bootstrap.bundle.js"></script> 
    <link href="alsoltan project/mainCSS/mainpage-desktop.css" rel="stylesheet"/>
    <link href="alsoltan project/mainCSS/navBarStyle.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 991.5px)" href="/alsoltan project/mainCSS/mainpage-mobile.css" />
    <style>@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');</style>
    <script src="alsoltan project/JS/button-toggler.js"></script>
    <title>الصفحة الرئيسية</title>
</head>
<body>
    <div class="container">

      <!-- navigation bar -->

      <div>
        <nav class="navbar navbar-expand-lg sticky-top mb-5">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="alsoltan project/img/logo.png" alt="logo"></a>
              <button class="navbartoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="alsoltan project/img/gie5B478T.png" alt="burger menu" class="navbar-toggler-button">
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="mainpage">الصفحة الرئيسية</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="outgoingTransfers">الحوالات الصادرة</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="incomingTransfer">الحوالات الواردة</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="accounting" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      المحاسبة
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="accounting">الأرصدة والحسابات</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="accounting2">عدد الحركات</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="accounting3">سحب أجور التسليم</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about">المعلومات</a>
                  </li>
                </ul>
                <div class="user row ms-lg-2">
                  <div class="col-6 user-pic mt-3 p-0"><img  src="/alsoltan project/img/User.png"></div>
                  <div class="col-6 user-info">
                    <h6 class="mt-4">اسم المركز</h6>
                    <h5>5654</h5>
                  </div>
                </div>
              </div>
            </div>
          </nav>
    </div>

        <!-- news bar -->

        <div class="news-bar ms-lg-0 me-lg-0">
          <div class="title">أخر اخبار الشركة</div>
          <span class="news">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث ي</span>
      </div>

      <!-- exchange prices -->

      <div class="exchange-prices row ms-lg-0 me-lg-0">
        <div class="col-lg-4">
          <div class="row currency bordered">
            <div class="col-lg-12 title">دولار</div>
            <div class="col-lg-12 balance">500</div>
          </div>
        </div>
        <div class="col-lg-4">
        <div class="row currency bordered">
          <div class="col-lg-12 title">ليرة تركية</div>
          <div class="col-lg-12 me-4 balance">458</div>
        </div>
      </div>
        <div class="col-lg-4">
          <div class="row currency">
            <div class="col-lg-12 title">يورو</div>
            <div class="col-lg-12 balance">300</div>
          </div>
        </div>
      </div>

      <!-- buttons -->

    <div class="buttons">
      <div class="button">
        <button data-page="New-transfer">حوالة جديدة</button>
      </div>
      <div class="button">
        <button data-page="Exchange-voucher">سند صرف</button>
      </div>
      <div class="button">
          <button data-page="New-transfer-syria">حوالة جديدة (سوريا)</button>
      </div>
    </div>

    <!-- pages -->

    <div class="pages">

    <!-- page 1 -->

    <div class="page" id="New-transfer">
      <form>
        <div>
          <label for="name1">اسم المستفيد</label>
          <input type="text" name="name1" id="" placeholder="اسم المستفيد" >
        </div>
        <div>
          <label for="phone1">رقم الجوال</label>
          <input type="number" name="" id="phone1" placeholder="رقم الجوال">
        </div>
        <div>
        <label for="sent-currency1">العملة المرسلة</label>
        <select id="sent-currency1">
          <option class="placeholder" value="" disabled selected hidden>العملة المرسلة</option>
          <option value="دولار">دولار</option>
          <option value="ليرة تركية">ليرة تركية</option>
          <option value="يورو">يورو</option>
        </select>
      </div>
      <div>
        <label for="sent-amount1">المبلغ</label>
        <input type="number" name="" id="sent-amount1" placeholder="المبلغ">
      </div>
      <div>
        <label for="recived-currency1">العملة المستلمة</label>
        <select id="recived-currency1">
          <option class="placeholder" value="" disabled selected hidden>العملة المستلمة</option>
          <option value="دولار">دولار</option>
          <option value="ليرة تركية">ليرة تركية</option>
          <option value="يورو">يورو</option>
        </select>
      </div>
      <div>
        <label for="recived-amount1">المبلغ</label>
        <input type="number" name="" id="recived-amount1" placeholder="المبلغ">
      </div>
      <div>
        <label for="office1">الوجهة</label>
        <select id="office1">
          <option class="placeholder" value="" disabled selected hidden>الوجهة: تحديد المكتب المرسل اليه</option>
          <option value="مكتب 568">مكتب 568</option>
          <option value="مكتب 562">مكتب 562</option>
          <option value="مكتب 658">مكتب 658</option>
        </select>
      </div>
      <div>
        <label for="note">ملاحظة</label>
        <textarea type="text" name="" id="note" style="height: 48px;" placeholder="ملاحظة"></textarea>
      </div>
        <div class="submit d-flex justify-content-between">
        <input type="submit" value="ارسال الحوالة">
        <div class="d-flex">
        <h5>الاجور:</h5>
        <h5> $5</h5>
        </div>
        </div>
      </form>
    </div>

      <!-- page2 -->

    <div class="page" id="Exchange-voucher">
      <form class="page2">
        <div>
          <label for="from-currency2">من عملة</label>
            <select id="from-currency2">
              <option class="placeholder" value="" disabled selected hidden>تحديد العملة</option>
              <option value="دولار">دولار</option>
              <option value="ليرة تركية">ليرة تركية</option>
              <option value="يورو">يورو</option>
            </select>
        </div>
        <div>
            <label for="sent-amount2">المبلغ</label>
            <input type="number" name="" id="sent-amount2" placeholder="المبلغ">
        </div>
        <div>
          <label for="to-currency2">الي عملة</label>
            <select id="to-currency2">
              <option class="placeholder" value="" disabled selected hidden>تحديد العملة</option>
              <option value="دولار">دولار</option>
              <option value="ليرة تركية">ليرة تركية</option>
              <option value="يورو">يورو</option>
            </select>
        </div>
        <div>
            <label for="recived-amount2">المبلغ</label>
            <input type="number" name="" id="recived-amount2" placeholder="المبلغ">
        </div>
        <div>
          <label for="exchange-prices">أسعار الصرف</label>
          <div id="exchange-prices2">
            <div>
              <div class="row currency bordered">
                <div class=" title">دولار</div>
                <div class="balance">500</div>
              </div>
            </div>
            <div>
            <div class="row currency  ">
              <div class="title">ليرة تركية</div>
              <div class="balance">458</div>
            </div>
          </div>
            <div>
              <div class="row currency bordered">
                <div class="title">يورو</div>
                <div class="balance">300</div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h7>1 يورو يساوي</h7>
          <h7>1.00 دولار</h7>
        </div>
    </form>
    </div>

      <!-- page3 -->

    <div class="page" id="New-transfer-syria">
      <form>
        <div>
          <label for="name3">اسم المستفيد</label>
          <input type="text" name="name3" id="" placeholder="اسم المستفيد" >
        </div>
        <div>
          <label for="phone3">رقم الجوال</label>
          <input type="number" name="" id="phone3" placeholder="رقم الجوال">
        </div>
        <div>
        <label for="sent-currency3">العملة المرسلة</label>
        <select id="sent-currency3">
          <option class="placeholder" value="" disabled selected hidden>العملة المرسلة</option>
          <option value="دولار">دولار</option>
          <option value="ليرة تركية">ليرة تركية</option>
          <option value="يورو">يورو</option>
        </select>
      </div>
      <div>
        <label for="sent-amount3">المبلغ</label>
        <input type="number" name="" id="sent-amount3" placeholder="المبلغ">
      </div>
      <div>
        <label for="recived-currency3">العملة المستلمة</label>
        <select id="recived-currency3">
          <option class="placeholder" value="" disabled selected hidden>العملة المستلمة</option>
          <option value="دولار">دولار</option>
          <option value="ليرة تركية">ليرة تركية</option>
          <option value="يورو">يورو</option>
        </select>
      </div>
      <div>
        <label for="recived-amount3">المبلغ</label>
        <input type="number" name="" id="recived-amount3" placeholder="المبلغ">
      </div>
      <div>
        <label for="office3">الوجهة</label>
        <select id="office3">
          <option class="placeholder" value="" disabled selected hidden>الوجهة: تحديد المكتب المرسل اليه</option>
          <option value="مكتب 568">مكتب 568</option>
          <option value="مكتب 562">مكتب 562</option>
          <option value="مكتب 658">مكتب 658</option>
        </select>
      </div>
        <div class="submit d-flex justify-content-between mt-4 m-md-0">
        <input type="submit" value="ارسال الحوالة">
        <div class="d-flex">
        <h5>الاجور:</h5>
        <h5> $5</h5>
        </div>
        </div>
      </form>
    </div>
    </div>
    </div>
  </body>
</html>
