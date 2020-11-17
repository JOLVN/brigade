<!-- HAUT DE LA PAGE D'ACCUEIL -->

<div class="home-top">

    <!-- IMAGE DE FOND -->
    <?php 
    $image = get_field('background_image');
    if( !empty( $image ) ): ?>
        <img class="background-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <!-- IMAGE DE FOND -->


    <!-- FLEXBOX DESCRIPTION ET LOGO -->
    <div class="content-section">

        <!-- LOGO -->
        <div class="content-section__logo">
            <?php 
            $image = get_field('logo2');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <!-- LOGO -->

        <!-- DESCRIPTION -->
        <div class="content-section-description">

            <!-- TEXTE DE DESCRIPTION  -->
            <div class="content-section-description__text">
                <h3>
                <?php the_field('description'); ?>
                </h3>
            </div>
            <!-- TEXTE DE DESCRIPTION  -->

            <!-- BOUTON LINK -->
            <div class="content-section-description__button">
                <button type="button" class="btn btn-info">
                    <?php if ($link) : ?>
                        <a href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
                    <?php endif; ?>
                </button>
            </div>
            <!-- BOUTON LINK -->

        </div>
        <!-- DESCRIPTION -->
        <?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

    </div>
    <!-- FLEXBOX DESCRIPTION ET LOGO -->


    <div id="arrow-scroll">
        <svg width="29" height="17" viewBox="0 0 29 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.3597 0.479456C29.1868 1.13941 29.2165 2.23415 28.426 2.92463L15.9975 13.7815C15.6066 14.1229 15.0656 14.316 14.5 14.316C13.9344 14.316 13.3933 14.1229 13.0025 13.7815L0.573964 2.92463C-0.216481 2.23415 -0.186828 1.1394 0.640196 0.479455C1.46722 -0.180495 2.77845 -0.155737 3.56889 0.534752L14.5 10.0836L25.4311 0.534754C26.2216 -0.155736 27.5328 -0.180493 28.3597 0.479456Z" fill="white" />
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="29" height="17" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>

</div>