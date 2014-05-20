<?php

date_default_timezone_set('UTC');

define("ROOT", "frostplant.com");

function generateHeader() {
    return  "<header class=\"page-header\" onclick=\"window.location.href='http://".ROOT."'\">"
            .    "<div class=\"inner\">"
			.	    "<img src=\"http://".ROOT."/files/images/banner.png\" style=\"max-width: 50%\" />"
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
