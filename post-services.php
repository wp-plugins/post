<?php

$displayTypes = array(
    'icons-small' => array(
        'type' => 'icon',
        'showtype' => 'icons',
        'size' => '16',
        'class' => 'pw-size-small',
        'label' => __('Icons 16×16 px', 'po.st'),
        ),
    'icons-medium' => array(
        'type' => 'icon',
        'showtype' => 'icons',
        'size' => '24',
        'class' => 'pw-size-medium',
        'label' => __('Icons 24×24 px', 'po.st'),
        ),
    'icons-large' => array(
        'type' => 'icon',
        'size' => '32',
        'showtype' => 'icons',
        'class' => 'pw-size-large',
        'label' => __('Icons 32×32 px', 'po.st'),
        ),
    'buttons-native' => array(
        'type' => 'expanded',
        'showtype' => 'buttons',
        'class' => 'pw-counter-none',
        'label' => __('Buttons without Counters', 'po.st'),
        ),
    'buttons-native-counter' => array(
        'type' => 'expanded',
        'showtype' => 'buttons',
        'class' => 'pw-counter-horizontal',
        'label' => __('Buttons + horizontal counters', 'po.st'),
        ),
    'buttons-native-counter-top' => array(
        'type' => 'expanded',
        'showtype' => 'buttons',
        'class' => 'pw-counter-vertical',
        'label' => __('Buttons + Vertical counters', 'po.st'),
        ),
    );

$orientationType = array(
    'horizontal' => array(
        'class' => 'pw-horizontal',
        'label' => __('Horizontal', 'po.st'),
        ),
    'vertical' => array(
        'class' => 'pw-vertical',
        'label' => __('Vertical float', 'po.st'),
        ),
    );

$positionType = array(
    'horizontal' => array(
        'above' => array(
            'class' => '',
            'label' => __('Above content', 'po.st'),
            ),
        'below' => array(
            'class' => '',
            'label' => __('Below content', 'po.st'),
            ),
        ),
    'vertical' => array(
        'left' => array(
            'class' => 'pw-float-left',
            'label' => __('Left side', 'po.st'),
            ),
        'right' => array(
            'class' => 'pw-float-right',
            'label' => __('Right side', 'po.st'),
            ),
        ),
    );

$avServices = array(
    'facebook' => array(
        'name' => __('Facebook', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-facebook'
            ),
        'expanded' => array(
            'class' => 'pw-button-facebook pw-look-native'
            ),
        'button' => array(
            'class' => 'pw-button-facebook-like'
            ),
        'counter' => 1,
        ),
    'googleplus' => array(
        'name' => __('Google+', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-googleplus'
            ),
        'expanded' => array(
            'class' => 'pw-button-googleplus pw-look-native'
            ),
        'button' => array(
            'class' => 'pw-button-google-plus'
            ),
        'counter' => 1,
        ),
    'pinterest' => array(
        'name' => __('Pinterest', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-pinterest'
            ),
        'expanded' => array(
            'class' => 'pw-button-pinterest pw-look-native'
            ),
        'button' => array(
            'class' => 'pw-button-pinterest-share'
            ),
        'counter' => 1,
        'extra' => array(
            'global' => array(
                "pw:image='[IMAGEURL]'"
                ),
            'local' => array(
                )
            ),
        ),
    'post' => array(
        'name' => __('<strong>Post</strong> (pop-up)', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-post'
            ),
        'expanded' => array(
            'class' => 'pw-button-post-share'
            ),
        'button' => array(
            'class' => 'pw-button-post-share'
            ),
        'counter' => 1,
        ),
    'linkedin' => array(
        'name' => __('LinkedIn', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-linkedin'
            ),
        'expanded' => array(
            'class' => 'pw-button-linkedin pw-look-native'
            ),
        'button' => array(
            'class' => 'pw-button-linkedin-share'
            ),
        'counter' => 1,
        ),
    'twitter' => array(
        'name' => __('Twitter', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-twitter'
            ),
        'expanded' => array(
            'class' => 'pw-button-twitter pw-look-native'
            ),
        'button' => array(
            'class' => 'pw-button-twitter-twitt'
            ),
        'counter' => 1,
        ),

    'email' => array(
        'name' => __('Email', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-email'
            ),
        ),
    'print' => array(
        'name' => __('Print', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-print'
            ),
        ),
    'stumbleupon' => array(
        'name' => __('StumbleUpon', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-stumbleupon'
            ),
        ),
    'favorites' => array(
        'name' => __('Favorites', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-favorites'
            ),
        ),
    'googlebookmarks' => array(
        'name' => __('Google Bookmarks', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-googlebookmarks'
            ),
        ),
    'msmessenger' => array(
        'name' => __('MS Messenger', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-msmessenger'
            ),
        ),
    'myspace' => array(
        'name' => __('MySpace', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-myspace'
            ),
        ),
    'delicious' => array(
        'name' => __('Delicious', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-delicious'
            ),
        ),
    'digg' => array(
        'name' => __('Digg', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-digg'
            ),
        ),
    'orkut' => array(
        'name' => __('Orkut', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-orkut'
            ),
        ),
    'gmail' => array(
        'name' => __('GMail', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-gmail'
            ),
        ),
    'blogger' => array(
        'name' => __('Blogger', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-blogger'
            ),
        ),
    'reddit' => array(
        'name' => __('Reddit', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-reddit'
            ),
        ),
    'yahoomail' => array(
        'name' => __('Yahoo Mail', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-yahoomail'
            ),
        ),
    'tumblr' => array(
        'name' => __('Tumblr', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-tumblr'
            ),
        ),
    'hotmail' => array(
        'name' => __('Hotmail', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-hotmail'
            ),
        ),
    'aolmail' => array(
        'name' => __('AOL Mail', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-aolmail'
            ),
        ),
    'livejournal' => array(
        'name' => __('LiveJournal', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-livejournal'
            ),
        ),
    'aollifestream' => array(
        'name' => __('AOL LifeStream', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-aollifestream'
            ),
        ),
    'wordpress' => array(
        'name' => __('WordPress', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-wordpress'
            ),
        ),
    'vkontakte' => array(
        'name' => __('VKontakte', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-vkontakte'
            ),
        ),
    'baidu' => array(
        'name' => __('Baidu', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-baidu'
            ),
        ),
    'mailru' => array(
        'name' => __('Mail.ru', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-mailru'
            ),
        ),
    'hyves' => array(
        'name' => __('Hyves', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-hyves'
            ),
        ),
    'xing' => array(
        'name' => __('Xing', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-xing'
            ),
        ),
    'meinvz' => array(
        'name' => __('MeinVZ', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-meinvz'
            ),
        ),
    'skyrock' => array(
        'name' => __('Skyrock', 'po.st'),
        'icon' => array(
            'class' => 'pw-button-skyrock'
            ),
        ),
    );
    
?>