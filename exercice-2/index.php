<?php
/**
 * Plugin Name: Test Plugin
 */

function render_social_network(){ ?>
    <ul>
        <li><span>Facebook : </span><a href="https://facebook.com">https://facebook.com</a></li>
        <li><span>Instagram.com: </span><a href="https://instagram.com">https://instagram.com</a></li>
        <li><span>Linkedin : </span><a href="https://www.linkedin.com">https://www.linkedin.com</a></li>
        <li><span>GitHub : </span><a href="https://github.com/honoagency">https://github.com/honoagency</a></li>
    </ul>
    <?php

}

add_shortcode('show_social_network', 'render_social_network');