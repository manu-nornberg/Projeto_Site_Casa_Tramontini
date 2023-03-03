<?php
    require("controllers/funcoes_db.php");
    include_once('./includes/header.php');
    include_once("./includes/menu_geral.php");
    $conexao=fazconexao();
    $query = "select * from produtos where categoria = 'agricola' order by cod_prod";
    $resultados=ConsultaSelectAll($query);
?>


<p class="nome">PEÇAS AGRÍCOLAS:</p>

<div class="blocao">
    <div class="blocos">
        <?php
        foreach($resultados as $linha) { 
        ?>
        <div class="bloco">
            <form action="./pag_produto.php" method="post">
                <input type ="hidden" name ="cod_prod" value="<?php echo $linha['cod_prod']?>">
                <img src="image/<?php echo $linha['imagem'];?>" width='240px' /></p>
                <p>Nome:  <?php echo $linha['nome']?></p>
                <p>Descricao: <?php echo $linha['descricao']?></p> 
                <p>Preço: R$<?php echo $linha['preco']?></p>
                <button type="submit" id="botao" name="botao" value="Ver"> Ver mais </button>
            </form>                                                        
        </div> 
        <?php
        }
        ?>
    </div>
</div>
<?php
    include_once("./includes/footer.php");
?>

<script src="./js/menu.js"></script>
