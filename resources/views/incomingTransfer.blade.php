<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/alsoltan project/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/alsoltan project/bootstrap/js/bootstrap.bundle.js"></script> 
    <link href="/alsoltan project/mainCSS/navBarStyle.css" rel="stylesheet"/>
    <link href="/alsoltan project/mainCSS/incomingTransfer-desktop.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 991.5px)" href="/alsoltan project/mainCSS/incomingTransfer-mobile.css" />
    <style>@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');</style>
    <script src="/alsoltan project/JS/button-toggler.js"></script>
    <title>الحوالات الواردة</title>
</head>
<body>
    <div class="container">

        <!-- navigation bar -->
  
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
                          <a class="nav-link active" href="incomingTransfer">الحوالات الواردة</a>
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
          <div class="content">

          <div class="buttons">
            <div class="button">
                <button data-page="incoming-transfer">الحوالات الواردة</button>
            </div>
            <div class="button">
                <button data-page="notification-receive">تسليم برقم الاشعار</button>
            </div>
        </div>

          <div class="pages">
          <!-- transfers page -->

            <div class="page" id="incoming-transfer">
            
            <h2>الحوالات الواردة</h2>
            <div class="transfer not-received">
            <ul>
                <li>
                    <div>من مكتب:
                        <div class="office-name">مكتب 568</div>
                    </div>
                    <div>وقت الاستلام:
                    <div class="receive-time">5:40pm</div>
                </div>
                <div>رقم الحوالة:
                <div class="transfer-number">65485</div>
            </div>
                    <div>وقت الارسال:
                    <div class="send-time">3:44pm</div>
                </div>
                <div>تاريخ الاستلام:
                <div class="receive-date">15 - 11- 2022</div>
            </div>
            <div>رقم الهوية:
              <div class="id-number">6584236957</div>
            </div>
            <div>رقم العملية:
            <div class="process-number">00000086547</div>
        </div>
                    <div>تاريخ الارسال:
                    <div class="send-date">14 - 11- 2022</div>
                </div>
                    <div>اسم المستلم:
                    <div class="receiver-name">محمد محمود علي</div>
                </div>
                
            </li>
        </ul>
        <div class="state">
          <button>تسليم</button>
      </div>
                </div>
                <div class="transfer received">
                <ul>
                <li>
                    <div>من مكتب:
                        <div class="office-name">مكتب 568</div>
                    </div>
                    <div>وقت الاستلام:
                    <div class="receive-time">5:40pm</div>
                </div>
                <div>رقم الحوالة:
                <div class="transfer-number">65485</div>
            </div>
                    <div>وقت الارسال:
                    <div class="send-time">3:44pm</div>
                </div>
                <div>تاريخ الاستلام:
                <div class="receive-date">15 - 11- 2022</div>
            </div>
            <div>رقم الهوية:
              <div class="id-number">6584236957</div>
            </div>
            <div>رقم العملية:
            <div class="process-number">00000086547</div>
        </div>
                    <div>تاريخ الارسال:
                    <div class="send-date">14 - 11- 2022</div>
                </div>
                    <div>اسم المستلم:
                    <div class="receiver-name">محمد محمود علي</div>
                </div>
            </li>
        </ul>
        <div class="state">
          <div>مستلمة</div>
      </div>
          </div>
        </div>

        <!-- page 2 -->

        <div class="page" id="notification-receive">
          <div>
            <h2>التسليم برقم الاشعار</h2>
            <div class="page2">
              <input type="number" placeholder="ادخل رقم الاشعار">
              <button>تأكيد</button>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</body>
</html>