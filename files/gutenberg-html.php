<?php
if( have_rows('card') ):

    echo '<div class="link-con grid">';

    while( have_rows('card') ) : the_row();
        $sub_title = get_sub_field('title');
          $sub_class = strtolower(preg_replace("/[^a-zA-Z]+/", "", $sub_title ));
        $sub_sub = get_sub_field('sub');
        $sub_body = get_sub_field('body');
        $sub_link = get_sub_field('link');
        if( $sub_link ){
          $link_url = $sub_link['url'];
          $link_title = $sub_link['title'];
          $link_target = $sub_link['target'] ? $sub_link['target'] : '_self';
        }

        echo '<div class="card-1 ' . $sub_class . '">';
          echo '<a href="' . $link_url . '" title="' . $link_title . '" target="' . $link_target . '" class="card-1-link">';
            echo '<div class="card-1-bg"></div>';
            if ($sub_title){
              echo '<div class="card-1-title">' . $sub_title . '</div>';
            }
              echo '<div class="card-1-sub">';
                if ($sub_sub){
                  echo $sub_sub . ': ';
                }
                  echo '<span class="card-1-sub-con">' . $sub_body . '</span>';
            echo '</div>';
          echo '</a>';
        echo '</div>';
        
    endwhile;
    echo '</div>';
endif;

