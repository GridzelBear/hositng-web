
<?php
    echo "
    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">";
        foreach ($carouselContents as $content) { echo "
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$content[slide]\" class=\"$content[classActive]\"></li>";
        }
    echo "
        </ol>

        <div class=\"carousel-inner\">";
        foreach ($carouselContents as $content) { echo "
            <div class=\"carousel-item $content[classActive]\">
                <img class=\"d-block w-100 auto\" src=\"$content[image]\" alt=\"$content[side]\"/>
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5 class=\"animated fadeInUp\" style=\"animation-delay: 0.5s;\">
                        $content[title]
                    </h5>
                    <p class=\"animated fadeInUp\" style=\"animation-delay: 0.5s;\">$content[description]</p>
                    <p><a href=\"#\">More Info</a></p>
                </div>
            </div>";
        }
    echo "
        </div>        
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>";
?>
