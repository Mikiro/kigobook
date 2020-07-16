<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <style>
    .error-wrap {
      margin: auto;
      padding: 5px 20px;
      width: 300px;
      display: inline-block;
      border: 1px solid #dcdcdc;
      box-shadow: 0px 0px 8px #dcdcdc;
    }
    h1 { font-size: 18px; }
    p { margin-left: 10px; font-size: 12px; }
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172655737-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172655737-1');
</script>

</head>
<body>
<div class="error-wrap">
  <section>
    <h1>@yield('title')</h1>
    <p class="error-message">@yield('message')</p>
    <p class="error-detail">@yield('detail')</p>
    @yield('link')
  </section>
</div>
</body>
</html>