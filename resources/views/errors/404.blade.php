<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 |Jambo Logistics</title>

    <link rel="stylesheet" href="{{asset('assets/css/404.css')}}">
</head>

<body>
    <div class="box">
        <div class="box__ghost">
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>
          <div class="symbol"></div>

          <div class="box__ghost-container">
            <div class="box__ghost-eyes">
              <div class="box__eye-left"></div>
              <div class="box__eye-right"></div>
            </div>
            <div class="box__ghost-bottom">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
          <div class="box__ghost-shadow"></div>
        </div>

        <div class="box__description">
          <div class="box__description-container">
            <div class="box__description-title">Whoops!</div>
            <div class="box__description-text">It seems like we couldn't find the page you were looking for</div>
          </div>

          <a href="{{route('home')}}" class="box__button">Come Home</a>

        </div>

      </div>

      <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
      <script src="{{asset('assets/js/404.js')}}"></script>

</body>

</html>
