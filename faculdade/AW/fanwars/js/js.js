btnTrailler = document.getElementById("btnTrailler");
btnCritica = document.getElementById("btnCritica");
btnDetalhes = document.getElementById("btnDetalhes");
btnCuriosidades = document.getElementById("btnCuriosidades");

btnTrailler.onclick = function() {
	divTrailler.style.display = "block";
	divCritica.style.display = "none";
	divDetalhes.style.display = "none";
	divCuriosidades.style.display = "none";
}
btnCritica.onclick = function() {
	divTrailler.style.display = "none";
	divCritica.style.display = "block";
	divDetalhes.style.display = "none";
	divCuriosidades.style.display = "none";
}
btnDetalhes.onclick = function() {
	divTrailler.style.display = "none";
	divCritica.style.display = "none";
	divDetalhes.style.display = "block";
	divCuriosidades.style.display = "none";
}
btnCuriosidades.onclick = function() {
	divTrailler.style.display = "none";
	divCritica.style.display = "none";
	divDetalhes.style.display = "none";
	divCuriosidades.style.display = "block";
}
divTrailler =coument.getElementById("divTrailler");
divCritica =coument.getElementById("divCritica");
divDetalhes =coument.getElementById("divDetalhes");
divCuriosidades =coument.getElementById("divCuriosidades");