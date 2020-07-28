<?php

use yii\helpers\Html;
?>

<style>
    /*******************************
* MODAL AS LEFT/RIGHT SIDEBAR
* Add "left" or "right" in modal parent div, after class="modal".
* Get free snippets on bootpen.com
*******************************/
	.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: -320px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}
        
/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

/* ----- v CAN BE DELETED v ----- */
body {
	background-color: #78909C;
}

.demo {
	padding-top: 60px;
	padding-bottom: 110px;
}

.btn-demo {
	margin: 15px;
	padding: 10px 15px;
	border-radius: 0;
	font-size: 16px;
	background-color: #FFFFFF;
}

.btn-demo:focus {
	outline: 0;
}

.demo-footer {
	position: fixed;
	bottom: 0;
	width: 100%;
	padding: 15px;
	background-color: #212121;
	text-align: center;
}

.demo-footer > a {
	text-decoration: none;
	font-weight: bold;
	font-size: 16px;
	color: #fff;
}
</style>

<!-- Header Section -->
<header class="header-section">
    <a href="index.php" class="site-logo">
        <?= Html::img('@web/mondy/img/logo.png', ['width' => '150', 'height' => '43']) ?>
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><?= Html::a('Home', ['/site'], ['class' => 'active']); ?></li>
            <li><?= Html::a('About', ['/site/about']); ?></li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><?= Html::a('About', ['/site/test']); ?></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="single-property.html">Property</a></li>
                </ul>
            </li>
            <li><?= Html::a('Contact', ['/site/contact']); ?></li>
        </ul>
        <div class="header-right">
            <div class="user-panel">
                <?= Html::a('Login', ['/site/login'], ['class' => 'register']); ?>
            </div>
        </div>
    </nav>
</header>

<body style="margin-top: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-8">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, pariatur!
            </div>
            <div class="col-4">
                Lorem ipsum dolor sit. <br>
                <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#myModal2">
                    Right Sidebar Modal
                </button>
            </div>
            <!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body" style="height: 85%">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
                </div>
                <div class="modal-footer">
                    <input type="text" class="form-control" placeholder="ask my anything">
                </div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
        </div>

</body>