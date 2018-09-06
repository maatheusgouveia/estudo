<?php include 'includes/config.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="libs/bootstrap/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientnome = button.data('whatevernome')
      var recipientdetalhes = button.data('whateverdetalhes')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('ID ' + recipient)
      modal.find('#id-curso').val(recipient)
      modal.find('#recipient-name').val(recipientnome)
      modal.find('#detalhes').val(recipientdetalhes)

    })
  </script>
  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include headers; ?>

	<title>Sobre Nós - Mostra Preço</title>



  <style>
    a:focus, a:hover {
     /* color:#ece411; */
    text-decoration: none;
}

html{
  font-family: arial;
}

h1{
  font-size: 2em;
  margin-bottom: 10px;
}

./* btn.focus, .btn:focus, .btn:hover {
    color:#fff;
    text-decoration: none;
     border-color: #60338E;
    background-color: #60338E;

  } */
  </style>
</head>
<body>

  <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-101003467-1', 'auto');

  ga('send', 'pageview');


</script>

<?php include topo; ?>

<div class="container" >
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2" style="background-color: #fff;color: #666; min-height: 500px;box-shadow: 2px 2px 2px 2px;border-radius:5px;margin-top:5px;margin-bottom:10px;" >

        <h1 class="text-center" style="margin-top: 20px;font-size: 2.5em;color:#333;font-weight:bold;">Sobre Nós</h1> 
  
        <!-- <div class="well-sm col-sm-5"  style="background-color: #60338E;margin-right: 10px;">
        <img src="imagens/mostrapreco/logo-nome.png" class="img-responsive img-logo center-block" alt="Mostra Preço" height="400" width="400">
        </div> -->

        <p style="text-align: justify;">&nbsp; &nbsp; Aliquam tempus sem ut erat luctus, ac viverra est facilisis. Curabitur egestas enim non ante facilisis sagittis. Praesent orci massa, scelerisque in nunc nec, ultricies aliquam arcu. Etiam eu dapibus ante. Etiam enim massa, fringilla nec faucibus in, facilisis id velit. Suspendisse fringilla dictum dapibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis eu posuere ex, et viverra augue. Pellentesque semper sapien odio, a malesuada justo laoreet id. Donec in vulputate ante. Quisque eget lacus tincidunt, sollicitudin diam eu, rutrum augue. Integer gravida sapien lacus. Maecenas efficitur in libero in molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer et mi ultrices, ultrices nulla vel, placerat nibh. Phasellus et libero erat.</p>
        <br>

        <p style="text-align: justify;">&nbsp; &nbsp; Vestibulum sit amet ultricies mi. Maecenas pretium ligula malesuada fermentum elementum. Suspendisse malesuada mattis tortor nec tincidunt. Fusce pellentesque, nibh quis tincidunt vehicula, risus eros venenatis leo, eget luctus orci ipsum quis metus. Vestibulum mattis venenatis finibus. Praesent non nisi vestibulum, dapibus elit id, suscipit tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer vulputate enim id elit efficitur semper. Praesent volutpat leo vel dui dignissim lobortis. Suspendisse tempor tortor dolor, vel tempus tortor ultrices ut. Sed sed neque at mauris tempor sollicitudin. Nullam id turpis justo. Suspendisse egestas congue vestibulum. Sed tristique consectetur mi.</p>
        <br>

        <p style="text-align: justify;">&nbsp; &nbsp; Donec nec lacus vel ante iaculis feugiat. Nulla pulvinar faucibus velit, eu ultrices nunc. Curabitur consectetur ultricies ligula a mattis. Mauris a suscipit nulla, at porta magna. In molestie id elit non posuere. Vivamus eget facilisis quam. Integer tincidunt pellentesque lectus nec condimentum. Morbi faucibus pellentesque turpis, at maximus erat elementum quis. Nunc vel vulputate nulla. Nunc id ante magna. Quisque at sodales nunc, sit amet ornare magna. Sed nec mauris dapibus, venenatis nisl sagittis, tincidunt dui. Pellentesque nibh ex, elementum in dapibus id, congue vitae sem.</p>
        <br>

        <p style="text-align: justify;">&nbsp; &nbsp; Mauris interdum finibus dolor, non efficitur leo. Vestibulum sit amet felis lacinia, facilisis odio sed, feugiat urna. Donec quam lorem, elementum eu viverra eget, aliquam a nibh. Phasellus pretium lorem id nulla consequat ultricies. Aenean vitae ullamcorper massa. Fusce nibh massa, tempor quis ullamcorper ut, egestas ac leo. Nunc at lacus nec nisl cursus molestie. Mauris sed massa purus. Donec luctus nulla eget leo mollis, vitae consectetur ante imperdiet. Donec vestibulum tellus hendrerit lorem lobortis, quis convallis neque blandit. Integer dapibus lacus in mi pretium, a laoreet sapien lacinia. Duis tincidunt massa a mollis consequat. Nunc tempus justo vitae metus ultrices cursus.</p>
        <br>

        <p style="text-align: justify;">&nbsp; &nbsp; Mauris posuere mollis ultricies. Praesent consectetur tortor quis tempus faucibus. Maecenas accumsan tristique risus at ultricies. Phasellus ac nisi vestibulum, imperdiet neque quis, tempor urna. Nunc vestibulum malesuada molestie. Phasellus commodo faucibus mattis. Etiam ipsum mauris, iaculis viverra tempor id, blandit et metus. Pellentesque vehicula, arcu eu commodo congue, ex libero lobortis enim, sed semper orci nunc et leo. Pellentesque a elementum turpis. Sed vel lorem sodales, tempor ex vel, semper nisl. Aliquam placerat molestie vehicula. Nam gravida auctor arcu, eget volutpat risus mollis vitae.</p>
        <br>


    </div>
  </div>
</div>


<?php include btnTopo;?>

<?php include rodape; ?>



</body>
</html>


<!-- $var=file_get_contents('');
echo $var; -->

