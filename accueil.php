<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style_script.css" media="screen" type="text/css" />
        <?php 
            include("requete.php");
            session_start();
            $id=$_SESSION['id'];
        ?>
    </head>
    <body>
        <?php include("header.php"); ?>
        <?php include("calendar.php"); ?>
        <iframe src="https://calendar.google.com/calendar/embed?src=bid54maortfv8c0snrnsjqvlv0%40group.calendar.google.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        <br/><br/>
        <iframe src="https://outlook.office365.com/owa/calendar/67ec90cd244d4d559171c4018f477324@mairiebully.fr/5c54e7f8e94c402d98b63d5962801e5a10282575058773262481/calendar.html" style="border:0" width="100%" height="100%" frameborder="0"></iframe>
        <br/><br/>
        <?php include("footer.php"); ?>
    </body>
</html>