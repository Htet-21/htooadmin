<!DOCTYPE html>
<html>
<head>
    <title>Htoo Admin Panel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<style>
.header-block{
    color: black;
    padding: 30px 0px;
    background-color: #231f20;
    margin-bottom: 55px;
}
h2 {
  font-family: Helvetica Bold !important;
}
</style>
</head>
<body>
  <header>
    <div class="header-block"></div>
  </header>
  <main>
    <div class="container">
    @yield('content')
</div>
</main>
<footer>
</footer>

   
</body>
</html>