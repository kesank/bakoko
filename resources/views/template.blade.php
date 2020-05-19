<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Locataire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    @yield('css')
    <style>
#navigation {
  margin: 0 ;
  padding: 0 ;
  list-style: none ;
  text-align: center ;
}
a{
  text-decoration: none
}
#navigation li {
  display: inline ;
  margin-right: 1px ;
  color: #fff ;
  background: #c00 ;
}#navigation li a {
  padding: 4px 20px ;
  background: #c00 ;
  color: #fff ;
  border: 1px solid #600 ;
  font: 1em "Trebuchet MS",Arial,sans-serif ;
  line-height: 1em ;
  text-align: center ;
  text-decoration: none ;
}
#navigation li a:hover, #navigation li a:focus, #navigation li a:active {
  background: #900 ;
  text-decoration: underline ;
}
    </style>


</head>
<body>
   
    <main class="section">
        <div class="container">
            @yield('contenu')
        </div>
    </main>
</body>
</html>