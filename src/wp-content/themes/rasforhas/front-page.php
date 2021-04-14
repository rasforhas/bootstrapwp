<?php get_header(); ?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
</ul>   
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php the_field('image1');?>">
        <div class="carousel-caption">
            <h1 class="display-2"><?php the_field('h1_napis_slider_1');?></h1>
            <h3><?php the_field('h3_napis_slider_1'); ?></h3>
            <button type="button" class="btn btn-outline-light btn-lg"><?php the_field('lewy_button_slider_1');?></button>
            <button type="button" class="btn btn-primary btn-lg"><?php the_field('prawy_button_slider_1');?></button>
        </div>
    </div>
    <div class="carousel-item">
        <img src="<?php the_field('slider_image_2');?>" alt="bg2">
    </div>
    <div class="carousel-item">
        <img src="<?php the_field('slider_image_3');?>" alt="bg3">
    </div>
    </div>
</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead"><?php the_field('jumbotron_tekst');?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"><?php the_field('jumbotron_button');?></button></a>
        </div>
    </div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"><?php the_field('display_header_text_welcome_section'); ?></h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead"><?php the_field('display_text_under_header_welcome_section'); ?></p>
        </div>
    </div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?php the_field('icon_left_column'); ?>
            <h3><?php the_field('h3_left_column'); ?></h3>
            <p><?php the_field('p_left_column'); ?></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <?php the_field('icon_middle'); ?>
            <h3><?php the_field('h3_middle'); ?></h3>
            <p><?php the_field('p_middle'); ?></p>
        </div>
        <div class="col-sm-12 col-md-4">
            <?php the_field('icon_right_column'); ?>
            <h3><?php the_field('h3_right_column'); ?></h3>
            <p><?php the_field('p_right_column'); ?></p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2><?php the_field('h2_two_column_section'); ?></h2>
            <p><?php the_field('p_top_two_column_section'); ?></p>
            <p><?php the_field('p_middle_two_column_section'); ?></p>
            <p><?php the_field('p_bottom_two_column_section'); ?></p>
            <br>
            <a href="#" class="btn btn-primary"><?php the_field('button_text'); ?></a>
        </div>
        <div class="col-lg-6">
            <img src="<?php the_field('image_right_two_column_section');?>" class="img-fluid">
        </div>
    </div>
</div>
<hr class="my-4">
<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji"><?php the_field('text_button_click');?></button>
  <div id="emoji" class="collapse">
      <div class="container-fluid padding">
          <div class="row text-center">
              <div class="col-sm-6 col-md-3">
                  <img class="gif" src="<?php the_field('img_fist_emoji_section');?>">
              </div>
              <div class="col-sm-6 col-md-3">
                  <img class="gif" src="<?php the_field('img_second_emoji_section');?>">
              </div>
              <div class="col-sm-6 col-md-3">
                  <img class="gif" src="<?php the_field('img_third_emoji_section');?>">
              </div>
              <div class="col-sm-6 col-md-3">
                  <img class="gif" src="<?php the_field('img_fourth_emoji_section');?>">
              </div>
          </div>
      </div>
  </div>
<!--- Meet the team -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"><?php the_field('text_meet_the_team');?></h1>
        </div>
        <hr>
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_img_first');?>">
                <div class="card-body">
                    <h4 class="card-title"><?php the_field('card_title_h4_first');?></h4>
                    <p class="card-text"><?php the_field('card_text_p_first');?></p>
                    <a href="#" class="btn btn-outline-secondary"><?php the_field('card_text_ahref_first');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_img_second');?>">
                <div class="card-body">
                    <h4 class="card-title"><?php the_field('card_title_h4_second');?></h4>
                    <p class="card-text"><?php the_field('card_text_p_second');?></p>
                    <a href="#" class="btn btn-outline-secondary"><?php the_field('card_text_ahref_second');?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('card_img_third');?>">
                <div class="card-body">
                    <h4 class="card-title"><?php the_field('card_title_h4_third');?></h4>
                    <p class="card-text"><?php the_field('card_text_p_third');?></p>
                    <a href="#" class="btn btn-outline-secondary"><?php the_field('card_text_ahref_third');?></a>
                </div>
            </div>
        </div>
    </div>

</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-12 col-lg-6">
            <h2><?php the_field('h2_our_philosophy');?></h2>
            <p><?php the_field('p_top_our_philosophy');?></p>
            <p><?php the_field('p_bottom_our_philosophy');?></p>
        </div>
        <div class="col-lg-6">
            <img src="<?php the_field('img_our_philosophy');?>" class="img-fluid">
        </div>
    </div>
</div>

<hr class="display-4">
<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
            <div class="col-12">
                <h2><?php the_field('text_connect');?></h2>
            </div>
        <div class="col-12 social padding">
            <a href="#"><i class="<?php the_field('first_social_icon');?>"></i></a>
            <a href="#"><i class="<?php the_field('second_social_icon');?>"></i></a>
            <a href="#"><i class="<?php the_field('third_social_icon');?>"></i></a>
            <a href="#"><i class="<?php the_field('fourth_social_icon');?>"></i></a>
            <a href="#"><i class="<?php the_field('fifth_social_icon');?>"></i></a>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>