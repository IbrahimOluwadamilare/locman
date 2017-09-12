<?php
$consulting_config = consulting_config();
?>

<?php
$layouts = array(
    'one' => array(
        'number'	=> 'one',
        'url'	    => 'http://consulting.stylemixthemes.com',
        'img'		=> '1',
        'class'		=> 'demo_one',
        'type'		=> 'New York'
    ),
    'two' => array(
        'number'	=> 'two',
        'url'	    => 'http://consulting.stylemixthemes.com/two',
        'img'		=> '6',
        'class'		=> 'demo_two',
        'type'		=> 'London'
    ),
    'three' => array(
        'number'	=> 'three',
        'url'	    => 'http://consulting.stylemixthemes.com/three',
        'img'		=> '9',
        'class'		=> 'demo_three',
        'type'		=> 'Frankfurt'
    ),
    'four' => array(
        'number'	=> 'four',
        'url'	    => 'http://consulting.stylemixthemes.com/four',
        'img'		=> '5',
        'class'		=> 'demo_four',
        'type'		=> 'Moscow'
    ),
    'five' => array(
        'number'	=> 'five',
        'url'	    => 'http://consulting.stylemixthemes.com/five',
        'img'		=> '2',
        'class'		=> 'demo_five',
        'type'		=> 'Shanghai'
    ),
    'six' => array(
        'number'	=> 'six',
        'url'	    => 'http://consulting.stylemixthemes.com/six',
        'img'		=> '7',
        'class'		=> 'demo_six',
        'type'		=> 'Madrid'
    ),
    'seven' => array(
        'number'	=> 'seven',
        'url'	    => 'http://consulting.stylemixthemes.com/seven',
        'img'		=> '3',
        'class'		=> 'demo_seven',
        'type'		=> 'Tokyo'
    ),
    'eight' => array(
        'number'	=> 'eight',
        'url'	    => 'http://consulting.stylemixthemes.com/eight',
        'img'		=> '8',
        'class'		=> 'demo_eight',
        'type'		=> 'Seoul'
    ),
    'nine' => array(
        'number'	=> 'nine',
        'url'	    => 'http://consulting.stylemixthemes.com/nine',
        'img'		=> '4',
        'class'		=> 'demo_nine',
        'type'		=> 'Sydney'
    ),
    'ten' => array(
        'number'	=> 'ten',
        'url'	    => 'http://consulting.stylemixthemes.com/ten',
        'img'		=> '10',
        'class'		=> 'demo_ten',
        'type'		=> 'Hong Kong'
    ),
    'eleven' => array(
        'number'	=> 'eleven',
        'url'	    => 'http://consulting.stylemixthemes.com/eleven',
        'img'		=> '11',
        'class'		=> 'demo_eleven',
        'type'		=> 'Paris'
    ),
    'twelve' => array(
        'number'	=> 'twelve',
        'url'	    => 'http://consulting.stylemixthemes.com/twelve',
        'img'		=> '12',
        'class'		=> 'demo_twelve',
        'type'		=> 'Singapore'
    ),
    'thirteen' => array(
        'number'	=> 'thirteen',
        'url'	    => 'http://consulting.stylemixthemes.com/thirteen',
        'img'		=> '13',
        'class'		=> 'demo_thirteen',
        'type'		=> 'Sao Paulo'
    ),
    'fourteen' => array(
        'number'	=> 'fourteen',
        'url'	    => 'http://consulting.stylemixthemes.com/fourteen',
        'img'		=> '14',
        'class'		=> 'demo_fourteen',
        'type'		=> 'Abu Dhabi'
    ),
    'fifteen' => array(
        'number'	=> 'fifteen',
        'url'	    => 'http://consulting.stylemixthemes.com/fifteen',
        'img'		=> '15',
        'class'		=> 'demo_fifteen',
        'type'		=> 'Dublin'
    ),
    'sixteen' => array(
        'number'	=> 'sixteen',
        'url'	    => 'http://consulting.stylemixthemes.com/sixteen',
        'img'		=> '16',
        'class'		=> 'demo_sixteen',
        'type'		=> 'Tel Aviv'
    ),
    'seventeen' => array(
        'number'	=> 'seventeen',
        'url'	    => 'http://consulting.stylemixthemes.com/seventeen',
        'img'		=> '17',
        'class'		=> 'demo_seventeen',
        'type'		=> 'Dubai'
    ),
    'eighteen' => array(
        'number'	=> 'eighteen',
        'url'	    => 'http://consulting.stylemixthemes.com/eighteen',
        'img'		=> '18',
        'class'		=> 'demo_eighteen',
        'type'		=> 'Tehran'
    ),
    'nineteen' => array(
        'number'	=> 'nineteen',
        'url'	    => 'http://consulting.stylemixthemes.com/nineteen',
        'img'		=> '19',
        'class'		=> 'demo_nineteen',
        'type'		=> 'Oslo'
    ),
);
?>

<div id="frontend_customizer">
    <div class="customizer_wrapper">
        <h3><?php esc_html_e('Demos', 'consulting'); ?></h3>
        <div class="customizer_element __demos">
            <select name="demos_switcher" id="demos_switcher" data-class="demos_switcher">
                <?php foreach($layouts as $itemKey=>$layoutItem): if( $itemKey != $layoutItem['class'] && $layoutItem['number']  && $layoutItem['url'] && $layoutItem['type'] ){ ?>
                    <option class="<?php echo $layoutItem['class']?>" demo-url="<?php echo $layoutItem['url']?>" value="<?php echo $layoutItem['number']?>"><?php echo $layoutItem['type']?></option>
                <?php } endforeach; ?>
            </select>
        </div>

        <?php if( $consulting_config['layout'] == 'layout_1' ) : ?>
            <h3><?php esc_html_e( 'Color Skin', 'consulting' ); ?></h3>
            <div class="customizer_element">
                <div class="customizer_colors" id="skin_color">
                    <span id="skin_default"></span>
                    <span id="skin_turquoise"></span>
                    <span id="skin_dark_denim"></span>
                    <span id="skin_arctic_black"></span>
                </div>
            </div>

            <h3><?php esc_html_e('Header Style', 'consulting'); ?></h3>
            <div class="customizer_element">
                <select name="header_style">
                    <option class="header_style_1" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_1&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 1', 'consulting' ); ?></option>
                    <option class="header_style_2" value="<?php echo esc_url( home_url( '/?header_demo=header_style_2' ) ); ?>"><?php esc_html_e( 'Style 2', 'consulting' ); ?></option>
                    <option class="header_style_3" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_3&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 3', 'consulting' ); ?></option>
                    <option class="header_style_4" value="<?php echo esc_url( home_url( '/home-2/?header_demo=header_style_4&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 4', 'consulting' ); ?></option>
                    <option class="header_style_5" value="<?php echo esc_url( home_url( '/?header_demo=header_style_5&hide_top_bar=1' ) ); ?>"><?php esc_html_e( 'Style 5', 'consulting' ); ?></option>
                    <option class="header_style_6" value="<?php echo esc_url( home_url( '/?header_demo=header_style_6' ) ); ?>"><?php esc_html_e( 'Style 6', 'consulting' ); ?></option>
                    <option class="header_style_7" value="<?php echo esc_url( home_url( '/?header_demo=header_style_7' ) ); ?>"><?php esc_html_e( 'Style 7', 'consulting' ); ?></option>
                </select>
            </div>

            <h3><?php esc_html_e('Nav Mode', 'consulting'); ?></h3>
            <div class="customizer_element">
                <div class="stm_switcher active" id="navigation_type">
                    <div class="switcher_label disable"><?php esc_html_e('Static', 'consulting'); ?></div>
                    <div class="switcher_nav"></div>
                    <div class="switcher_label enable"><?php esc_html_e('Sticky', 'consulting'); ?></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if( $consulting_config['layout'] != 'layout_10' && $consulting_config['layout'] != 'layout_12' ) : ?>
            <h3><?php esc_html_e('Layout', 'consulting'); ?></h3>
            <div class="customizer_element">
                <div class="stm_switcher" id="site_layout">
                    <div class="switcher_label disable"><?php esc_html_e('Wide', 'consulting'); ?></div>
                    <div class="switcher_nav"></div>
                    <div class="switcher_label enable"><?php esc_html_e('Boxed', 'consulting'); ?></div>
                </div>
            </div>

            <div class="customizer_bg_image" style="display: none;">
                <h3><?php esc_html_e('Background Image', 'consulting'); ?></h3>
                <div class="customizer_element">
                    <div class="customizer_colors" id="bg_images">
                        <span class="image_type active" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_1.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_1.png'); "></span>
                        <span class="image_type" data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_2.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_2.png'); "></span>
                        <span data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_3.png" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_3.png'); "></span>
                        <span data-image="<?php echo get_template_directory_uri(); ?>/assets/images/bg/img_4.png" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg/prev_img_4.png'); "></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div id="frontend_customizer_button"><i class="fa fa-cog"></i></div>

    <div class="customizer-demos">
        <div class="customizer-demos_screens">
            <?php foreach($layouts as $itemKey=>$layoutItem): ?>
                <div id="<?php echo (str_replace(' ', '-', strtolower('layout-'.$layoutItem['number']))); ?>" class="screen">
                    <a href="<?php echo $layoutItem['url']?>" data-loaded="false" data-img="http://consulting.stylemixthemes.com/landing/assets/img/demo/<?php echo $layoutItem['img']?>.jpg"></a>
                </div>
            <?php endforeach; ?>
        </div>
        <ul class="customizer-demos_list">
            <?php foreach($layouts as $itemKey=>$layoutItem): ?>
                <li data-layout="<?php echo (str_replace(' ', '-', strtolower('layout-'.$layoutItem['number']))); ?>">
                    <a demo-number="<?php echo $layoutItem['number']?>" class="active" href="<?php echo $layoutItem['url']?>"></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="stm-site-preloader preloader-wrapper big">
    <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function ($) {
    "use strict";

    $("#frontend_customizer_button").on('click', function () {
        if ($("#frontend_customizer").hasClass('open')) {
            $("#frontend_customizer").removeClass('open');
            $(this).find('.fa').removeClass('fa-spin');
        } else {
            $("#frontend_customizer").addClass('open');
            $(this).find('.fa').addClass('fa-spin');
        }
    });

    $('#main').on('click', function (kik) {
        if (!$(kik.target).is('#frontend_customizer, #frontend_customizer *') && $('#frontend_customizer').is(':visible')) {
            $("#frontend_customizer").removeClass('open');
            $(this).find('.fa').removeClass('fa-spin');
        }
    });

    <?php if( $consulting_config['layout'] == 'layout_1' ) : ?>

    $("#skin_color span").on('click', function () {
        var style_id = $(this).attr('id');
        $("#skin_color .active").removeClass("active");
        $(this).addClass("active");
        $("#custom_style").remove();
        $.removeCookie( 'site_skin', {path: '/'} );
        if( style_id != 'skin_default' ){
            $("#custom_style").remove();
            $("head").append('<link rel="stylesheet" id="custom_style" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/layout_1/'+style_id+'.css" type="text/css" media="all">');
            $.cookie('site_skin', style_id, {expires: 7, path: '/'});
            if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ){
                $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+style_id+'.svg' );
                $(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
            }else{
                $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
                $(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+style_id+'.svg' );
            }
            $(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+style_id+'.svg' );
        }else{
            if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ) {
                $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark.svg');
                $(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
            }else{
                $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
                $(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_default.svg');
            }
            $(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark.svg' );
        }
    });

    if ( $.cookie('site_skin') ) {
        $("#skin_color #" + $.cookie('site_skin')).addClass("active");
        if( $.cookie('site_skin') != 'skin_default' ){
            $("head").append('<link rel="stylesheet" id="custom_style" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/layout_1/'+$.cookie('site_skin')+'.css" type="text/css" media="all">');
        }
        $("#skin_color #" + $.cookie('site_skin') ).addClass("active");
        if( $("body").hasClass( 'header_style_2' ) || $("body").hasClass( 'header_style_4' ) ) {
            $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_' + $.cookie('site_skin') + '.svg');
        }else{
            $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_' + $.cookie('site_skin') + '.svg');
        }
        $(".footer_logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_'+$.cookie('site_skin')+'.svg' );
        $(".mobile_header .logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark_'+$.cookie('site_skin')+'.svg' );
    }else{
        $("#skin_color #skin_default").addClass("active");
    }


    if ($.cookie('navigation_type') && $.cookie('navigation_type') == 'sticky_header') {
        $("body").addClass('sticky_header sticky_menu');
    }else{
        $("body").removeClass('sticky_header sticky_menu');
    }

    $("#navigation_type").on("click", function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $("body").removeClass('sticky_header sticky_menu');
            $.cookie('navigation_type', 'static_header', {expires: 7, path: '/'});
        } else {
            $(this).addClass('active');
            $("body").addClass('sticky_header sticky_menu');
            $.cookie('navigation_type', 'sticky_header', {expires: 7, path: '/'});
        }
    });

    if($("body").hasClass("sticky_header")){
        $("#navigation_type").addClass("active");
    }else{
        $("#navigation_type").removeClass("active");
    }

    <?php endif; ?>

    if( $.cookie('site_layout') && $.cookie('site_layout') == 'boxed' ){
        $("#site_layout").addClass('active');
        $("body").addClass('boxed_layout');
        $(".customizer_bg_image").slideDown();
        $('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
        if( $("#bg_images span.active").hasClass('image_type') ){
            $('body').addClass('boxed_bg_image_default');
        }else{
            $('body').addClass('boxed_bg_image_pattern');
        }
        $('body').css({'background-image' : 'url(' + $("#bg_images span.active").attr('data-image') + ')'});
    }

    $("#site_layout").on("click", function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $("body").removeClass('boxed_layout');
            $.removeCookie( 'site_layout', {path: '/'} );
            $(".customizer_bg_image").slideUp();
        } else {
            $(this).addClass('active');
            $("body").addClass('boxed_layout');
            $.cookie('site_layout', 'boxed', {expires: 7, path: '/'});
            $(".customizer_bg_image").slideDown();
            $('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
            if( $("#bg_images span.active").hasClass('image_type') ){
                $('body').addClass('boxed_bg_image_default');
            }else{
                $('body').addClass('boxed_bg_image_pattern');
            }
            $('body').css({'background-image': 'url(' + $("#bg_images span.active").attr('data-image') + ')'});
        }
    });

    $("#bg_images span").on('click', function () {
        $("#bg_images .active").removeClass("active");
        $(this).addClass("active");
        $('body').removeClass('boxed_bg_image_default boxed_bg_image_pattern');
        if( $(this).hasClass('image_type') ){
            $('body').addClass('boxed_bg_image_default');
        }else{
            $('body').addClass('boxed_bg_image_pattern');
        }
        $('body').css({'background-image' : 'url(' + $(this).attr('data-image') + ')'});
    });

    $("select[name='header_style']").on("change", function () {
        window.location.href = $(this).val();
    });

    $("#demos_switcher option").each(function() {
        if( window.location.href.indexOf($(this).attr("demo-url")) != -1 ) {
            $(this).attr("selected", "selected");
        }
    });

    $("select[name='demos_switcher']").on("change", function (e) {
        var $sitePreloader = $(".stm-site-preloader");
        window.location.href = $(this).find("option:selected").attr('demo-url');
        $('body').addClass("stm-demo-changed");
        if( $sitePreloader.length && ! $sitePreloader.hasClass("active") ) {
            $sitePreloader.addClass("active");
        }
    });

    $("select[name='demos_switcher']").on('select2:open', function(e){
        var selectClass = e.currentTarget.dataset.class;
        if(typeof(selectClass) != 'undefined') {
            $('.select2-container--open').addClass(selectClass);
        }
    });

    $("select[name='demos_switcher']").on('select2:close', function(e) {
        if($(".customizer-demos").length) {
            $(".customizer-demos").removeClass("active");
        }
    });

    $(document).on("mouseover", ".select2-container.demos_switcher .select2-results__option", function() {
        if($(".customizer-demos").length) {
            $(".customizer-demos").css("top", $(this).position().top+"px").addClass("active");

            var $choosedDemo = $(".customizer-demos [demo-number="+$(this).find('span').attr('class')+"]");
            if( $choosedDemo.length ) {
                $choosedDemo.addClass("active").siblings().removeClass("active");
            }
        }
    });

    $(document).on("mouseout", ".select2-container.demos_switcher .select2-results__option", function() {
        if($(".customizer-demos").length) {
            $(".customizer-demos").removeClass("active");
        }

        if( $(".customizer-demos [demo-number]").length ) {
            $(".customizer-demos [demo-number]").removeClass("active");
        }
    });

    <?php if( $consulting_config['layout'] == 'layout_1' ) : ?>
    if ($("body").hasClass('header_style_5') || $("body").hasClass('header_style_7')) {
        $(".logo img").attr('src', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tmp/logo_dark.svg');
    }
    if ($("body").hasClass('header_style_1')) {
        $("select[name='header_style'] option.header_style_1").attr("selected", "selected");
    }else if ($("body").hasClass('header_style_3')) {
        $("select[name='header_style'] option.header_style_3").attr("selected", "selected");
    }else if ($("body").hasClass('header_style_4')) {
        $("select[name='header_style'] option.header_style_4").attr("selected", "selected");
    }else if ($("body").hasClass('header_style_5')) {
        $("select[name='header_style'] option.header_style_5").attr("selected", "selected");
    }else if ($("body").hasClass('header_style_6')) {
        $("select[name='header_style'] option.header_style_6").attr("selected", "selected");
    }else if ($("body").hasClass('header_style_7')) {
        $("select[name='header_style'] option.header_style_7").attr("selected", "selected");
    }else{
        $("select[name='header_style'] option.header_style_2").attr("selected", "selected");
    }
    <?php endif; ?>

});

</script>