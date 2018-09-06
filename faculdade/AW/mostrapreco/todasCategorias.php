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

	<title>Todas as Categorias - Mostra Preço</title>



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

<div class="container-fluid" >

    <div class="col-md-12" style="min-height:500px;">
    
        <div class="well-sm" style="border:2px solid lightgray;border-radius:5px;min-height:500px;margin-top:10px;margin-bottom:10px;">
        
        <p>Alimentos</p>

        <p></p>

        <p></p>

        
        
        </div>
    
    
    
    </div>


</div>


<?php include btnTopo;?>

<?php include rodape; ?>



</body>
</html>


<!-- $var=file_get_contents('');
echo $var; -->

