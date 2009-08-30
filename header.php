<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
 * mmClean DokuWiki Template
 *
 * @author Marcin Mierzejewski <marcin.mierzejewski@zenzire.com>
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>" lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
	<title><?php tpl_pagetitle()?> [<?php echo hsc($conf['title'])?>]</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Keywords" content="<?php if ( $conf['tpl_mmClean']['keywords'] ) echo $conf['tpl_mmClean']['keywords'].","; ?><?php tpl_pagetitle()?>"/>
  <meta name="Description" content="<?php if ( $conf['tpl_mmClean']['description'] ) echo $conf['tpl_mmClean']['description']; ?><?php tpl_pagetitle()?>"/>
  <?php tpl_metaheaders()?>
  <link rel="stylesheet" href="http://www.wherecamppdx.org/wp-content/themes/wherecamppdx_2.0/style.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/layout.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/design.css" />

  <?php if($lang['direction'] == 'rtl') {?>
  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo DOKU_TPL?>css/rtl.css" />
  <?php } ?>

  <?php @include(dirname(__FILE__).'/meta.html')?>
</head>
