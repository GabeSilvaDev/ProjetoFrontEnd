<?php require_once('includes/header.php'); ?>

<main>

    <!-- Header Pagina -->
    <div class="container my-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="loja.php" class="text-primary">Loja</a></li>
                <li class="breadcrumb-item active" aria-current="page">Apple Iphone 12 64gb</li>
            </ol>
        </nav>
    </div>

    <!-- Detalhe Produto -->
    <section>
        <div class="container">
            <div class="row gap-4">
                <div class="col-12 col-md-5 bloco-carousel">
                    <div id="carouselExampleIndicators" class="carousel-detalhe carousel slide">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="/img/img-iphone.png" alt="Imagem de um Iphone 12" class="d-block w-100"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="/img/img-iphone-2.png" alt="Imagem de um Iphone 12" class="d-block w-100"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="/img/img-iphone-3.png" alt="Imagem de um Iphone 12" class="d-block w-100"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img src="/img/img-iphone-4.png" alt="Imagem de um Iphone 12" class="d-block w-100"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/img-iphone.png" class="d-block w-100" alt="Imagem de um Iphone 12">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/img-iphone-2.png" class="d-block w-100" alt="Imagem de um Iphone 12">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/img-iphone-3.png" class="d-block w-100" alt="Imagem de um Iphone 12">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/img-iphone-4.png" class="d-block w-100" alt="Imagem de um Iphone 12">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 detalhe-iphone">
                    <div>
                        <h2>Apple Iphone 12 64GB</h2>
                        <i>R$ 1.200</i>
                    </div>
                    <form>
                        <label for="colorSelect" class=" text-muted mb-2 mx-1">Cor</label>
                        <select id="colorSelect" class="form-select mb-4">
                            <option selected>Preto</option>
                            <option value="1">Azul</option>
                            <option value="2">Dourado</option>
                            <option value="3">Branco</option>
                        </select>
                        <div class="d-flex">
                            <input type="number" placeholder="1" class="me-3">
                            <a href="carrinho.php" class="btn-card">Adicionar</a>
                        </div>
                    </form>
                    <div>
                        <p class="text-muted">Ref: N/D</p>
                        <p class="text-muted">Categoria: <a href="loja.php">Apple</a></p>
                    </div>
                </div>
            </div>
            <div class="row categoria-descricao gap-4 mt-5 mb-5 mt-md-4">
                <div class="col-5 mt-1">
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 text-muted">Descrição</p>
                        <i class="bi bi-caret-right text-muted"></i>
                    </div>
                    <hr>
                    <div>
                        <p class="text-muted">Informação Adicional</p>
                    </div>
                    <hr>
                    <div>
                        <p class="text-muted">Avaliações (0)</p>
                    </div>
                    <hr>
                </div>

                <div class="col-6">
                    <h3 class="mb-3">Descrição</h3>
                    <p class="mb-0 text-muted">
                        Ecrã diagonal: 15,5 cm (6.1°), 2532x1170 pixels, OLED. Modelo de processador: A14. Armazenamento interno: 64 GB. Câmera traseira: 12MP, dupla. SO instalado: iOS 14. Iva incluído.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Relacionados -->
    <section>
        <div class="container relacionados-detalhe">
            <h2>Produtos Relacionados</h2>
            <div class="underscore-title mb-2"></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-5 mt-2 gap-md-0">
                <?php
                for ($i = 0; $i < 4; $i++) {
                    require('includes/components/produto-item.php');
                }
                ?>
            </div>
        </div>
    </section>

</main>




<?php require_once('includes/footer.php'); ?>