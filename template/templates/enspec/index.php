<!DOCTYPE html>

<html>
<head>
	<jdoc:include type="head" />
	<link rel="shortcut icon" href="/templates/enspec/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/enspec/css/template.css" />
</head>

<body>
	<div id="top"><div>
		<div id="mainmenu"><div>
			<jdoc:include type="modules" name="top" style="xhtml" />
		</div></div>
	</div><div class="clear"></div></div>
	
	<div id="wrapper"><div>
		<div id="header">
			
		</div>
		<div id="content">
			<div id="component">
				<jdoc:include type="component">		
			</div>
			<div id="bottom">
			
			</div>
		</div>
		<div id="sidebar">
			<jdoc:include type="modules" name="sidebar" style="xhtml" />	
		</div>
	</div><div class="clear"></div></div>
	
	<div id="footer"><div>
		<div>
			<jdoc:include type="modules" name="footer" style="xhtml" />
			<div>
			<div class="clear"></div>
		</div></div>
		<div>
			<div class="left">&copy; <font class="purple">EN</font><font class="red">SPEC</font> Inc. <?php echo date ('Y')?>. All Rights Reserved.</div>
			<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></div>
		</div>
	</div></div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="xhtml" />
		<div class="clear"></div>
	</div>
	
</body>
</html>
	