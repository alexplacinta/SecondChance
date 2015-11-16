<div class="container_base">


    <div class="section">

        <div class="row">
            <p class="col s12"><span id="details_title"><?= $project->title ?></span></p>
            <div class="col s8">
                <img class="img_landscape" src="/assets/img/<?= $project->image ?>" />
                <p><span id="details_text"><?= $project->description ?></div>
            <div class="card col s3">
                <div class="progress_lay row">
                    <div class="row">
                        <span class="left progress_now" id="details_summ"><?php if (isset($project->collected_money)) echo $project->collected_money; else echo 0; ?> </span>
                        <div style="padding-top: 40px;">LEI</div>
                    </div>
                    <div class="progress">
                        <div class="determinate yellow darken-4" style="width: <?= ($project->collected_money + $project->assets_value)/ $project->funding_target*100 ?>%"></div>
                        <div class="determinate green" style="width: <?= $project->collected_money/$project->funding_target*100 ?>%"></div>
                    </div>
                    <div id="percentage details_percentage"><?= round($project->collected_money/ $project->funding_target*100, 2) ?>% out of <?= $project->funding_target ?> LEI fixed goal</div>
                    <div id="percentage details_percentage"> <?= round(($project->collected_money + $project->assets_value)/ $project->funding_target*100, 2) ?>% covered with unsold assets</div>
                </div>

                <div class="card-action row">
                    <h6 style="color: green; font: bold; text-align: center;"><?= $message ?></h6>
                    <input type="number" value="0" style="width: 80%;" id="money"> LEI
                    <a class="waves-effect waves-light btn-large row blue white-text text-darken-4 details_btn" id="donate">Donate</a>
<!--                    <a class="waves-effect waves-light btn-large row green white-text text-darken-4 details_btn">Support project</a>-->
                </div>
                <h3 style="text-align: center;margin-top: -30px;">OR</h3>
                <span class="row" id="details_support_by_buy">Buy for second chance</span>
                <?php foreach($project->products as $product) { ?>
                    <a href="/product/id/<?= $product->productID ?>">
                    <div class="card product row">
                        <div class="card-image">
                            <img src="/assets/img/products/<?= $product->image ?>">
                            <div class="product_title"><?= $product->title ?> </div>
                        </div>
                        <div class="center product_info">
                            <a href="#"><?= $product->price ?> LEI</a>
                        </div>
                    </div>
                    </a>
                <?php } ?>
<!--                <span class="row" id="details_buy_more">More products </span>-->
            </div>
        </div>
    </div>



</div>
<script>
    $('#donate').click(function(e){
       location.href = "/project/donate/"+$('#money').val()+'/<?= $project->projectID ?>'
    });
</script>