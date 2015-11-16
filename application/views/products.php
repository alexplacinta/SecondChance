<div class="container_base">


    <div class="section">


        <div class="row">


            <ul class="collection col s2">
                <a href="#!" class="collection-item black-text text-lighten-4">ALL<span class="badge">3</span></a>
                <a href="#!" class="collection-item black-text text-lighten-4">50 LEI<span class="badge">1</span></a>
                <a href="#!" class="collection-item black-text text-lighten-4">100 LEI<span class="badge">1</span></a>
                <a href="#!" class="collection-item black-text text-lighten-4">200 LEI<span class="badge">1</span></a>
                <a href="#!" class="collection-item black-text text-lighten-4">1000 LEI<span class="badge">0</span></a>
            </ul>

            <div class="col s10" >
        <?php $counter = 0; ?>
        <div class="row">
            <?php foreach($products as $key => $product) { ?>
                <?php $counter++; ?>



                    <a href="/product/id/<?= $product->productID ?>">
                        <div class="col s3 offset-3 product">
                            <div class="card product">
                                <div class="card-image">
                                    <img src="/assets/img/products/<?= $product->image ?>">
                                    <div class="product_title"><?= $product->title ?></div>
                                </div>
                                <div class="center product_info">
                                    <a href="#"><?= $product->price ?> LEI</a>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>


        </div>


        <div style="width: 100%; text-align: center;">
            <ul class="pagination" style="">
                <li class="disabled"><a href="#!"><i class="material-icons"><</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">></a></li>
            </ul>
        </div>
    </div>
</div>
        </div>
    </div>