<?php include "config.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="templates/css/style-list.css">
</head>
<body>

<div class="lang">
			<ul>
				<li>
					<a href="list.php?lang=fr">Français</a><span><img src="templates/fr.png" width="15px" height="15px"></span>
				</li>
				<li>
					<a href="list.php?lang=en">English</a><span><img src="templates/en.png" width="15px" height="15px"></span>
				</li>
                <li>
					<a href="list.php?lang=zh">中文</a><span><img src="templates/zh.png" width="15px" height="15px"></span>
				</li>
			</ul>
</div>
<div class="fav_list">
    <div class="fav_list_box">
        <div  class="fav_list_title">
            <h2 class="fav_list_title_h3"><?php echo $lang['act'] ?></h2>
            <div class="fav_num">
                Total <span >5</span> record(s)
            </div>
        </div>
        <div  class="my_fav_con">
            <div>
                <ul  class="my_fav_list">
                    <li class="my_fav_list_li" id="">
                        <a  class="my_fav_list_a" href="" target="_blank">
                            Test activity 1
                        </a>
                        <label class="my_fav_list_label">
                            <span >2019-04-08</span>
                        </label>
                    </li>
                    <li class="my_fav_list_li" id="">
                        <a  class="my_fav_list_a" href="" target="_blank">
                            Test activity 2
                        </a>
                        <label class="my_fav_list_label">
                            <span >2019-04-08</span>
                        </label>
                    </li>
                    <li class="my_fav_list_li" id="">
                        <a  class="my_fav_list_a" href="" target="_blank">
                            Test activity 3
                        </a>
                        <label class="my_fav_list_label">
                            <span >2019-04-08</span>
                        </label>
                    </li>
                    <li class="my_fav_list_li" id="">
                        <a  class="my_fav_list_a" href="" target="_blank">
                            Test activity 4
                        </a>
                        <label class="my_fav_list_label">
                            <span >2019-04-08</span>
                        </label>
                    </li>
                    <li class="my_fav_list_li" id="">
                        <a  class="my_fav_list_a" href="" target="_blank">
                            Test activity 5
                        </a>
                        <label class="my_fav_list_label">
                            <span >2019-04-08</span>
                        </label>
                    </li>

                </ul> <!---->
            </div>
        </div>
    </div>
</div>

</body>
