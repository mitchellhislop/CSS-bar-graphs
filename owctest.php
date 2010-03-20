<!--css bar graphs-->
<?php
$key="status";
$themeta = get_post_meta($post->ID, $key, TRUE) ;

if ($themeta != ''){
$title=the_title();
echo $title;
$value=get_post_custom_values("status");

$statuspercent = round(( $value [0] / 100) * 100);
?>

   <div class="rating"><div class="graphcont">The current status of <?php the_title(); ?> is <div class="graph"><strong class="bar" style="width:<?php echo $statuspercent; ?>%;"><?php echo $statuspercent; ?>%</strong></div></div>

  </div>
<div class="clear"></div>
<?php
}
?>
<!--css bar graphs-->