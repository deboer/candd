<div class="footer yellow-bg">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h4>
					CONTACT
				</h4>
				<p>
					<strong>Doug:</strong> <?php echo $config['phone']['main'];?><br/>
					<strong>Chad:</strong> <?php echo $config['phone']['secondary'];?><br/>
                    
                    <address>
                        <strong>Address:</strong><br/>
                        <?php echo $config['address'];?>
                    </address>
					
					<strong>Email:</strong> <?php echo $config['email'];?>
				</p>
			</div>
			<div class="span3">
				<h4>
					LEGAL
				</h4>
				<p>
					<ul class="unstyled">
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_ESTIMATES); ?>">ESTIMATES</a></li>
					</ul>
				</p>
			</div>
			<div class="span3">
				<h4>
					MORE LINKS
				</h4>
				<p>
					<ul class="unstyled">
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_INDEX); ?>">HOME</a></li>
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_SERVICES); ?>">SERVICES</a></li>
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_ABOUT_US); ?>">ABOUT US</a></li>
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_GALLERY); ?>">GALLERY</a></li>
						<li><a href="<?php echo Helpers::buildUrl(ROUTE_CONTACT); ?>">CONTACT US</a></li>
					</ul>	
				</p>
			</div>
			<div class="span3">
				<h4>
					TESTIMONIALS
				</h4>
				<p>
					Check out our testimonials to see what our previous clients have said about us. <br/><a href="<?php echo Helpers::buildUrl(ROUTE_TESTIMONIALS); ?>">Click here</a>
                    <br/><br/>
                     <a href="http://www.checkatrade.com/CAndDRoofingAndPropertyMainte" target="_blank">
                        <img src="http://www.checkatrade.com/Reputation/API/CAndDRoofingAndPropertyMainte.png" alt="Checkatrade information for C & D Roofing & Property Maintenance Ltd" style="width:80%;"/>
                     </a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="span6">
			</div>
			<div class="span6">
				<p>
					Project: <a target="_blank" rel="follow" href="http://dudz1okdesign.pl/"><img width="36" height="28" style="" alt="DuDz1oKDesign, dudz1ok, design, grafika-tarnów" src="http://www.unia.tarnow.pl/images/dudziokdesign.png"></a><br/>
					Copyright &copy; C &amp; D Roofing &amp; Property Maintenance, All rights reserved
				</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>