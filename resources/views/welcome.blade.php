<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Quick Fit</title>
  </head>
  <body>
    <div class="container-fluid m-0 p-0 image d-block d-sm-block d-md-none">
      <img src="img/image13.png" alt="">
      <img src="img/image14.png" alt="">
    </div>

    <div class="container-fluid m-0 p-2 row">
      <div class="col-12 col-md-6 text-center order-2 order-md-1 p-2">
        <h1>CountDown</h1>
      </div>
      <div class="col-12 col-md-6 text-center order-1 order-md-2 p-2">
        <h1>سينتهي العرض بعد</h1>
      </div>
      <div class="col-12 text-center order-3 p-3 d-block d-sm-block d-md-none">
        <a href="#orderForm" class="btn btn-warning w-50">أطلب الأن</a>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 image d-none d-md-block formDiv">
      <img src="img/firstImage.png" alt="">
      <div class="mr-auto formO ">
        <form action="/order" class="w-100 w-md-50 p-5 border rounded bg-light" method="POST">
            @csrf
          <div class="form-group text-right">
            <label for="inputName"><span class="p-1 text-danger">*</span>الإسم الكامل</label>
            <input type="text" class="form-control" id="inputName" name="name" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span>المدينة</label>
            <input type="text" class="form-control" id="inputCity" name="city" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span>العنوان</label>
            <input type="text" class="form-control" id="inputAdress" name="adress" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span> رقم الهاتف</label>
            <input type="tel" class="form-control" id="inputTel" name="phone" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-warning pr-4 pl-4">أطلب الأن</button>
          </div>
        </form>
      </div>
    </div>

    <div class="container p-2 mb-2">
      <h2 class="text-center">أمراض المفاصل تؤدي إلى الشلل والإعاقة الجسدية</h2>
    </div>

    <div class="container-fluid m-0 p-0 image row">
      <div class="col-12 col-md-4">
        <div class="card border-0">
          <img src="img/image2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">الألم الذي لا يطاق وتشوه العظام ليست سوى عدد قليل من أعراض أمراض المفاصل
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0">
          <img src="img/image3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">التهاب المفاصل المتقدم يؤدي إلى الشلل والإعاقة ، ليجعل حياة الشخص مثل الجحيم.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0">
          <img src="img/image4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">الفقدان الكامل للقدرات البدنية والحياة دون أمل في المستقبل هو ما ينتظرك إذا كنت لا تهتم بالألام التي تعاني منها !            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 image d-none d-md-block">
      <img src="img/image5.png" alt="">
      <img src="img/image6.png" alt="">
    </div>
    <div class="container-fluid m-0 p-0 image d-block d-md-none">
      <img src="img/image15.png" alt="">
    </div>

    <div class="container-fluid m-0 p-2 row">
      <div class="col-12 col-md-6 text-center">
        <h1>CountDown</h1>
      </div>
      <div class="col-12 col-md-6 text-center float-right">
        <h1>سينتهي العرض بعد</h1>
      </div>
      <div class="col-12 col-md-6 text-center p-3 d-block d-sm-block d-md-none">
        <a href="#orderForm" class="btn btn-warning pr-4 pl-4">أطلب الأن</a>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 image d-block d-md-none">
      <img src="img/image16.png" alt="">
      <img src="img/image17.png" alt="">
    </div>

    <div class="container-fluid row">
      <div class="col-12 col-md-6 image">
        <img src="img/image7.png" alt="">
      </div>
      <div class="col-12 col-md-6">
        <div class="container p-3">
          <h2 class="text-center" id="orderForm">المرجو ملأ الإستمارة لتسجيل الطلب</h2>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="/order" class="w-100 w-md-50 p-5 border rounded bg-light" method="POST">
                @csrf
              <div class="form-group text-right">
                <label for="inputName"><span class="p-1 text-danger">*</span>الإسم الكامل</label>
                <input type="text" class="form-control" id="inputName" name="name" required>
              </div>
              <div class="form-group text-right">
                <label for="inputEmail"><span class="p-1 text-danger">*</span>المدينة</label>
                <input type="text" class="form-control" id="inputCity" name="city" required>
              </div>
              <div class="form-group text-right">
                <label for="inputEmail"><span class="p-1 text-danger">*</span>العنوان</label>
                <input type="text" class="form-control" id="inputAdress" name="adress" required>
              </div>
              <div class="form-group text-right">
                <label for="inputEmail"><span class="p-1 text-danger">*</span> رقم الهاتف</label>
                <input type="tel" class="form-control" id="inputTel" name="phone" required>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-warning pr-4 pl-4">أطلب الأن</button>
              </div>
            </form>
        </div>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 image">
      <img src="img/image8.png" alt="">
    </div>

    <div class="container-fluid m-0 p-0 image">
      <img src="img/image9.png" alt="">
    </div>

    <div class="container-fluid m-0 p-0 image">
      <img src="img/image10.png" alt="">
    </div>

    <div class="container-fluid m-0 p-0 image">
      <img src="img/image11.png" alt="">
    </div>

    <div class="container-fluid m-0 p-0 image">
      <img src="img/image12.png" alt="">
    </div>

    <div class="container-fluid youtubeVideo">
      <iframe width="100%" height="100%" frameborder="0" src="https://www.youtube.com/embed/cTelIMywJ0o" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container-fluid m-0 p-2 row">
      <div class="col-12 col-md-6 text-center order-2 order-md-1 p-2">
        <h1>CountDown</h1>
      </div>
      <div class="col-12 col-md-6 text-center order-1 order-md-2 p-2">
        <h1>سينتهي العرض بعد</h1>
      </div>
      <div class="col-12 text-center order-3 p-3 d-block d-sm-block d-md-none">
        <a href="#orderForm" class="btn btn-warning w-50">أطلب الأن</a>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 image d-none d-md-block formDiv">
      <img src="img/firstImage.png" alt="">
      <div class="mr-auto formO ">
        <form action="/order" class="w-100 w-md-50 p-5 border rounded bg-light" method="POST">
            @csrf
          <div class="form-group text-right">
            <label for="inputName"><span class="p-1 text-danger">*</span>الإسم الكامل</label>
            <input type="text" class="form-control" id="inputName" name="name" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span>المدينة</label>
            <input type="text" class="form-control" id="inputCity" name="city" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span>العنوان</label>
            <input type="text" class="form-control" id="inputAdress" name="adress" required>
          </div>
          <div class="form-group text-right">
            <label for="inputEmail"><span class="p-1 text-danger">*</span> رقم الهاتف</label>
            <input type="tel" class="form-control" id="inputTel" name="phone" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-warning pr-4 pl-4">أطلب الأن</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
