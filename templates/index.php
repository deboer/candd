<div class="container">
	<div class="row">
		<div class="span12">
			<div class="carousel slide" id="carousel-789872">
				<ol class="carousel-indicators">
                    <?php
                    foreach($config['slideshow'] as $key=>$item)
                    {
                        echo '<li data-slide-to="'.$key.'" data-target="#carousel-789872" class="'.($key == 0 ? "active" : null).'"></li>';
                    }
//					<li data-slide-to="0" data-target="#carousel-789872" class="active">
//					</li>
//					<li data-slide-to="1" data-target="#carousel-789872">
//					</li>
//					<li data-slide-to="2" data-target="#carousel-789872" >
//					</li>
//                    <li data-slide-to="3" data-target="#carousel-789872" >
//					</li>
//                    <li data-slide-to="4" data-target="#carousel-789872" >
//					</li>
                    ?>
				</ol>
				<div class="carousel-bg-right">&nbsp;</div>
				<div class="carousel-bg-left">&nbsp;</div>
				<div class="carousel-inner">
                    <?php
                    foreach($config['slideshow'] as $key=>$item)
                    {
                        echo '
                        <div class="item '.($key == 0 ? "active" : null).'">
                            <img alt="" src="'.$item['path'].'">
                            <div class="carousel-caption">
                                <h4>
                                    '.$item['label'].'
                                </h4>
                                <p>
                                    '.$item['text'].'
                                </p>
                            </div>
                        </div>';
                    }
                    ?>
				</div> 
                <a data-slide="prev" href="#carousel-789872" class="left carousel-control"><img src="/img/arrow-left.png" /></a> 
                <a data-slide="next" href="#carousel-789872" class="right carousel-control"><img src="/img/arrow-right.png" /></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span6">
			<h2>
				Who we are...
			</h2>
			<p>
                C &amp; D Roofing &amp; Property Maintenance is a family run business with over 35 years experience specialising in Domestic roofing and property maintenance. We pride ourselves on carrying out quality work and providing good customer service.<br/><br/>
                We provide FREE estimates with no obligation and Guarantee all work carried out.<br/>
                All our work carried out is done so Fully Insured
			</p>
		</div>
		<div class="span3">
			<h2>
				Specialising in:
			</h2>
			<p>
                <ul>
                    <li>Roof Repairs</li>
                    <li>Tiling &amp; Slating</li>
                    <li>Felt Flat Roofs</li>
                    <li>Roof Cleaning</li>
                    <li>Lead Works</li>
                    <li>Velux Windows</li>
                </ul>
			</p>

		</div>
        <div class="span3">
            <h2>
                &nbsp;
            </h2>
            <p>
                <ul>
                    <li>Gardening &amp; Decking</li>
                    <li>Decorating</li>
                    <li>Fascia &amp; Guttering</li>
                    <li>Chimneys</li>
                    <li>Solar panel installation</li>
                </ul>
            </p>
        </div>
    </div>
	<div class="row  yellow-bar">&nbsp;</div>
	<div class="row">
		<div class="span9">
			<h2>
				Roof cleaning...
			</h2>
			<p>
				Our roof cleaning service is a process which gives your roof a new lease of life, increasing the life span of your roof, and immediately enhancing the appearance of your home.
			</p>
            <p>
				<a href="<?php echo Helpers::buildUrl(ROUTE_CLEANING); ?>" class="yellow-color-link">read more</a>
			</p>
		</div>
		<div class="span3">
			<img alt="140x140" src="<?php echo $config['landing_page']['index']['cleaning']['img_path']; ?>" class="img-polaroid pull-right">
		</div>
	</div>
	
	<div class="row  yellow-bar">&nbsp;</div>
	
	<div class="row">
		<div class="span6">
            <img alt="140x140" src="/img/map.png" class="pull-left">
            <span class="span4" >
                Covering the whole of West and East Sussex including:<br/>
                Brighton and Hove, Lewes, Seaford,
                Saltdean, Peacehaven, Shoreham,
                Lancing, Portslade, Burgess Hill,
                Haywards Heath, Hassocks, Worthing,
                Littlehampton, Small Dole 
            </span>
		</div>
		<div class="span6">
			<h2>
				Testimonials
			</h2>
			<p>
				I have used C &amp; D roofing and property maintenance for all my roofing and maintenance needs, 
				over the past few years. They have repaired my roof, renewed my guttering and fascias, and even painting and decorating within my home.
			</p>
			<p>
				<a href="<?php echo Helpers::buildUrl(ROUTE_TESTIMONIALS); ?>" class="yellow-color-link">read more</a>
			</p>
		</div>
	</div>
</div>