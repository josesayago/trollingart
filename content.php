<article <?php post_class(); ?>>
  <div class="row">
    <div class="titlePost col-md-10"><h2><?php echo "#".$firstTag." | "; the_title(); ?></h2></div>
    <div class="col-md-2"><3 <!--Espacio para votar el post--></div>
  </div>
  <div class="row contentImage">
    <img class="imgArticle img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php echo the_title(); ?>">
  </div>
  <div class="row tags">
    <h4><?php echo $tags; ?></h4>
  </div>
  <div class="row textArticle">
    <?php the_excerpt(); ?>
  </div>
  <div class="row infoAuthor">
    <div class="col-xs-1 avatar">
      <?php //echo get_avatar( get_the_author_meta('email') , 65 ); ?>
      <?php
        $str = get_avatar( get_the_author_meta('email') , 65 );
        preg_match('/(src=["\'](.*?)["\'])/', $str, $match);  //find src="X" or src='X'
        $split = preg_split('/["\']/', $match[0]); // split by quotes
        $url_avatar = $split[1]; // X between quotes
      ?>
      <img class="img-circle" src="<?php echo $url_avatar; ?>">
    </div>
    <div class="col-xs-6 author">By: <em><?php the_author_meta('display_name') ?></em></div>
    <div class="readMore col-xs-5 text-right"><a href="" class="btn btn-default btn-md"><span class="glyphicon glyphicon-plus"></span>Read more</a></div>
  </div>
  <hr>
</article>