

<div class="site-index">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-8">
                <h4>
                    <span >
                        ФИО работника: <?php echo $worker->fullname?>
                    </span>
                </h4>
            </div>
            <div class="col-xs-12 col-md-4 pull-right" >
            	<img src="photo/<?php echo $worker->id . '/' . $worker->photo_link?>" width="300" height="300">
            </div>
        </div>        
        <div class="row">  	
            <div class="col-xs-12 col-md-6">
                <h4>
                    <span >
                        Полных лет: <?php echo $worker->old?>
                    </span>                       
                </h4>
            </div>
            <div class="col-xs-12 col-md-6">
                <h4>
                    <span >
                        Почта: <?php echo $worker->email?>
                    </span>                       
                </h4>
            </div>
        </div>
        <div class="row">  	
            <div class="col-xs-12 col-md-6">
                <h4>
                    <span >
                        Опыт работы: <?php echo $worker->experience?>
                    </span>                       
                </h4>
            </div>
            <div class="col-xs-12 col-md-6">
                <h4>
                    <span >
                        Средняя зарплата: <?php echo $worker->average_salary?>
                    </span>                       
                </h4>
            </div>
        </div>
    </div>
</div>
