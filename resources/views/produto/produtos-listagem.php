<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
      <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
          <h1 class="text-center my-4">Listagem de produtos</h1>
          <table>
              <?php foreach ($produtos as $p): ?>
              <tr>
                  <td><?= $p->nome ?></td>
                  <td><?= $p->valor ?></td>
                  <td><?= $p->descricao ?></td>
                  <td><?= $p->quantidade ?></td>
              </tr>
              <?php endforeach ?>
          </table>
      </div>
    </body>
</html>  