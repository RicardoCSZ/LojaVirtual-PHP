<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="header">
        <p class="logo">Minha Loja Virtual</p>
        <div class="cart">
            <i class="fa fa-shopping-cart"></i>
                <p>1</p>
        </div>
    </div>

    <div class="container">
        <div class="linha-produtos">
            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-1.jpg" alt="" class="produtoMiniatura"/>
                </div>
                <div class="titulo">
                    <p>Tênis Sapatênis Masculino Polo</p>
                    <h2>R$ 150</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button"name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-2.jpg" alt="" class="produtoMiniatura"/>
                </div>
                <div class="titulo">
                    <p>Camiseta Masculina Jeans</p>
                    <h2>R$ 250</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button"name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php" method="post" enctype="multipart/form-data"><!--Colocar pq senão não cadastra imagem-->
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-3.jpg" alt="" class="produtoMiniatura"/>
                </div>
                <div class="titulo">
                    <p>Calça Jeans, Calvin Klein, Masculino</p>
                    <h2>R$ 550</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button"name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>

            <form action="filtros/criar.php" method="post">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="assets/img/produto-4.jpg" alt="" class="produtoMiniatura"/>
                </div>
                <div class="titulo">
                    <p>Smart Speaker Amazon Echo Dot 5ª Geração</p>
                    <h2>R$ 550</h2>
                    <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button"name="addcarrinho">Adicionar ao carrinho</button>
                </div>
            </div>
            </form>
        </div>
        <div class="barraLateral">

                <div class="topoCarrinho">
                    <p>Meu carrinho</p>
                </div>
                
                        <div class="item-carrinho">

                            <div class="linha-da-imagem">
                                <img src="assets/img/produto-1.jpg" alt="" class="img-carrinho">              
                            </div>
                            <p style="color:black">Tênis Sapatênis Masculino Polo</p>
                            <h2>R$ 150</h2>
                            <form action="filtros/excluir.php" method="post">
                                 <input type="hidden" name="id_produto" value="">
                                 <button type="submit" style="border:none; background:none;"> <i class=" fa fa-trash-o"></i></button>
                            </form>
                        </div>
                        <div class="item-carrinho-vazio">Seu carrinho está vazio</div>
                            
                        <div class="rodape">
                            <h3>Total:</h3>
                            <h2>R$ 150</h2>
                        </div>
                        </div>
            </div>
    </div>
</body>
</html>
                
                   
                