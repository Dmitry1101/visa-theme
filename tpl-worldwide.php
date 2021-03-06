<?php /* Template Name: Worldwide */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <div class="jumbo jumbo-2 flexx flexx-wrap"
         style="background: url(<?php the_field( 'top_background' ); ?>) center bottom no-repeat; background-attachment: fixed;">
        <div class="jumbo-2__txt">
            <h1><?php the_field( 'title' ); ?></h1>
            <p>
				<?php the_field( 'title_description' ); ?>
            </p>
        </div>
    </div>


    <div class="mainn s content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sect-title under under-2 page-title"><?php the_field( 'title_countries' ); ?></div>
                </div>
            </div>
            <div class="row why__blck why__blck-2">
	            <?php if ( $kd_acf_countries = get_field( 'kd_acf_countries' ) ) { ?>
		            <?php foreach ( $kd_acf_countries as $country ) { ?>
                        <div class="col-md-3">
                            <div class="p-l-30">
					            <?php foreach ( $country['column'] as $item ) {
						            $countrry =  $item['countryy'];
						            $countrry = trim($countrry);
						            $countrry = str_replace(' ', '-', $countrry);
					                ?>
                                    <div class="tbl">
                                        <div class="tbl-cell cell-1 mdl">
                                            <i class="icon icon-flag_<?php echo $countrry; ?>"></i>
                                        </div>
                                        <div class="tbl-cell cell-2 mdl"><a href="<?php echo $item['post_link']; ?>"><?php echo $item['countryy']; ?></a></div>
                                    </div>
					            <?php } ?>
                            </div>
                        </div>
		            <?php } ?>
	            <?php } ?>
                <!--<div class="col-md-3">
                    <div class="p-l-30">
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Austria"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Austria</a></div>
                        </div>
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Denmark"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Denmark</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Germany"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Germany</a></div>
                        </div>
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Italy"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Italy</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Liechtenstein"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Liechtenstein</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Portugal"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Portugal</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Switzerland"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Switzerland</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_New-Zealand"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">New Zealand</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Monaco"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Monaco</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-l-30">
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Belgium"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Belgium</a></div>
                        </div>
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Estonia"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Estonia</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Greece"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Greece</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Luxembourg"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Luxembourg</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Malta"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Malta</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Poland"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Poland</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Sweden"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Sweden</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Mexico"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Mexico</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Morocco"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Morocco</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-l-30">
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Czech-Republic"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Czech Republic</a></div>
                        </div>
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Finland"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Finland</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Hungary"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Hungary</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Lithuania"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Lithuania</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Netherlands"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Netherlands</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Slovakia"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Slovakia</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Spain"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Spain</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Canada"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Canada</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Lebanon"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Lebanon</a></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-l-30">
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_China"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">China</a></div>
                        </div>
                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_France"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">France</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Iceland"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Iceland</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Latvia"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Latvia</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Norway"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Norway</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Slovenia"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Slovenia</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Japan"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Japan</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Canada"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Canada</a></div>
                        </div>

                        <div class="tbl">
                            <div class="tbl-cell cell-1 mdl">
                                <i class="icon icon-flag_Malaysia"></i>
                            </div>
                            <div class="tbl-cell cell-2 mdl"><a href="#">Malaysia</a></div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div><!-- .mainn -->


    <!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>