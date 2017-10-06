<?php
/**
 * Created by PhpStorm.
 * User: AranankA (BWGL)
 * Date: 20.04.2017
 * Time: 14:11
 */
?>
<?php
    include_once "php/content.php";
?>
<!-- here we go... -->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $u0; ?></title>
        <!-- metadaten -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- linking -->
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/basis.css" rel="stylesheet" >
        <link href="sass/basis.css" rel="stylesheet">
        <!-- scripting -->
        <script type="text/javascript" src="js/jquery-3.2.1.js.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="js/basis.js"></script>
        <script language="JavaScript" type="text/javascript" src="js/date.js"></script>
        <!-- styling -->
        <style>@import url('https://fonts.googleapis.com/css?family=Raleway');</style>
    </head>
    <!-- Ab hier Viewport -->
    <body>
    <!-- ###Header########################################################## -->
    <!-- Kopflogo, Titel, Öffnungszeiten und Navbar Schmeräh -->
        <header>
            <h1 class="animated fadeInLeftBig"><?php echo $u0; ?></h1>
            <figure>
                <img src="pic/header_conn.jpg" width="1366" height="180" alt="Webseitenlogo von ConnPuter.de">
                <figcaption></figcaption>
            </figure>
            <div class="opening animated rotateIn">
                <ul class="ul_opening">öffnungszeiten:
                    <li>montag: 10-18 Uhr</li>
                    <li>dienstag: 10-18 Uhr</li>
                    <li>mittwoch: 10-19 Uhr</li>
                    <li>donnerstag: 10-19 Uhr</li>
                    <li>freitag: 10-19 Uhr</li>
                </ul>
                <adress>Bornaische-Straße 72 - 04277 Leipzig<br>Tel.:
                    <a href="tel:+4934158067604">0341 5806 7604</a></adress>
            </div>
            <nav class="menue">
                <ul class="ul_menue">
                    <li><a href="http://www.connputer.de/www.connputer.de" target="_blank">ConnPuter - Der Laden</a></li>
                    <li><a href="http://www.connputer-shop.de" target="_blank">ConnPuter - Der Onlineshop</a></li>
                    <li><a href="http://www.connputer.de/www.digitalisierung-leipzig.de" target="_blank">Digitalisierung</a></li>
                    <li><a href="#">Service</a></li>
                </ul>
            </nav>
        </header>
    <!-- ###Main############################################################ -->
    <!-- Alles was mit content zu tun hat -->
        <main>
            <div class="wrapper mittig">
                <div class="sidebar"><h3><?php echo $u1; ?></h3>
                        <?php echo $c0; ?>
                        <?php echo $c1; ?>
                    <div class="content_pic">
                        <?php
                        $verzeichnis = "pic/comercials/";
                        $tempo = 5000;
                        echo "<div style='text-align: center;'><img id='pic' src='#'></div>

                            <script type='text/javascript'>
                                var bild = new Array();
                                var i = 0;
                                ";

                        $ordner = openDir($verzeichnis);
                        $zaehler = 0;
                        while ($file = readDir($ordner)) {
                            if($file != "." && $file != "..") {
                                echo "bild[$zaehler]='$verzeichnis$file';\n";
                                $zaehler++;
                            }
                        }
                        closeDir($ordner);

                        echo "function anzeigen() {
                        if (i < bild.length) {
                            document.getElementById('pic').src=bild[i];
                            i++;
                        }
                        else {
                            i = 0;
                        }
                        setTimeout('anzeigen()', $tempo);
                    }
                    anzeigen();
                    </script>
                    ";
                        ?>
                    </div>
                </div>
                <div class="content"><h3><?php echo $u2; ?></h3>
                    <div>
                            <?php echo $c2; ?>
                            <?php echo $c3; ?>
                            <?php echo $c4; ?>
                    </div>
                    <div class="icons">
                        <img src="pic/com.jpg" width="80" height="80"
                                 alt="logo">
                        <img src="pic/lap.jpg" width="80" height="80"
                             alt="logo">
                        <img src="pic/rep.jpg" width="80" height="80"
                             alt="logo">
                        <img src="pic/print.jpg" width="80" height="80"
                             alt="logo">
                    </div>
                </div>
                <div class="news clearfix"><h3><?php echo $u3; ?></h3>
                    <?php echo $c5; ?>
                    <?php echo $c6; ?>
                    <figure><img src="pic/dhl_small.jpg" width="200"
                                 height="69" alt="DHL Logo klein"</figure>
                </div>
            </div>
        </main>
    <!-- ###Footer########################################################## -->
    <!-- Notwendigkeiten Seitenende -->
        <footer>
            <div class="mittig">
                <div class="foo f-li"><h3><?php echo $u4; ?></h3>
                    <p><?php echo $f1; ?></p>
                </div>
                <div class="foo f-mi"><h3><?php echo $u5; ?></h3>
                    <p><?php echo $f2; ?></p>
                </div>
                <div class="foo f-re"><h3><?php echo $u6; ?></h3>
                    <p><?php echo $f3; ?></p>
                </div>
            </div>
        </footer>
    <div class="imp left">&copy;&reg; BWGL - BitWiseGroup Leipzig 06.10.2017
        <p class="right"><script> ZeitLM(); </script></p></div>
    </body>
</html>
