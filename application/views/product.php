    <div class="container_base">


        <div class="section">

            <div class="row">
                <p class="col s12"><span id="details_title"><?= $product->title ?></span><span id="details_title" style="position: relative; float: right;"><?= $product->price ?> LEI</span></p>
                <div class="col s8">
                    <img class="img_landscape" src="/assets/img/products/<?= $product->image ?>" />
                    <p><span id="details_text"><?= $product->description ?></span></p>
                </div>
                <div class="col s3 ">
                    <a class="waves-effect waves-light btn-large row blue white-text text-darken-4" id="details_btn" style="width:400px" href="/product/id/<?= $product->productID ?>/sold">BUY</a>
                    <div id="gmap">
                        <span id="details_percentage">Buy from store</span>
                        <img src="/assets/img/map.jpg" style="width:400px;height:400px;" />
                    </div>
                </div>
            </div>


        </div>

    </div>