<?php require_once('includes/header.php'); ?>

<main>

    <!-- Header Pagina -->
    <div class="container mb-5 pt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-primary">Minha Conta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compra Finalizada</li>
            </ol>
        </nav>
    </div>

    <!-- Corpo -->
    <section class="encomenda-bloco">
        <div class="container">
            <h1>Encomenda recebida</h1>
            <div class="underscore-title"></div>
            <h2 class="text-primary agradecimento">Obrigado. A sua encomenda foi recebida</h2>

            <div class="bg-paper">
                <div>
                    <h3>NÚMERO DE ENCOMENDA</h3>
                    <p>94</p> 
                </div>
                <hr>
                <div>
                    <h3>DATA</h3>
                    <p>Outubro 21, 2023</p> 
                </div>
                <hr>
                <div>
                    <h3>EMAIL</h3>
                    <p>spanxscomercial@gmail.com</p> 
                </div>
                <hr>
                <div>
                    <h3>TOTAL</h3>
                    <p>R$ 1.200</p> 
                </div>
                <hr>
                <div>
                    <h3>MÉTODO DE PAGAMENTO</h3>
                    <p>Transferência Bancaria</p> 
                </div>
            </div>

            <h2 class="titulo-paper">Os nossos dados bancarios</h2>

            <div class="bg-paper">
                <div>
                    <h3>Banco</h3>
                    <p>Novo Banco</p>
                </div>
                <hr>
                <div>
                    <h3>Número de identificação bancária</h3>
                    <p>0000 0000 0000 0000 0000 0</p>
                </div>
                <hr>
                <div>
                    <h3>IBAN</h3>
                    <p>PT50 0000 0000 0000 0000 0000 0</p>
                </div>
            </div>

            <h2 class="mb-5 titulo-paper">Detalhes da Encomenda</h2>
            <div class="bg-white rounded row py-4 encomenda-detalhe">
                <div class="col-8">
                    <p class="mb-5">Produto</p>
                    <a href="produto-detalhe.php">Apple Iphone 12 64GB</a>
                </div>
                <div class="col-4">
                    <p class="mb-5">Total</p>
                    <p>R$ 1.200</p>
                </div>
            </div>
            <div class="bg-white rounded row py-4 mt-1 encomenda-detalhe">
                <div class="col-8">
                    <p class="mb-5">Subtotal</p>
                    <p class="mb-5">Envio</p>
                    <p class="mb-5">Método de pagamento</p>
                    <p>Total</p>
                </div>
                <div class="col-4">
                    <p class="mb-5">R$ 1.200</p>
                    <p class="mb-5">Envio Grátis</p>
                    <p class="mb-5">Transferência Bancaria</p>
                    <p>R$ 1.200</p>
                </div>
            </div>

            <div class="py-5 row mt-5">
                <div class="offset-lg-1 col-6 col-lg-5 encomenda-endereco">
                    <h3 class="mb-4">Endereço de faturamento</h3>
                    <p>
                        Gabriel Silva<br>
                        Rua dos Progamadores<br>
                        15055-404 Error<br>
                        20230114
                    </p>
                    <p class="mt-3 email">spanxscomercial@gmail.com</p>
                </div>
                <div class="col-lg-5 col-6 encomenda-endereco">
                    <h3 class="mb-4">Endereço de Envio</h3>
                    <p>
                        Revotech, Ltda.<br>
                        César Cardoso<br>
                        Avepark - Parque da Ciência e Tecnologia, S.A.<br>
                        4805-017 Guimarães
                    </p>
                </div>
            </div>
        </div>
    </section>









</main>

<?php require_once('includes/footer.php'); ?>