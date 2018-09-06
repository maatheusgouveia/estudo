<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 20px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #60338e;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
  color: yellow;
}

#myBtn:hover {
  background-color: #60338e;
}
</style>


<button onclick="topFunction()" id="myBtn" title="Voltar ao topo"> <i class="glyphicon glyphicon-menu-up 2x"></i></button>



<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
