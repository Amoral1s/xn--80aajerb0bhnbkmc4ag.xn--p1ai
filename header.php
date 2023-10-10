<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/header.min.css" />
  <meta charset="UTF-8">
  <meta name="viewport" id="myViewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">
  <link rel="preload" as="image" href="<?php the_field('offer_img', 'options'); ?>" />
  <?php wp_head(); ?>
</head>

<body id="top">

<header class="header">
  <div class="container">
    <?php if (is_home()) : ?>
    <div  class="header-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
    </div>
    <?php else : ?>
    <a href="/" class="header-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
    </a>
    <?php endif; ?>
    <!-- /.header-logo -->
    <nav class="header-menu">
      <div class="burger">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
          <path d="M5 30V26.6667H35V30H5ZM5 21.6667V18.3333H35V21.6667H5ZM5 13.3333V10H35V13.3333H5Z" fill="#626262"/>
        </svg>
      </div>
      <div class="menu-wrap">
        <div class="close">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22707 6.22703C6.51996 5.93414 6.99484 5.93414 7.28773 6.22703L12 10.9393L16.7124 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7124 17.773L12 13.0607L7.28773 17.773C6.99484 18.0659 6.51996 18.0659 6.22707 17.773C5.93418 17.4801 5.93418 17.0052 6.22707 16.7123L10.9394 12L6.22707 7.28769C5.93418 6.9948 5.93418 6.51992 6.22707 6.22703Z" fill="#363636"/>
          </svg>
        </div>
        
        
        <?php  
          wp_nav_menu( array(
            'menu_class' => '',
            'theme_location' => 'menu-1',
            'container' => null
          )); 
        ?>
        <div class="phones">
          <a href="mailto:<?php the_field('pochta', 'options'); ?>" target="blank">
            <?php the_field('pochta', 'options'); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <path d="M4.16665 20.8333C3.59373 20.8333 3.10311 20.6292 2.69477 20.2208C2.28644 19.8125 2.08262 19.3222 2.08331 18.75V6.25001C2.08331 5.67709 2.28748 5.18647 2.69581 4.77813C3.10415 4.3698 3.59443 4.16598 4.16665 4.16667H20.8333C21.4062 4.16667 21.8969 4.37084 22.3052 4.77917C22.7135 5.18751 22.9173 5.67778 22.9167 6.25001V18.75C22.9167 19.3229 22.7125 19.8135 22.3041 20.2219C21.8958 20.6302 21.4055 20.834 20.8333 20.8333H4.16665ZM12.5 13.5417L4.16665 8.33334V18.75H20.8333V8.33334L12.5 13.5417ZM12.5 11.4583L20.8333 6.25001H4.16665L12.5 11.4583ZM4.16665 8.33334V6.25001V18.75V8.33334Z" fill="#676766"/>
            </svg>
            
          </a>
          <a href="tel:<?php the_field('telefon', 'options'); ?>" target="blank">
            <?php the_field('telefon', 'options'); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <path d="M22.3146 17.5865L22.8656 18.1406L22.3136 17.5865H22.3146ZM9.18335 15.3406L9.73335 14.7865L9.18231 15.3406H9.18335ZM4.88543 4.30729L4.33543 3.75416L4.88648 4.30833L4.88543 4.30729ZM17.3209 14.4698L17.7969 13.9979L16.6938 12.8896L16.2208 13.3615L17.3209 14.4698ZM19.3896 13.8L21.3802 14.8823L22.125 13.5094L20.1354 12.4281L19.3896 13.8ZM21.7625 17.0323L20.2833 18.5042L21.3844 19.6115L22.8636 18.1406L21.7625 17.0323ZM19.3813 18.9771C17.8709 19.1187 13.9646 18.9927 9.73335 14.7865L8.63127 15.8937C13.2479 20.4844 17.6427 20.7094 19.5271 20.5333L19.3802 18.9771H19.3813ZM9.73335 14.7865C5.70106 10.776 5.03231 7.40416 4.94898 5.94062L3.38856 6.02916C3.49273 7.87083 4.32085 11.6083 8.63127 15.8937L9.73335 14.7865ZM11.1656 8.34895L11.4646 8.05104L10.3646 6.94374L10.0656 7.24062L11.1667 8.34791L11.1656 8.34895ZM11.7021 4.26458L10.3896 2.51041L9.13856 3.44791L10.4511 5.20104L11.7021 4.26458ZM5.97189 2.12812L4.33648 3.75312L5.43856 4.86145L7.07293 3.23645L5.97189 2.12812ZM10.6156 7.79479C10.0636 7.24062 10.0636 7.24062 10.0636 7.2427H10.0615L10.0584 7.24687C10.0092 7.29706 9.96487 7.35183 9.92606 7.41041C9.86981 7.49374 9.80835 7.60312 9.75627 7.74166C9.62942 8.09928 9.59783 8.48376 9.6646 8.85729C9.80418 9.75833 10.425 10.949 12.0146 12.5302L13.1167 11.4219C11.6281 9.9427 11.274 9.0427 11.2084 8.6177C11.1771 8.41562 11.2094 8.31562 11.2188 8.2927C11.224 8.27812 11.2261 8.27708 11.2188 8.28645C11.2096 8.3009 11.1991 8.31449 11.1875 8.32708L11.1771 8.33749C11.1737 8.34073 11.1703 8.34386 11.1667 8.34687L10.6146 7.79479H10.6156ZM12.0146 12.5302C13.6052 14.1115 14.8021 14.7281 15.7042 14.8656C16.1656 14.9365 16.5375 14.8802 16.8198 14.775C16.9777 14.7166 17.1253 14.6336 17.2573 14.5292C17.2752 14.5142 17.2926 14.4985 17.3094 14.4823L17.3167 14.476L17.3198 14.4729L17.3209 14.4708C17.3209 14.4708 17.3219 14.4698 16.7709 13.9156C16.2188 13.3615 16.2219 13.3604 16.2219 13.3604L16.224 13.3583L16.2261 13.3562L16.2323 13.351L16.2427 13.3406C16.2552 13.3294 16.2685 13.3189 16.2823 13.3094C16.2927 13.3021 16.2896 13.3052 16.275 13.3115C16.249 13.3208 16.1469 13.3531 15.9417 13.3219C15.5104 13.2552 14.6042 12.901 13.1167 11.4219L12.0146 12.5302ZM10.3896 2.50937C9.3271 1.0927 7.2396 0.867702 5.97189 2.12812L7.07293 3.23645C7.6271 2.68541 8.61043 2.7427 9.13856 3.44791L10.3886 2.50937H10.3896ZM4.95002 5.94166C4.92918 5.58124 5.09481 5.20416 5.43856 4.86249L4.33543 3.75416C3.77606 4.31041 3.33543 5.09791 3.38856 6.02916L4.95002 5.94166ZM20.2833 18.5042C19.9979 18.7896 19.6896 18.95 19.3823 18.9781L19.5271 20.5333C20.2927 20.4615 20.9188 20.076 21.3854 19.6125L20.2833 18.5042ZM11.4646 8.05104C12.4906 7.03124 12.5667 5.41979 11.7031 4.26562L10.4521 5.20208C10.8719 5.76354 10.8094 6.49999 10.3636 6.94479L11.4646 8.05104ZM21.3813 14.8833C22.2323 15.3458 22.3646 16.4354 21.7636 17.0333L22.8656 18.1406C24.2615 16.7521 23.8313 14.4365 22.1261 13.5104L21.3813 14.8833ZM17.7969 13.999C18.1969 13.601 18.8406 13.5031 19.3906 13.801L20.1365 12.4292C19.0073 11.8146 17.6073 11.9844 16.6948 12.8906L17.7969 13.999Z" fill="#676766"/>
            </svg>
          
          </a>
        </div>
        <div class="button donate">
          Пожертвовать
        </div>
      </div>
    </nav>
    <div class="header-phones">
      <a href="mailto:<?php the_field('pochta', 'options'); ?>" target="blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
          <path d="M4.16665 20.8333C3.59373 20.8333 3.10311 20.6292 2.69477 20.2208C2.28644 19.8125 2.08262 19.3222 2.08331 18.75V6.25001C2.08331 5.67709 2.28748 5.18647 2.69581 4.77813C3.10415 4.3698 3.59443 4.16598 4.16665 4.16667H20.8333C21.4062 4.16667 21.8969 4.37084 22.3052 4.77917C22.7135 5.18751 22.9173 5.67778 22.9167 6.25001V18.75C22.9167 19.3229 22.7125 19.8135 22.3041 20.2219C21.8958 20.6302 21.4055 20.834 20.8333 20.8333H4.16665ZM12.5 13.5417L4.16665 8.33334V18.75H20.8333V8.33334L12.5 13.5417ZM12.5 11.4583L20.8333 6.25001H4.16665L12.5 11.4583ZM4.16665 8.33334V6.25001V18.75V8.33334Z" fill="#676766"/>
          </svg>
        <?php the_field('pochta', 'options'); ?></a>
      <div class="phone">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
        <path d="M22.3146 17.5865L22.8656 18.1406L22.3136 17.5865H22.3146ZM9.18335 15.3406L9.73335 14.7865L9.18231 15.3406H9.18335ZM4.88543 4.30729L4.33543 3.75416L4.88648 4.30833L4.88543 4.30729ZM17.3209 14.4698L17.7969 13.9979L16.6938 12.8896L16.2208 13.3615L17.3209 14.4698ZM19.3896 13.8L21.3802 14.8823L22.125 13.5094L20.1354 12.4281L19.3896 13.8ZM21.7625 17.0323L20.2833 18.5042L21.3844 19.6115L22.8636 18.1406L21.7625 17.0323ZM19.3813 18.9771C17.8709 19.1187 13.9646 18.9927 9.73335 14.7865L8.63127 15.8937C13.2479 20.4844 17.6427 20.7094 19.5271 20.5333L19.3802 18.9771H19.3813ZM9.73335 14.7865C5.70106 10.776 5.03231 7.40416 4.94898 5.94062L3.38856 6.02916C3.49273 7.87083 4.32085 11.6083 8.63127 15.8937L9.73335 14.7865ZM11.1656 8.34895L11.4646 8.05104L10.3646 6.94374L10.0656 7.24062L11.1667 8.34791L11.1656 8.34895ZM11.7021 4.26458L10.3896 2.51041L9.13856 3.44791L10.4511 5.20104L11.7021 4.26458ZM5.97189 2.12812L4.33648 3.75312L5.43856 4.86145L7.07293 3.23645L5.97189 2.12812ZM10.6156 7.79479C10.0636 7.24062 10.0636 7.24062 10.0636 7.2427H10.0615L10.0584 7.24687C10.0092 7.29706 9.96487 7.35183 9.92606 7.41041C9.86981 7.49374 9.80835 7.60312 9.75627 7.74166C9.62942 8.09928 9.59783 8.48376 9.6646 8.85729C9.80418 9.75833 10.425 10.949 12.0146 12.5302L13.1167 11.4219C11.6281 9.9427 11.274 9.0427 11.2084 8.6177C11.1771 8.41562 11.2094 8.31562 11.2188 8.2927C11.224 8.27812 11.2261 8.27708 11.2188 8.28645C11.2096 8.3009 11.1991 8.31449 11.1875 8.32708L11.1771 8.33749C11.1737 8.34073 11.1703 8.34386 11.1667 8.34687L10.6146 7.79479H10.6156ZM12.0146 12.5302C13.6052 14.1115 14.8021 14.7281 15.7042 14.8656C16.1656 14.9365 16.5375 14.8802 16.8198 14.775C16.9777 14.7166 17.1253 14.6336 17.2573 14.5292C17.2752 14.5142 17.2926 14.4985 17.3094 14.4823L17.3167 14.476L17.3198 14.4729L17.3209 14.4708C17.3209 14.4708 17.3219 14.4698 16.7709 13.9156C16.2188 13.3615 16.2219 13.3604 16.2219 13.3604L16.224 13.3583L16.2261 13.3562L16.2323 13.351L16.2427 13.3406C16.2552 13.3294 16.2685 13.3189 16.2823 13.3094C16.2927 13.3021 16.2896 13.3052 16.275 13.3115C16.249 13.3208 16.1469 13.3531 15.9417 13.3219C15.5104 13.2552 14.6042 12.901 13.1167 11.4219L12.0146 12.5302ZM10.3896 2.50937C9.3271 1.0927 7.2396 0.867702 5.97189 2.12812L7.07293 3.23645C7.6271 2.68541 8.61043 2.7427 9.13856 3.44791L10.3886 2.50937H10.3896ZM4.95002 5.94166C4.92918 5.58124 5.09481 5.20416 5.43856 4.86249L4.33543 3.75416C3.77606 4.31041 3.33543 5.09791 3.38856 6.02916L4.95002 5.94166ZM20.2833 18.5042C19.9979 18.7896 19.6896 18.95 19.3823 18.9781L19.5271 20.5333C20.2927 20.4615 20.9188 20.076 21.3854 19.6125L20.2833 18.5042ZM11.4646 8.05104C12.4906 7.03124 12.5667 5.41979 11.7031 4.26562L10.4521 5.20208C10.8719 5.76354 10.8094 6.49999 10.3636 6.94479L11.4646 8.05104ZM21.3813 14.8833C22.2323 15.3458 22.3646 16.4354 21.7636 17.0333L22.8656 18.1406C24.2615 16.7521 23.8313 14.4365 22.1261 13.5104L21.3813 14.8833ZM17.7969 13.999C18.1969 13.601 18.8406 13.5031 19.3906 13.801L20.1365 12.4292C19.0073 11.8146 17.6073 11.9844 16.6948 12.8906L17.7969 13.999Z" fill="#676766"/>
        </svg>
        <?php the_field('telefon', 'options'); ?></div>
      <div class="button donate">
        Пожертвовать
      </div>
    </div>
  </div>
</header>



	