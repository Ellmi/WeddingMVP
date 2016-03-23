<?php
    /*
     * Template Name: Template portfolio
     */
?>
<?php get_header(); ?>
<?php get_template_part('template_inc/inc','menu'); ?>
<?php
// OPTION FOR PAGE PORFOLIO
$catid            =  get_post_meta( get_the_ID(), THEME_PREFIX.'_portfolio_catid', true ) ;
$filter           =  get_post_meta( get_the_ID() , THEME_PREFIX.'_porfolio_filter', true ) ;
$filter_status    =  get_post_meta( get_the_ID(), THEME_PREFIX.'_porfolio_filter_status', true ) ;
$limit            =  get_post_meta( get_the_ID(), THEME_PREFIX.'_portfolio_limit', true ) ;
$orderby          =  get_post_meta( get_the_ID(), THEME_PREFIX.'_porfolio_orderby', true ) ;
$order            =  get_post_meta( get_the_ID(), THEME_PREFIX.'_porfolio_order', true ) ;
$paging           =  get_post_meta( get_the_ID(), THEME_PREFIX.'_paging', true ) ;
$style_portfolio  =  get_post_meta( get_the_ID(), THEME_PREFIX.'_portfolio_full', true ) ;
$desktop          =  get_post_meta( get_the_ID(), THEME_PREFIX.'_desktop_column', true );
$sidebar          =  get_post_meta( get_the_ID(), THEME_PREFIX.'_portfolio_sidebar', true );
$class_profolio   = '';
$class_item       = '' ;
if( $style_portfolio == 'maxwidth' ):
    $class_profolio   = 'tzportfolio-style2' ;
    $class_item       = 'portfolio-item2';
endif;

if( $style_portfolio == 'mansory' ):
    $class_profolio   = 'tzportfolio-mansory' ;
endif;

//class for sidebar
$class_col = 'col-md-12';
if ( $sidebar != '0' ):
    $class_col = 'col-md-9';
endif;

$class_column_item = '';
$line_column_item = '';
switch($desktop):
    case '3':
        $class_column_item  = 'gird-item3';
        $line_column_item   = 'line3';
        break;
    case '2':
        $class_column_item  = 'gird-item2';
        break;
    case '4':
        $line_column_item   = 'line4';
        break;
    default:
        $class_column_item  = 'gird-item4';
        break;
endswitch;
?>
<div class="tzshop_title">
    <div class="container">

        <h1 class="page-title"><?php the_title(); ?></h1>

    </div>
</div>
<div class="tzPortfolio-wrap">
    <?php if ( $style_portfolio == 'maxwidth' || $style_portfolio == 'mansory' ): ?>
    <div class="container">
        <div class="row">
            <?php if ( $sidebar == 2 ): ?>
                <div class="col-md-3 tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo esc_attr($class_col); ?>">
    <?php endif; ?>
                <?php if ( $style_portfolio == 'maxwidth' ): echo' <div class="tzportfolio-line '.esc_attr($line_column_item).'">';  endif; ?>
                    <div class="tzPortfolio <?php echo esc_attr($class_profolio); ?>">
                        <?php
                        if ( get_query_var('paged') ):
                            $paged = get_query_var('paged');
                        else:
                            $paged = 1;
                        endif;

                        if( isset( $catid ) && !empty($catid) ):
                            $tzcat = array();
                            if(is_array($catid)){
                                sort($catid);
                                $count_cat  =   count($catid);

                                for($i=0; $i<$count_cat; $i++){
                                    $tzcat[]  =   (int)$catid[$i];
                                }

                            }else{
                                $tzcat[]    = (int)$catid;
                            }
                            $args = array(
                                'post_type'         =>  'portfolio',
                                'paged'             =>  $paged,
                                'posts_per_page'    =>  $limit,
                                'orderby'           =>  $orderby,
                                'order'             =>  $order,
                                'tax_query'         =>  array(
                                    array(
                                        'taxonomy'  =>  'portfolio-category',
                                        'field'     =>  'id',
                                        'terms'      =>  $tzcat
                                    )
                                )
                            );
                        else:
                            $args = array(
                                'post_type'         =>  'portfolio',
                                'paged'             =>  $paged,
                                'posts_per_page'    =>  $limit,
                                'orderby'           =>  $orderby,
                                'order'             =>  $order
                            );
                        endif;
                        $query = new WP_Query( $args ) ;



                        if ( $query -> have_posts() ): while ( $query -> have_posts() ): $query -> the_post() ;
                            $terms_post = get_the_terms( $post -> ID, $filter );
                            $feature    = get_post_meta( $post -> ID, THEME_PREFIX . '_portfolio_featured', true );
                            $class_feature = '';
                            if ( $feature == 'yes' ) :
                                $class_feature = 'tz_feature_item';
                            endif;


                            ?>
                            <?php if ( $style_portfolio == 'mansory' ): ?>
                                <div id="post-<?php the_ID() ; ?>" <?php post_class("element tzmansory") ; ?>>
                                    <div class="tzmansory-image">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <div class="masonry-meta">
                                        <div class="masonry-left pull-left">
                                            <i class="fa fa-heart-o tzicon"></i>
                                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                        <div class="masonry-right pull-right">
                                            <span><?php echo get_the_date(); ?></span>
                                            <?php if ( get_the_terms( $post -> ID, 'portfolio-tags' ) != false ): ?>
                                                <span class="tztag">
                                                     /
                                                    <?php the_terms( $post -> ID,'portfolio-tags','',',',''); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div id="post-<?php the_ID() ; ?>" <?php post_class("element $class_feature $class_column_item") ; ?>>
                                    <?php if ( $class_item != '' ): ?><div class="<?php echo esc_attr($class_item); ?>"><?php endif ?>
                                        <div class="portfolio-item portfolio-padding">
                                            <div class="item-image">
                                                <?php the_post_thumbnail('full'); ?>
                                            </div>
                                            <div class="tzitem-content">
                                                <i class="fa fa-heart-o tzicon"></i>
                                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                                <div class="tzmeta">
                                                    <span><?php echo get_the_date(); ?></span>
                                                    <span class="tztag">
                                                         /
                                                        <?php the_terms( $post -> ID,'portfolio-tags','',',',''); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php if ( $class_item != '' ): ?></div><?php endif ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php
                        endwhile; // end while have posts
                        endif;  // end if have posts
                        wp_reset_postdata();
                        ?>
                    </div><!--end class tzPortfolio-->
                <?php if ( $style_portfolio == 'maxwidth' ): echo '</div>'; endif; ?>
                <div class="tzpagenavi">
                    <div id="tz_append">
                        <a href="#tz_append"></a>
                    </div>
                    <div id="pagenavi-default">
                        <?php echo  tzeverline_custom_paging_nav($query->max_num_pages);  ?>
                    </div>
                </div>
    <?php if ( $style_portfolio == 'maxwidth' || $style_portfolio == 'mansory' ): ?>
            </div>
            <?php if ( $sidebar == 1 ): ?>
                <div class="col-md-3 tzsidebar-event">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

</div>
<?php get_footer(); ?>