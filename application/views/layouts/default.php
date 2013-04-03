<!DOCTYPE html>
<html>
    <head>
	<title>Web Site Name</title>
	<link rel="stylesheet" href="<?=site_url('/public/css/style.css')?>" />
    </head>
    <body>
	<div class="BackgroundGradient"> </div>
	<div class="BodyContent">

	    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div><div class="BorderT"></div><div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div><div class="BorderC"></div><div class="Border">

	    <div class="Header">
		<div class="HeaderTitle">
		    <h1><a href="#">Web Site Name</a></h1>
		    <h2>Subtitle</h2>
		</div>
	    </div>
<!--Header finishes here -->
<!--Menu starts here-->
	    <div class="Menu">
		<ul>
		    <li><a href="#" class="ActiveMenuButton"><span>Home</span></a></li>|
		    <li><a href="#" class="MenuButton"><span>Categories</span></a></li>|
		    <li><a href="#" class="MenuButton"><span>Archive</span></a></li>|
		    <li><a href="#" class="MenuButton"><span>About</span></a></li>
		</ul>
	    </div>
<!--Menu finishes here-->

<div class="Columns">
    <div class="Column1">
        
<!-- Side Blocks Start-->      
<?=$blocks?>
<!-- Side Blocks Finish-->  

    </div>
    <div class="MainColumn">

<!--Main starts-->
                            
<?=$main?>

<!--Main finish-->
                        </div>
</div>
		    <div class="Footer">
			Footer Text - <a href="#">Contact Us</a>
		    </div>                

		</div></div>
	</div>
	<span class="BackLink"><a href="http://cooltemplate.com">Web Template</a> created using Cool Template</span>
    </body>
</html>