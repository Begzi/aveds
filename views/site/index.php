

<div class="site-index">

    <div class="container">
        <?php foreach ($workers as $worker):?> 
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <h4>
                        <span>ФИО работника: </span>
                        <a href="<?= \yii\helpers\Url::to(['/site/view','id' => $worker->id])?>">
                            <span >
                                <?php echo $worker->fullname?>
                            </span>
                        </a>
                    </h4>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4>
                        <span >
                            <?php echo $worker->email?>
                        </span>                       
                    </h4>
                </div>
            </div>
        <?php endforeach;?>
            

    </div>
</div>
