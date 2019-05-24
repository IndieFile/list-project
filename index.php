
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
</head>

<body>
  <header>
    <h2 class="logo">Anton Alpatov <span>related lists</span></h2>
  </header>
  <!--
       ##     ##    ###    #### ##    ## 
       ###   ###   ## ##    ##  ###   ## 
       #### ####  ##   ##   ##  ####  ## 
       ## ### ## ##     ##  ##  ## ## ## 
       ##     ## #########  ##  ##  #### 
       ##     ## ##     ##  ##  ##   ### 
       ##     ## ##     ## #### ##    ## 
-->
  <main>
    <div class="container">
      <div>
        <div class="fullWidth">
          <label class="prefix" for="get_auto">Марки:</label>
          <select id="auto" name="get_auto">
            <option id="noSelect1">Марки машин</option>
            <?php require_once('./server/getAuto.php')?>   <!--отображение данных об автомобилях -->
          </select>
        </div>
        <div class="fullWidth models">
          <label class="prefix" for="get_models">Модели:</label>
          <select id="models" name="get_models">
          </select>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="script/index.js"></script>
</body>

</html>