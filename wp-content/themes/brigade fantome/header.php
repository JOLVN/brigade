<!DOCTYPE html>
<html <?php language_attributes(); ?>lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Obligatoire -->
    <?php wp_head(); ?>
</head>


<body>
    <div class="wrapper">

        <header>
            <div class="header">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => 'top-menu'
                ]) ?>
                <div class="top-menu">
                    <svg class="logo" width="46" height="72" viewBox="0 0 46 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M0 0H13.9289C18.7336 0 22.8364 1.69989 26.2372 5.09968C29.638 8.49947 31.3384 12.6017 31.3384 17.4065C31.3384 22.2066 29.6441 26.302 26.2556 29.6926C25.1754 30.7857 23.9574 31.7336 22.6325 32.5125C23.9666 34.521 24.564 36.9293 24.323 39.3283C24.082 41.7272 23.0176 43.9687 21.3107 45.6719C20.3551 46.6599 19.207 47.4415 17.9374 47.9684C16.6677 48.4953 15.3035 48.7563 13.9289 48.7354H0V0ZM6.96332 27.8472H13.9289C15.3033 27.868 16.6673 27.6071 17.9368 27.0806C19.2064 26.5541 20.3546 25.7732 21.3107 24.786C22.2972 23.8298 23.0775 22.6817 23.6033 21.4125C24.1292 20.1434 24.3895 18.78 24.3682 17.4065C24.3894 16.0326 24.129 14.6689 23.6032 13.3994C23.0774 12.1299 22.2972 10.9814 21.3107 10.0247C20.3547 9.03719 19.2066 8.25591 17.937 7.72903C16.6675 7.20215 15.3034 6.94084 13.9289 6.96122H6.96332V27.8472ZM6.96332 34.8107V41.7719H13.9289C14.8369 41.7486 15.6997 41.3716 16.3336 40.7214C16.9675 40.0712 17.3223 39.1992 17.3223 38.2913C17.3223 37.3834 16.9675 36.5113 16.3336 35.8611C15.6997 35.211 14.8369 34.834 13.9289 34.8107H6.96332Z" fill="white" />
                            <path d="M23.6648 59.3164V72.0001H17.5129V27.6083H45.1915V33.949H23.6648V52.9734V59.3164Z" fill="white" />
                            <path d="M32.3224 41.8086H0.119568V48.7169H32.3224V41.8086Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="45.1915" height="72" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <nav class="pages">
                        <li><a href="#">Projets</a></li>
                        <li class="equipage">
                            <a href="#">Équipage</a>
                            <div class="arrow"> <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <g clip-path="url(#clip0)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6247 0.338909C17.1095 0.805303 17.1269 1.57897 16.6635 2.06694L9.37782 9.73964C9.14872 9.9809 8.83157 10.1174 8.5 10.1174C8.16843 10.1174 7.85127 9.9809 7.62217 9.73964L0.33646 2.06694C-0.126904 1.57897 -0.109521 0.805302 0.375285 0.338908C0.860094 -0.127486 1.62875 -0.10999 2.09211 0.377987L8.5 7.12623L14.9079 0.377988C15.3713 -0.109989 16.1399 -0.127485 16.6247 0.338909Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="17" height="11" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </nav>
                    <nav class="reseaux">
                        <!-- Youtube -->
                        <li><a href="#"><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.8525 6.0075C25.1201 4.70475 24.3253 4.46512 22.707 4.374C21.0904 4.26431 17.0252 4.21875 13.5034 4.21875C9.97481 4.21875 5.90794 4.26431 4.293 4.37231C2.67806 4.46513 1.88156 4.70306 1.14244 6.0075C0.388125 7.30856 0 9.54956 0 13.4949C0 13.4983 0 13.5 0 13.5C0 13.5034 0 13.5051 0 13.5051V13.5084C0 17.4369 0.388125 19.6948 1.14244 20.9824C1.88156 22.2851 2.67637 22.5214 4.29131 22.6311C5.90794 22.7256 9.97481 22.7812 13.5034 22.7812C17.0252 22.7812 21.0904 22.7256 22.7087 22.6327C24.327 22.5231 25.1218 22.2868 25.8542 20.9841C26.6153 19.6965 27 17.4386 27 13.5101C27 13.5101 27 13.5051 27 13.5017C27 13.5017 27 13.4983 27 13.4966C27 9.54956 26.6153 7.30856 25.8525 6.0075Z" fill="white" />
                                    <path d="M10.125 18.5625V8.4375L18.5625 13.5L10.125 18.5625Z" fill="black" />
                                </svg>
                            </a></li>
                        <!-- Instagram -->
                        <li><a href="#"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="21" height="21" rx="6" fill="white" />
                                    <path d="M10.5372 5.1084C7.5578 5.1084 5.14136 7.52484 5.14136 10.5043C5.14136 13.4837 7.5619 15.8961 10.5372 15.8961C13.5167 15.8961 15.9331 13.4796 15.9331 10.5002C15.9331 7.52073 13.5167 5.1084 10.5372 5.1084ZM10.5372 14.0016C8.60574 14.0016 7.03588 12.4358 7.03588 10.5002C7.03588 8.56456 8.60163 6.99881 10.5372 6.99881C12.4688 6.99881 14.0386 8.56456 14.0386 10.5002C14.0386 12.4358 12.4729 14.0016 10.5372 14.0016Z" fill="black" />
                                    <path d="M17.4081 4.89452C17.4081 5.58904 16.8451 6.15205 16.1506 6.15205C15.4561 6.15205 14.8931 5.58904 14.8931 4.89452C14.8931 4.2 15.4561 3.63699 16.1506 3.63699C16.841 3.63288 17.4081 4.2 17.4081 4.89452Z" fill="black" />
                                </svg>
                            </a></li>
                        <!-- Facebook -->
                        <li><a href="#"><svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 7.72215H8V4.84042C8 4.04506 8.7168 4.11999 9.6 4.11999H11.2V0.517822H8C5.3488 0.517822 3.2 2.45291 3.2 4.84042V7.72215H0V11.3243H3.2V19.2491H8V11.3243H10.4L12 7.72215Z" fill="white" />
                                </svg>
                            </a></li>
                    </nav>
                </div>

                <div class="header-content">
                    <div class="logo-brigade">
                    </div>
                    <div class="text description">
                        <h3>La Brigade Fantome est un collectif de rappeurs.euses composé de quatre artistes de Lyon.</h3>
                        <button type="button" class="btn btn-info">
                            <p>Découvrir <div class="arrow"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path d="M0.5 8.5H15.5" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.5 3.5L15.5 8.5L10.5 13.5" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                        </button>
                    </div>
                </div>
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
        </header>