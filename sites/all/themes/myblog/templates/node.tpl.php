<?php if (arg(0)=='node' && is_numeric(arg(1)) && $type!='page'): ?>
  <div class="breadcrumb bg-lightgray">
    <span>李腾博客:</span> <a href="http://www.liteng.org">首页</a> -> <a href="/<?php print $type; ?>"><?php print $type; ?></a><?php print " -> ".$title;?>
    <span class="pull-right time">
     <?php  
        $nowtime=date('Y-m-d');  //目前时间
        $createdate=format_date($node->created, 'custom', "Y-m-d");  //创建节点的时间  
        $hour=format_date($node->created, 'custom', "H");  //创建节点的时间的小时数
        $minutes=format_date($node->created, 'custom', "i"); //创建节点的时间的分钟数
        $day=strtotime($nowtime)-strtotime($createdate);    //时间相减
        $data=$day/3600/24 ;    //换算为天数

        $totalhour=(date('H')-$hour);  //获取发布的小时数
        if(date('i')>$minutes){
          $totalmin=date('i')-$minutes;  //获取发布的分钟数
        }
        else{
          $totalmin=$totalhour*60+date('i')-$minutes;  //获取发布的分钟数
        }

        if ($data==0 && $totalhour<=0)   //判断发布是在1小时内
          print $totalmin.'分钟前发布';
        else if($data==0 && $totalhour>0)  //判断是否为当天发布

          print $totalhour.'小时前发布';
        else
          print $data.'天前发布';
      ?>
    </span>
</div>
<?php endif; ?> 

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
    <h2<?php print $title_attributes; ?>>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php print render($title_suffix); ?>
  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  </div>

  <?php
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    $links = render($content['links']);
    if ($links):
  ?>

    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>
