<?php include "config.php"; ?>
<head>
	<script>
		function validateForm() {
			var x = document.forms["myForm"]["myname"].value;
			if (x == "") {
				alert("Nom est obligatoire!");
				return false;
			}
			var y = document.forms["myForm"]["mymail"].value;
			if (y == "") {
				alert("Mail est obligatoire!");
				return false;
			}
			else if (y.match(/^[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}$/)==null){
				alert("Adresse mail n'est pas correcte!");
				return false;
			}
			else{
				return true;
			}
		}
	</script>
</head>
<body>
    <link href="templates/css/style-form.css" rel="stylesheet" type="text/css" >
    <section id="contact" class="wrapper">
    <div class="lang">
			<ul>
				<li>
					<a href="form.php?lang=fr">Français</a><span><img src="templates/fr.png" width="15px" height="15px"></span>
				</li>
				<li>
					<a href="form.php?lang=en">English</a><span><img src="templates/en.png" width="15px" height="15px"></span>
				</li>
                <li>
					<a href="form.php?lang=zh">中文</a><span><img src="templates/zh.png" width="15px" height="15px"></span>
				</li>
			</ul>
    </div>
        <div class="innersplit">
            <section>
                <h2><?php echo $lang['ptitle1'] ?></h2>
                <p><?php echo $lang['ptitle2'] ?></p>
                <form class="alt" name="myForm" action="form.php" onsubmit="return validateForm()" method="post">
                    <div class="row uniform">
                        <span class="small">
                            <input name="myname" placeholder="Name" type="text">
                        </span>
                        <span class="small">
                            <input name="mymail" placeholder="E-mail" type="text">
                        </span>
                        <div class="big">
                            <textarea name="announce" placeholder="Write down your announce with precise date and place." rows="4"></textarea>
                        </div>
                    </div>
                    <button type="submit">Post</button>
                </form>
            </section>
        </div>
    </section>
</body>

<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('database.db');
    }
}
$db = new MyDB();
if(!$db){
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}

$sql =<<<EOF
      CREATE TABLE USR_INFO
      (USR_ID INT PRIMARY KEY     NOT NULL AUTOINCREMENT,
      USR_NAME        CHAR(20)    NOT NULL,
      USR_MAIL        CHAR(50)    NOT NULL);
EOF;

$ret = $db->exec($sql);
if(!$ret){
    echo $db->lastErrorMsg();
} else {
    echo "Table created successfully\n";
}

$sql =<<<EOF
      INSERT INTO USR_INFO (USR_NAME,USR_MAIL)
      VALUES ('$_POST[myname]', '$_POST[mymail]' );
EOF;

$ret = $db->exec($sql);
if(!$ret){
    echo $db->lastErrorMsg();
} else {
    echo "Records created successfully\n";
}
$db->close();

?>
