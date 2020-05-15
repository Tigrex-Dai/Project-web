<?php include "config.php"; ?>

<!DOCTYPE HTML>
<html lang="fr">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Test</title>
		<a name="faketop"></a>

		<link href="templates/css/style.css" rel="stylesheet" type="text/css" >
        <link href="templates/css/grid.css" rel="stylesheet" type="text/css" >
        <link href="templates/css/button.css" rel="stylesheet" type="text/css" >
        <script src="templates/code/code.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
        <div class="banner">
            <div class="col_6">
                <br/>
                <br/>
                <h1>Information Board</h1>
                <h1>For</h1>
                <h1>International</h1>
                <h1>Students</h1>
            </div>
            <div class="col_6">
                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <p><?php echo $lang['intro1'] ?></p>
                <p><?php echo $lang['intro2'] ?></p>
            </div>
        </div>
		<?php include('templates/sidebar.php'); ?>
		<div class="lang">
			<ul>
				<li>
					<a href="index.php?lang=fr">Français</a><span><img src="templates/fr.png" width="15px" height="15px"></span>
				</li>
				<li>
					<a href="index.php?lang=en">English</a><span><img src="templates/en.png" width="15px" height="15px"></span>
				</li>
                <li>
					<a href="index.php?lang=zh">中文</a><span><img src="templates/zh.png" width="15px" height="15px"></span>
				</li>
			</ul>
       </div>
		<div class="main">
            <br/>
            <h2><?php echo $lang['pop'] ?></h2>
            <div class="showcase">
                <div class="col_4">
                    <div class="pic"><img src="templates/pic01.jpg" width="300px" height="200px"></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    <div class="linklst"><a href="list.php"><?php echo $lang['read'] ?></a></div>
                </div>
                <div class="col_4">
                    <div class="pic"><img src="templates/pic02.jpg" width="300px" height="200px"></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    <div class="linklst"><a href="list.php"><?php echo $lang['read'] ?></a></div>
                </div>
                <div class="col_4">
                    <div class="pic"><img src="templates/pic03.jpg" width="300px" height="200px"></div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    <div class="linklst"><a href="list.php"><?php echo $lang['read'] ?></a></div>
                </div>
            </div>
            <a name="tolst"></a>
            <div>&nbsp</div>
            <div class="tolist">
                <br/><br/>
                <h2><?php echo $lang['list1'] ?></h2>
                <h2><?php echo $lang['list2'] ?></h2>
            </div>
            <div class="lstbutton"><a href="list.php"><span><?php echo $lang['tolist'] ?></span></a></div>
            <a name="toform"></a>
            <div>&nbsp</div>
            <div class="tolist">
                <br/><br/>
                <h2><?php echo $lang['form1'] ?></h2>
                <h2><?php echo $lang['form2'] ?></h2>
            </div>
            <div class="lstbutton"><a href="form.php"><span><?php echo $lang['toform'] ?></span></a></div>

            <br/><br/><br/><br/>

            <div class="bottom">
                <div class="col_6"><?php include('assets/schedule.php'); ?></div>
                <div class="col_6">
                    <span class="contact">
                        <ul class="alt">
                            <li>Telephone: 0123234345</li>
                            <li>E-mail: contact@ifis.org</li>
                            <li>Twitter: @Ifis_web</li>
                            <li>Facebook: @Ifis_web</li>
                        </ul>
                    </span>
                </div>
            </div>

            <a name="fakebot"></a>

		</div>


	</body>
</html>


