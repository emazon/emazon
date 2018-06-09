      <?php require('partials/nav.php'); ?>

      <div class="container">
          <h1><?php foreach ($greet as $key => $value):
                echo $key;?>
              <?php endforeach ?>
          </h1>
      </div>

      <h1>Submit Your name </h1>
      <form method="POST" action="/emazon/names">
          <input name="name"/>
          <button type="submit">Submit</button>
      </form>


  </body>
</html>
