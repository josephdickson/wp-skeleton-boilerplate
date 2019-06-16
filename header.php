<?php
/* *
 * header.php
 * This is the default header template
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="<?php echo get_bloginfo( 'description' ); ?>" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
<?php wp_head(); ?>

</head>
<body>
