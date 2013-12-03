<div class="container">
    <div class="row">
        <div class="span12">
            <h2>Gallery</h2>
        </div>
    </div>
        
    <?php
    $imageNumber = 0;
    foreach($config['gallery'] as $name=>$category)
    {
        echo '
        <div class="row">
            <h5 class="">'.$name.'</h5>
        </div>
        <div class="row">
            <ul class="thumbnails">
        ';
        
        foreach($category as $item)
        {
            echo '
            <li class="span3">
                <a class="thumbnail" href="#galleryLightbox'.$imageNumber.'" data-toggle="lightbox">
                    <img alt="260x180" src="'.$item['path'].'" style="width: 260px; height: 180px;">
                </a>
                <div id="galleryLightbox'.$imageNumber.'" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="lightbox-content">
                        <img src="'.$item['path'].'">
                        <div class="lightbox-caption"><p>'.$item['caption'].'</p></div>
                    </div>
                </div>
            </li>
            ';
            
            $imageNumber++;
        }
        
        echo '
            </ul>
        </div>
        ';
    }
    
    ?>
<!--    <div class="row">
        <ul class="thumbnails">
            <li class="span3">
                <a class="thumbnail" href="#galleryLightbox1" data-toggle="lightbox">
                    <img alt="260x180" src="/img/gallery/cleaning_1_1.jpg" style="width: 260px; height: 180px;">
                </a>
                <div id="galleryLightbox1" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class='lightbox-content'>
                        <img src="/img/gallery/cleaning_1_1.jpg">
                        <div class="lightbox-caption"><p>Your caption here</p></div>
                    </div>
                </div>
            </li>
            <li class="span3">
                <a class="thumbnail" href="#galleryLightbox2" data-toggle="lightbox">
                    <img alt="260x180" src="/img/gallery/cleaning_1_2.jpg" style="width: 260px; height: 180px;">
                </a>
                <div id="galleryLightbox2" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class='lightbox-content'>
                        <img src="/img/gallery/cleaning_1_2.jpg">
                        <div class="lightbox-caption"><p>Your caption here</p></div>
                    </div>
                </div>
            </li>
        </ul>   
    </div>-->
</div>