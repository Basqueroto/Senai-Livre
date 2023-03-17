<?php
    include("config/cabecalho.php");
    include("config/header.php");
?> 
<main>
    <section class="product">
        <div class ="info">
            <div class="info-image">
                <figure id = "img-fig">
                    
                </figure>
            </div>
            <div class="carac">
                <div class="info-carac">
                    <div id="txt-info">

                    </div>
                    <i class="fa-regular fa-star" id="p"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <div id="info-preco">

                    <p class="mais">Mais vendido</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
		function selecionarProduto(id) {
			if (id == 1) {
                document.getElementById("txt-info").innerHTML = "fritadeira a ar";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/fritadeira.png'>";
				document.getElementById("info-preco").innerHTML = "R$670,00";
			} else if (id == 2) {
				document.getElementById("txt-info").innerHTML = "câmera fotografica";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/camera.png'>";
				document.getElementById("info-preco").innerHTML = "R$300,00";
			}
            else if (id == 3) {
				document.getElementById("txt-info").innerHTML = "LapTop";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/laptop.png'>";
				document.getElementById("info-preco").innerHTML = "R$1900,00";
			}
            else if (id == 4) {
				document.getElementById("txt-info").innerHTML = "cadeira gaymer";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/cadeiraGamer.png'>";
				document.getElementById("info-preco").innerHTML = "R$1600,00";
			}
            else if (id == 5) {
				document.getElementById("txt-info").innerHTML = "meias";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/meias.png'>";
				document.getElementById("info-preco").innerHTML = "R$70,00";
			}
            else if (id == 6) {
				document.getElementById("txt-info").innerHTML = "caixa de ferramentas";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/ferramentas.png'>";
				document.getElementById("info-preco").innerHTML = "R$670,00";
			}
            else if (id == 7) {
				document.getElementById("txt-info").innerHTML = "televisão LG 43 polegadas";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/ofTvs.png'>";
				document.getElementById("info-preco").innerHTML = "R$300,00";
			}
            else if (id == 8) {
				document.getElementById("txt-info").innerHTML = "celular";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/ofCelulares.png'>";
				document.getElementById("info-preco").innerHTML = "R$1900,00";
			}
            else if (id == 9) {
				document.getElementById("txt-info").innerHTML = "televisão 4k 63 polegadas";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/ofTvs2.png'>";
				document.getElementById("info-preco").innerHTML = "R$1600,00";
			}
            else if (id == 10) {
				document.getElementById("txt-info").innerHTML = "calças";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/ofCalcas.png'>";
				document.getElementById("info-preco").innerHTML = "R$70,00";
			}
            
		}

        window.onload = function() {
            selecionarProduto(<?= $_GET['id']; ?>);
        };
    
	</script>
</main>    
<?php
    include("config/rodape.php");
?>
