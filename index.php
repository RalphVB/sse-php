<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid text-center mt-5">
        <h1>Ejemplo de Server Side Events con Vanilla JS y PHP</h1>
        <hr>
        <a href="https://www.html5rocks.com/en/tutorials/eventsource/basics/" class="btn btn-link" target="_blank">Tutorial #1</a>
        <a href="https://developer.mozilla.org/es/docs/Server-sent_events/utilizando_server_sent_events_sse" class="btn btn-link" target="_blank">Tutorial #2</a>
        <hr>
        <!-- <p class="text-danger">¡Abre la consola para ver las notificaciones!</p> -->
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.11/dist/sweetalert2.all.min.js" integrity="sha256-aWXJZ/4kdONPAkoIYYyE6fmVw0gqPEbnk7nspLANguI=" crossorigin="anonymous"></script>
    <script>
    var source = new EventSource('ssedemo.php');

    source.addEventListener('message', function(e) {
        console.log(e.data);
        swal({
            title: '¡Notificación!',
            text: e.data,
            type: 'success',
            })
    }, false);

    source.addEventListener('open', function(e) {
        // Connection was opened.
    }, false);

    source.addEventListener('error', function(e) {
        if (e.readyState == EventSource.CLOSED) {
            // Connection was closed.
        }
    }, false);
    </script>
  </body>
</html>