<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/lib/jquery-1.10.1.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/core/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/core/jquery.fancybox.css?v=2.1.5" media="screen" />
	
<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/core/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/lightbox/core/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type ="text/javascript">

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

	$(document).ready(function() {
		$(".fancybox-thumb").fancybox({
			prevEffect	: 'none',
			nextEffect	: 'none',
			helpers	: {
				title	: {
					type: 'outside'
				},
				thumbs	: {
					width	: 50,
					height	: 50
				}
			}
		});
	});

} else {	

	$(document).ready(function() {
		$(".fancybox-thumb").fancybox({
			prevEffect	: 'none',
			nextEffect	: 'none',
			helpers	: {
				title	: {
					type: 'outside'
				},
				thumbs	: {
					width	: 120,
					height	: 120
				}
			}
		});
	});
	
}
</script>

<style>

.fancybox-lock body {
overflow-y: hidden !important;
}

.fancybox-lock .fancybox-overlay {
overflow-y: hidden !important;
}

#fancybox-thumbs ul li a {
background: white !important;
border: 1px solid #525252 !important;
}

.fancybox-skin {
webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.0) !important;
-moz-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.0) !important;
box-shadow: 0 10px 25px rgba(0, 0, 0, 0.0) !important; 
background: transparent !important;
}

.fancybox-outer img{
border: 2px solid white !important;
}

	
.gal_list {
widtH: 100%;
margin-left: 0px;
}
.gal_item {
display: inline-block !important;
width: 25%;
box-sizing: border-box;
padding: 0 5px;
margin-bottom: 10px;
}

.gal_item img {
width: 230px !important;
max-height: 180px !important;
} 

.fancybox-opened .fancybox-title {
text-align: center;
margin-top: 0;
font-size: 15px;

}

.paginate_wrap {
text-align: right;
padding-right: 15px;
}

.paginate_wrap a,
.paginate_wrap span {
margin: 0 2px;
}

.paginate_wrap span.current {
color: rgb(153, 0, 0);
}

</style>

<?php 
/*FILTER: GALLERY:  --------------------------------------------------------------*/
add_filter('post_gallery', 'filter_gallery', 10, 2);
function filter_gallery($output, $attr)
{
    global $post;

	//GALLERY SETUP STARTS HERE----------------------------------------//
    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }
	//print_r($attr);
    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'columns' => 4,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }
    if (empty($attachments)) return '';
	//GALLERY SETUP END HERE------------------------------------------//

	//PAGINATION SETUP START HERE-------------------------------------//
	$current = (get_query_var('paged')) ? get_query_var( 'paged' ) : 1;
	$per_page = 8;
	//$offset = ($page-1) * $per_page;
	$offset = ($current-1) * $per_page;
	$big = 999999999; // need an unlikely integer

	$total = sizeof($attachments);
	$total_pages = round($total/$per_page);
	if($total_pages < ($total/$per_page))
	{	$total_pages = $total_pages+1;
	}
	//PAGINATION SETUP END HERE-------------------------------------//

	//GALLERY OUTPUT START HERE---------------------------------------//
    $output = "<div class=\"gallery-images\">\n";
    $output .= "<ul class='gal_list'>\n";
	$counter = 0;
	$pos = 0;
    foreach ($attachments as $id => $attachment)
	{	$pos++;
        //$img = wp_get_attachment_image_src($id, 'medium');
		//$img = wp_get_attachment_image_src($id, 'thumbnail');
        //$img = wp_get_attachment_image_src($id, 'full');	

		if(($counter < $per_page)&&($pos > $offset))
		{	$counter++;
			$largetitle = get_the_title($attachment->ID);
			$largeimg = wp_get_attachment_image_src($id, 'full');
			$img = wp_get_attachment_image_src($id, 'thumbnail' );
			$output .= "<li class='gal_item'>\n";
			$output .= " <a class='fancybox-thumb' rel='fancybox-thumb' href=\"{$largeimg[0]}\" title=\"{$largetitle}\"><img class='white_border img_hover' src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" /></a>\n";
			$output .= "</li'>\n";
		}

    }
    $output .= "</ul>\n";
    $output .= "<div class=\"clear\"></div>\n";
    $output .= "</div>\n";
	//GALLERY OUTPUT ENDS HERE---------------------------------------//

	//PAGINATION OUTPUT START HERE-------------------------------------//
	$output .= '<div class="paginate_wrap">';
	$output .= paginate_links( array(
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => $current,
		'total' => $total_pages,
		'show_all'     => True,
		'prev_text'    => __('«'),
		'next_text'    => __('»')
	) );
	$output .= '</div>';
	//PAGINATION OUTPUT ENDS HERE-------------------------------------//

    return $output;
}
/*FILTER: GALLERY:  --------------------------------------------------------------*/


/*Page Fix  --------------------------------------------------------------*/

add_filter( 'redirect_canonical','custom_disable_redirect_canonical' ); 
function custom_disable_redirect_canonical( $redirect_url ){
    if ( is_singular('gallery') ) $redirect_url = false;
    return $redirect_url;
}

?>