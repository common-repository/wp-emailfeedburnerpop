<?php
$site_url=get_settings('siteurl');
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.2.1/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="<?=$site_url?>/wp-content/plugins/wp-emailfeedburnerpop/lightbox/sexylightbox.v2.1.mootools.js"></script>
<link rel="stylesheet" href="<?=$site_url?>/wp-content/plugins/wp-emailfeedburnerpop/lightbox/sexylightbox.css" type="text/css" media="all" />
<script type="text/javascript">
function getCookie(nombre)
{
	if(document.cookie.length>0)
	{
	start=document.cookie.indexOf(nombre + "=");
	if (start!=-1)
	{
	start=start + nombre.length+1; 
	end=document.cookie.indexOf(";",start);
	if (end==-1)
	end=document.cookie.length;
	return unescape(document.cookie.substring(start,end));
	}
	}
	return "";
	}

  window.addEvent('domready', function(){
	SexyLightbox = new SexyLightBox({imagesdir: '<?=$site_url?>/wp-content/plugins/wp-emailfeedburnerpop/sexyimages/'});
	if (getCookie('popup') !="yes"){
	SexyLightbox.show('', '<?=$site_url?>/wp-content/plugins/wp-emailfeedburnerpop/form.html?height=150&width=400', 'sexylightbox');
	document.cookie = "popup=yes";
	}
  });
</script>