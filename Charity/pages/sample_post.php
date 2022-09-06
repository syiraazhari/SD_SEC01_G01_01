<?php require_once('../config.php'); ?>
<!DOCTYPE HTML>
<head>
<title> Sample Post | <?php echo $_settings->info('short_name') ?></title>
<meta name="description" content="Sample Meta-description content">
<meta name="keywords" content="Blog 1, Sample Blog, Sample Article, Sample 101">
<meta name="robots" content="index, follow">
<meta property="og:type" content="article" />
<meta property="og:title" content="Sample Post" />
<meta property="og:description" content="Sample Meta-description content" />
<meta property="og:image" content="http://localhost/charity/uploads/blog_uploads/banners/4_banner.jpg" />
<meta property="og:url" content="http://localhost/charity/pages/sample_post.php" />
<?php require_once('../inc/page_header.php') ?>
</head>
<?php include(base_app.'inc/body_block.php') ?>
<h2>Sample Post</h2>
<input name="blog_id" value="a87ff679a2f3e71d9181a67b7542122c" type="hidden">
<hr>
<span class='text-muted'><i class='fa fa-calendar-day'></i> Published: Aug 18,2021 10:44 AM</span>
<center><img src="http://localhost/charity/uploads/blog_uploads/banners/4_banner.jpg" class="img-thumbnail img-banner" alt="http://localhost/charity/pages/sample_post.php" /></center>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae massa quis tellus ullamcorper auctor at in mi. Vestibulum euismod, nulla sit amet rhoncus iaculis, sapien justo sodales purus, nec finibus massa massa eget ante. Maecenas vitae eros in purus dictum porttitor. Integer arcu dui, dictum ac tellus et, ultricies condimentum est. Maecenas rutrum erat tincidunt dui rutrum fermentum. Nullam pretium molestie gravida. Sed mi justo, porta id justo ac, ornare aliquam est. Cras porta nisi eu eleifend tincidunt. Donec malesuada interdum orci sit amet sollicitudin. Maecenas sed augue condimentum justo vulputate interdum vel in lacus.</p><p style="text-align: center; "><img style="width: 812.556px; height: 541.704px;" src="http://localhost/charity/uploads/blog_uploads/5NXCyt7CJC/1629254605_1.jpg"><br></p>
<?php include(base_app.'inc/body_block_end.php') ?>
