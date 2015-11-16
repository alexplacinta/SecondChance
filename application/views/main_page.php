<div class="landing_image ">
    <div >
        <img class="img_landscape" src="/assets/img/cover.jpg" />
    </div>
</div>
<div class="container_base">

<!--    <div class="row">-->
<!--        <span class="category">Products</span>-->
<!--        <span class="category">|</span>-->
<!--        <span class="category">Projects</span>-->
<!--    </div>-->
    <div class="section">
        <?php $counter = 0; ?>
        <div class="row">
        <?php foreach($projects as $key => $project) { ?>
            <?php $counter++; ?>


<!--            --><?php //for($i = 0; $i <= 3; $i++) { ?>
               <a href="/project/id/<?= $project->projectID ?>">
                <div class="col s3 card_size">
                    <div class="card card_size">
                        <div class="card-image">
                            <img src="/assets/img/<?= $project->image ?>">
                            <div class="title"><?= $project->title ?></div>
                        </div>
                        <div class="card_details">
                            <p><?= mb_substr($project->description, 0, 90)?>...</p>
                        </div>
                        <div class="progress_lay">
                            <span class="left progress_now" id="summ"><?php if (isset($project->collected_money)) echo $project->collected_money; else echo 0; ?> LEI</span>
                            <span class="right progress_max" id="total"><?= $project->funding_target ?> LEI </span>
                            <div class="progress">
                                <div class="determinate yellow" style="width: <?= ($project->collected_money + $project->assets_value)/ $project->funding_target*100 ?>%"></div>
                                <div class="determinate green" style="width: <?= $project->collected_money/$project->funding_target*100 ?>%"></div>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="#">Informatii</a>
                        </div>
                    </div>
                </div>
                </a>
<!--            --><?php //} ?>
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