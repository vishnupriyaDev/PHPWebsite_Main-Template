<?php $this->load->view('header');?>
    <div id="page">
        <ul id="slider">
            <li><img src="<?= base_url("static/images/s1.jpg");?>"></li>
            <li><img src="<?= base_url("static/images/s2.jpg");?>"></li>
            <li><img src="<?= base_url("static/images/s3.jpg");?>"></li>
        </ul>
    </div>
    <div class="content">
        <div class="box">
        <h1>Pellentesque habitant morbi tristique senectus</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div class="prev-box">
        <h2>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam</h2>
        <div class="prev"><img src="<?= base_url("static/images/s12.jpg");?>"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="grids">
    	<ul>
        	<li><img src="<?= base_url("static/images/s11.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
        	<li><img src="<?= base_url("static/images/s22.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
        	<li><img src="<?= base_url("static/images/s33.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
			<div class="clear"></div>
        	<li><img src="<?= base_url("static/images/s44.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
        	<li><img src="<?= base_url("static/images/s55.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
        	<li><img src="<?= base_url("static/images/s66.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
			<div class="clear"></div>
        	<li><img src="<?= base_url("static/images/s11.jpg");?>">
            <span>001</span>
            <h3><a href="#">Author Name</a></h3>
            </li>
        </ul>
    </div>
    <div class="paginate">
    	<ul>
        	<li><a href="#">Prev</a></li>
        	<li><a href="#">1</a></li>
        	<li><a href="#">2</a></li>
        	<li><a href="#">3</a></li>
        	<li><a href="#">4</a></li>
        	<li><a href="#">5</a></li>
        	<li><a href="#">Next</a></li>
        </ul>
    </div>
    <?php $this->load->view('footer');?>
    