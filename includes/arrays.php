<!-- TODO: This file would be better if it was stored in the database. That way it could be change by employees any times. -->

<?php
    $leftNavItems = [
        [
            "slug" => "index.php",
            "title"=> "Home"
        ],
        [
            "slug" => "#",
            "title"=> "Order"
        ],
        [
            "slug" => "#",
            "title"=> "FAQ"
        ],
        [
            "slug" => "https://discord.gg/cW86mPG",
            "title"=> "Discord"
        ],
        [
            "slug" => "#",
            "title"=> "News"
        ]
    ];

    // TODO: This need to be based on users role.
    $rightNavItems = [
        [
            "slug" => "#",
            "title"=> "Login"
        ],
        [
            "slug" => "#",
            "title"=> "Logout"
        ],
        [
            "slug" => "#",
            "title"=> "Register"
        ],
        [
            "slug" => "#",
            "title"=> "Workspace"
        ],
        [
            "slug" => "#",
            "title"=> "Control Panel"
        ]
    ];

    $planPrices = [
        [
            "id" => "",
            "name" => "Enterprise",
            "price" => "$59",
            "slug" => "#",
            "diskSpace" => "10GB",
            "bandwidth" => "100GB",
            "emailAmounts" => "20",
            "subdomainsNum" => "Unlimited"
        ],
        [
            "id" => "id=\"most-popular\"",
            "name" => "Professional",
            "price" => "$29",
            "slug" => "#",
            "diskSpace" => "5GB",
            "bandwidth" => "50GB",
            "emailAmounts" => "10",
            "subdomainsNum" => "Unlimited"
        ],
        [
            "id" => "",
            "name" => "Standard",
            "price" => "$17",
            "slug" => "#",
            "diskSpace" => "3GB",
            "bandwidth" => "25GB",
            "emailAmounts" => "5",
            "subdomainsNum" => "Unlimited"
        ],
        [
            "id" => "",
            "name" => "Basic",
            "price" => "$9",
            "slug" => "#",
            "diskSpace" => "1GB",
            "bandwidth" => "10GB",
            "emailAmounts" => "2",
            "subdomainsNum" => "Unlimited"
        ]
    ];

    $carouselContents = [
        [
            "slide" => "0",
            "classActive" => "active",
            "image" => "./images/half-life.jpg",
            "side" => "First slide",
            "title" => "Half-Life",
            "description" => "Half-Life is a first-person shooter game developed by Valve and published by Sierra Studios for Windows in 1998. It was Valve's debut product and the first game in the Half-Life series."
        ],
        [
            "slide" => "1",
            "classActive" => "",
            "image" => "./images/half-life-2.jpg",
            "side" => "Second slide",
            "title" => "Half-Life 2",
            "description" => "Half-Life 2 is a 2004 first-person shooter game developed and published by Valve. Like the original Half-Life, it combines shooting, puzzles, and storytelling, and adds features such as vehicles and physics-based gameplay. Players control Gordon Freeman, who fights the alien Combine with allies including resistance fighter Alyx Vance, using weapons such as the object-manipulating gravity gun."
        ],
        [
            "slide" => "2",
            "classActive" => "",
            "image" => "./images/half-life-alyx.jpg",
            "side" => "Third slide",
            "title" => "Half-Life Alyx",
            "description" => "Half-Life: Alyx is a 2020 virtual reality (VR) first-person shooter developed and published by Valve. Set between the events of Half-Life (1998) and Half-Life 2 (2004), players control Alyx Vance on a mission to seize a superweapon belonging to the alien Combine."            
        ]
    ];

?>
