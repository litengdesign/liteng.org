<div class="grid-container">
  <!--header-->
  <header id="header" class="grid-25 text-right mobile-grid-100 fixed">
    <div class="logo hide-on-mobile">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header-logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header--logo-image" /></a>
      <?php endif; ?>
    </div>
    <div class="showmenu hide-on-desktop">
      <b class="pull-left mobile-grid-40">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header-logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header--logo-image" />
          </a>
        <?php endif; ?>
      </b>
      <i>≡</i>
    </div>
    <!--menu-->
    <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'class' => array('nav hide-on-mobile first-nav'),
          ),
          )); 
    ?>
    <?php if($user->uid): ?> 
    <ul class="nav hide-on-mobile">      
      <li><?php print l("我的账户/User","user"); ?> </li>
      <li><?php print l("添加博客/Add Blog","node/add"); ?></li>      
      <li><?php print l("登出/Logou","user/logout"); ?></li>
      <li><?php print $feed_icons; ?></li>          
      <li class="user-picture">
        <?php if($user_picture):?>
        <a href="<?php print $front_page; ?>user" title="you name is:<?php print $user_name;?>">
          <?php print $user_picture;?>
        </a>
        <?php endif?> 
      </li>
    </ul>
    <?php else: ?>
      <ul class="nav hide-on-mobile">         
        <li><?php print l("注册/Register","user/register"); ?></li>
        <li><?php print l("登录/Login","user/login"); ?></li>
        <li><?php print $feed_icons; ?></li>
      </ul>
    <?php endif?>  
  </header>
  <?php if($messages): ?>
    <div class="grid-70 prefix-30 mobile-grid-100">
      <?php print render($page['help']); ?>
      <?php print $messages; ?>
    </div>
  <?php endif; ?>
  <!--wrap-->
  <?php if($is_front): ?>
    <div id="wrap" class="grid-70 prefix-30 mobile-grid-100">
      <?php print render($page['work']); ?>             
      <div class="clear"></div>
      <div class="more text-center">
        <a href="<?php print $front_page; ?>work" title="查看所有作品"></a>
      </div>      
    </div>    
  <?php endif ?>
  <?php if ( !$is_front ): ?>
    <div id="wrap" class="grid-70 prefix-30 text-left mobile-grid-100">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
      <!--?php print $breadcrumb; ?-->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs nav nav-tabs">
          <?php print render($tabs); ?>
        </div>        
      <?php endif; ?>
      <div class="clearfix">
        <?php print render($page['content']); ?>
      </div>
    </div>
    <?php endif?>
    <!--footer-->
    <footer class="footer">
      2014 design by: <a href="<?php print $front_page; ?>about">liteng</a>
      <p>Thank you <a href="http://www.drupal.org">drupal</a></p>    
    </footer>
    <div class="hide-on-desktop hide-on-mobile">
      <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fdf5104a368f450207ccc795b4ab437be' type='text/javascript'%3E%3C/script%3E"));
       </script>
     </div>



  