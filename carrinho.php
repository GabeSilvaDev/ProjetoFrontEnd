<?php require_once('includes/header.php'); ?>

<main>

    <!-- Header Pagina -->
    <div class="container mb-5 pt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-primary">Minha Conta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
            </ol>
        </nav>
    </div>

    <!-- Corpo -->
    <section>
        <div class="container">
            <h2>Carrinho</h2>
            <div class="underscore-title"></div>

            <table class="table table-carrinho">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Produtos</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="bi bi-x-circle-fill me-2"></i><img src="/img/img-iphone-2.png" width="40px" alt="Imagem de um Iphone 14"></th>
                        <td><a href="produto-detalhe.php">Apple Iphone 12 64GB</a></td>
                        <td>R$ 1.200</td>
                        <td><input class="ms-4" type="number"id="" placeholder="1"></td>
                        <td>r$ 1.200</td>
                    </tr>
                </tbody>
            </table>
            <div class="row py-5 justify-content-between cupom-area gap-4 gap-md-0">
                <div class="col-md-8 d-flex flex-wrap gap-3 gap-sm-0 justify-content-center justify-content-md-start">
                    <input type="text" placeholder="Código do Cupom">
                    <a href="#" class="btn-cupom text-nowrap">Aplicar Cupom</a>
                </div>
                <div class="col-md-4 d-flex justify-content-center justify-content-md-end atualizar">
                    <a href="#" class="btn-cupom text-nowrap">Atualizar Carrinho</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Total Carrinho -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6 ">
                    <h2 class="mb-4 titulo-compra">Total no Carrinho</h2>
                    <div class="bg-white total-carrinho">
                        <div class="row">
                            <h3 class="col-3">Subtotal</h3>
                            <p class="col-8">R$ 1.200</p>
                        </div>
                        <div class="row my-5">
                            <h3 class="col-3">Envio</h3>
                            <p class="col-8">
                                Envio grátis
                                As opções de envio serão atualizadas
                                durante a finalização da compra.<br>
                                <a href="$">Calcular custos de envio</a>
                            </p>
                        </div>
                        <div class="row">
                            <h3 class="col-3">Total</h3>
                            <p class="col-8">R$ 1.200</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 mb-5">
                        <a href="recebimento.php" class="btn-card text-center w-100">Finalizar compra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>






<?php require_once('includes/footer.php'); ?>