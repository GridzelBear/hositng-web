
<?php
    echo "
        <div id=\"pricing-table\" class=\"clear\">
            <div id=\"pricing-table\" class=\"clear\">";
        foreach($planPrices as $plan) { echo "
                <div class=\"plan\" $plan[id]>
                    <h3>$plan[name]<span>$plan[price]</span></h3>
                    <a class=\"signup\" href=\"$plan[slug]\">Select Plan</a>
                    <ul>
                        <li><b>$plan[diskSpace]</b> Disk Space</li>
                        <li><b>$plan[bandwidth]</b> Monthly Bandwidth</li>
                        <li><b>$plan[emailAmounts]</b> Email Accounts</li>
                        <li><b>$plan[subdomainsNum]</b> subdomains</li>
                    </ul>
                </div>";
        }
    echo "
            </div>
        </div>";
?>
