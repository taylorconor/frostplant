<?php

date_default_timezone_set('UTC');

define("ROOT", "frostplant.com");

function generateHeader() {
    return  "<header class=\"page-header\" onclick=\"window.location.href='http://".ROOT."'\">"
            .    "<div class=\"inner\">"
			.	    "<img src=\"http://".ROOT."/files/images/banner.png\" style=\"max-width: 50%\" />"
            .       "<a href=\"https://github.com/taylorconor\"><img class=\"github-banner\" src=\"https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67\" alt=\"Fork me on GitHub\" data-canonical-src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png\"></a>"
            .    "</div>"
            ."</header>";
}

function generateFooter() {
    return  "<div class=\"footer\">"
            .   "&copy; <img src=\"http://".ROOT."/files/images/footer-logo.png\" /> 2014 "
            .   "<iframe frameborder=0 style=\"margin-left: 0px; margin-top:-15px; width:100px; height:20px\" src=\"http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FFrostplant&send=false&layout=button_count&width=405&show_faces=false&action=like&colorscheme=light&font&height=21&appId=139034376110394\">Like</iframe>"
            ."</div>";
}

?>
