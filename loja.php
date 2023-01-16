<?php require_once('includes/header.php'); ?>

<main>

    <!-- Header da Pagina -->
    <div class="container my-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Loja</li>
            </ol>
        </nav>
    </div>

    <!-- Ordenação Superior -->
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center gap-4 filtro-bloco">
                <div class="ordenacao">
                    <select class="form-select border-0">
                        <option selected>Recomendados</option>
                        <option value="1">Mais Escolhidos</option>
                        <option value="2">Preço Baixo Para Preço Alto</option>
                        <option value="3">Preço Alto Para Preço Baixo</option>
                    </select>
                </div>
                <p class="text-muted mb-0">Mostrar 1-4 de 30 resultados</p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link bg-primary" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">28</a></li>
                        <li class="page-item"><a class="page-link" href="#">29</a></li>
                        <li class="page-item"><a class="page-link" href="#">30</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Itens da loja -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row row-cols-1 row-cols-md-2">
                        <?php for ($i = 0; $i < 4; $i++) {
                            require('includes/components/produto-item.php');
                        }
                        ?>
                    </div>
                </div>
                <div class="filtros offset-md-1 col-md-3 d-none d-md-block">
                    <label for="Range" class="form-label text-muted">Filtrar por Preço</label>
                    <input type="range" class="form-range" id="Range">
                    <p>Preço: R$20.00 - R$1329.00</p>
                    <div class="filtro-categoria d-flex flex-column mt-4 gap-2">
                        <h4>Categoria</h4>
                        <a href="#" class="text-dark">Apple</a>
                        <a href="#" class="text-dark">Roupas <i class="bi bi-caret-down-fil
                        l"></i></a>
                        <a href="#" class="text-dark ms-4">Acessorios</a>
                        <a href="#" class="text-dark ms-4">Moletons</a>
                        <a href="#" class="text-dark ms-4">Camisas</a>
                        <a href="#" class="text-dark">Samsung</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ordenação Inferior -->
    <div class="container">
        <div class="row my-5">
            <div class="d-flex align-items-center gap-4 filtro-bloco">
                <div class="ordenacao">
                    <select class="form-select border-0">
                        <option selected>Recomendados</option>
                        <option value="1">Mais Escolhidos</option>
                        <option value="2">Preço Baixo Para Preço Alto</option>
                        <option value="3">Preço Alto Para Preço Baixo</option>
                    </select>
                </div>
                <p class="text-muted mb-0">Mostrar 1-4 de 30 resultados</p>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link bg-primary" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">28</a></li>
                        <li class="page-item"><a class="page-link" href="#">29</a></li>
                        <li class="page-item"><a class="page-link" href="#">30</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</main>







<?php require_once('includes/footer.php'); ?>