<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/alsoltan project/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/alsoltan project/bootstrap/js/bootstrap.bundle.js"></script> 
    <link href="/alsoltan project/mainCSS/accounting-desktop.css" rel="stylesheet"/>
    <link href="/alsoltan project/mainCSS/navBarStyle.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 991.5px)" href="/alsoltan project/mainCSS/accounting-mobile.css" />
    <style>@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');</style>
    <title>Accounting</title>
</head>
<body>
    <!-- navigation bar -->
    <div class="container">
    <div>
      <nav class="navbar navbar-expand-lg sticky-top mb-5">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="/alsoltan project/img/logo.png" alt="logo"></a>
            <button class="navbartoggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <img src="/alsoltan project/img/gie5B478T.png" alt="burger menu" class="navbar-toggler-button">
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mt-3">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="mainpage">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="outgoingTransfers">الحوالات الصادرة</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="incomingTransfer">الحوالات الواردة</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="accounting" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <li class="nav-item ">
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
    <div class="content">
        <h2 class="mobile-title">المحاسبة</h2>
        <h2>الأرصدة وكشف الحسابات</h2>
        <table>
            <tr>
                <th>رمز العملة</th>
                <th>العملة</th>
                <th>الرصيد</th>
                <th>كشف حساب</th>
            </tr>
            <tr>
                <td>1</td>
                <td>يورو</td>
                <td>0</td>
                <td>كشف حساب</td>
            </tr>
            <tr>
                <td>2</td>
                <td>دولار</td>
                <td>100</td>
                <td>كشف حساب</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ليرة تركيه</td>
                <td>500</td>
                <td>كشف حساب</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>