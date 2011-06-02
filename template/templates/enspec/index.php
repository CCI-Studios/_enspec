<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
?>
<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/enspec/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/enspec/css/template.css" />
</head>

<body class="<?php echo $menu; ?>">
	<div id="top"><div>
		<jdoc:include type="modules" name="top" style="xhtml" />
		<div class="clear"></div>
	</div></div>
	
	<div id="wrapper"><div>
		<?php if($this->countModules("header")):?>
		<div id="header">
			<jdoc:include type="modules" name="header" style="xhtml" />
			<div class="clear"></div>
		</div>	
		<?php endif; ?>
		
		<div id="content"><div>
			<div id="component">
				<jdoc:include type="component" />
				<div class="clear"></div>
			</div>
			
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
				<div class="clear"></div>
			</div>	
		<?php if($this->countModules("bottom")):?>
			<div id="bottom">
				<jdoc:include type="modules" name="bottom" style="xhtml" />
				<div class="clear"></div>
			</div>
		<?php endif; ?>	
		</div></div>
		
		<div id="bottom_menu">
			<jdoc:include type="modules" name="bottom_menu" style="xhtml" />
			<div class="clear"></div>
		</div>
		
		<div id="footer"><div>
			<div class="left">&copy; <span class="purple">EN</span><span class="red">SPEC</span> Inc. <?php echo date ('Y')?>. All Rights Reserved.</div>
			<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></div>
		</div></div>		

		<div class="hidden">
			<jdoc:include type="modules" name="hidden" style="xhtml" />
			<div class="clear"></div>
		</div>
	</div></div>
</body>
</html>
	