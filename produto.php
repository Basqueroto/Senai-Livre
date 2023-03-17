<?php
    include("config/cabecalho.php");
    include("config/header.php");
?> 
<main>
    <div id="apagar">
        <?php
            include("index.php");
        ?>
    </div>
    <section>
        <div class="info">
            <div class="info-image">
                <figure id = "img-fig">
                    <img src="var img" alt="">
                </figure>
            </div>
            <div class="info-carac">
                <div id="txt-info"></div>
                <div id="info-preco">

                </div>
            </div>
        </div>
    </section>
    <script>
        selecionarProduto(produto);
		function selecionarProduto(id) {

			if (id == 1) {
                document.getElementById("txt-info").innerHTML = "fritadeira a ar";
				document.getElementById("img-fig").innerHTML = "<img src ='assets/img/fritadeira.png'>";
				document.getElementById("info-preco").innerHTML = "R$670,00";
			} else if (id == 2) {
				document.getElementById("nome-produto").innerHTML = nomeProduto2;
				document.getElementById("preco-produto").innerHTML = precoProduto2;
				document.getElementById("descricao-produto").innerHTML = descricaoProduto2;
			}
		}
	</script>
</main>    
<?php
    include("config/rodape.php");
?>
