<div class="container">
    <div class="row">
        <div class="span8">
            <h2>
                Testimonials
            </h2>
            <p>
                <?php
                foreach($config["testimonials"] as $testimonial)
                {
                    echo "
                    <blockquote>
                        <p>".$testimonial['text']."</p>
                        <p><small>".$testimonial['client']."</small></p>
                    </blockquote>
                    ";
                }
                ?>
            </p>
        </div>
        <div class="span4">
            <img alt="140x140" src="<?php echo $config['landing_page']['testimonials']['first']['img_path']; ?>" class="img-polaroid pull-right">
            <div style="clear:both;">&nbsp;</div>
            <img alt="140x140" src="<?php echo $config['landing_page']['testimonials']['second']['img_path']; ?>" class="img-polaroid pull-right">
        </div>
    </div>
</div>