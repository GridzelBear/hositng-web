
<?php echo "
    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark fixed-top\">
        <a href=\"index.php\" class=\"navbar-brand\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav auto\">";
                foreach ($leftNavItems as $item) {
                    echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
                }
        echo "
            </ul>
            
            <ul class=\"navbar-nav ml-auto\"> <br>";
                foreach ($rightNavItems as $item) {
                        echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
                }
        echo "
            </ul> 
        </div>
    </nav>"
?>