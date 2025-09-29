<?php
    include("idiomas/idiomas.php");
    $idioma = $_SESSION["language"];
    include("info.php");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $Lang; ?>" xml:lang="<?php echo $Lang; ?>">

<head>

    <!-- X -->
    <meta name="twitter:card"        content="summary">
    <meta name="twitter:site"        content="<?php echo $Host_Site; ?>">
    <meta name="twitter:title"       content="<?php echo $Company_Name; ?>">
    <meta name="twitter:description" content="<?php echo $Description_Site; ?>">
    <meta name="twitter:creator"     content="<?php echo $Company_Name; ?>">
    <meta name="twitter:image"       content="<?php echo $Host_Site; ?>/images/facebook/facebook.webp">

    <!-- FACEBOOK -->
    <meta property="og:site_name"    content="<?php echo $Company_Name; ?>" />
    <meta property="og:url"          content="<?php echo $Host_Site; ?>" />
    <meta property="og:title"        content="<?php echo $Company_Name; ?>" />
    <meta property="og:type"         content="website" />
    <meta property="og:description"  content="<?php echo $Description_Site; ?>" />
    <meta property="og:image"        content="<?php echo $Host_Site; ?>/images/facebook/facebook.webp" />
    <meta property="og:image:width"  content="1024" />
    <meta property="og:image:height" content="538" />

    <!-- METAS-->
    <meta name="viewport"            content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
    <meta name="description"         content="<?php echo $Description_Site; ?>" />
    <meta name="keywords"            content="<?php echo $Keywords_Site; ?>" />
    <meta name="autor"               content="<?php echo $Company_Name; ?>" />

    <title><?php echo $Company_Name; ?></title>

    <!-- STYLES-->
    <link rel="stylesheet" type="text/css" href="./css/min/reset.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/min/main.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/min/root.min.css" />

    <link rel="stylesheet" type="text/css" href="./css/body/style.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/body/navigation.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/body/slick.min.css" />

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/favicon/manifest.json">
    <meta name="msapplication-config" content="./images/favicon/browserconfig.xml" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <Link rel="shortcut icon" href="./images/favicon/favicon.ico" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

    <!-- jQuery y Slick -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
    <body id="page-content">

        <?php
        $wrap_get = "<div class='wrap-get'>
          <div class='btn-get'>{$Btn_started}</div>
          <div class='get'>";

        foreach ($links as $link) {
            $wrap_get .= "
            <a href='{$link['url']}{$ref}'
               target='_blank'
               class='{$link['class']}'
               aria-label='{$link['label']}'>{$link['text']}</a>";
        }

        $wrap_get .= "
          </div>
        </div>";

        echo $wrap_get;
        ?>

        <!-- ============================================== -->
        <!-- PRELOADER -->
        <!-- ============================================== -->

        <div id="preloader">
          <div id="progress">
            <span id="data">0%</span>
          </div>
        </div>

        <!-- ============================================== -->
        <!-- NAVIGATION -->
        <!-- ============================================== -->

        <header>
            <nav class="nav">
                <div class="navigation">

                    <div class="logo">
                        <a href="./"><img src="./images/logo/logo.svg" alt="logo evo global"></a>
                    </div>

                    <div class="menu">
                        <ul>
                            <?php
                            $id = $_GET['id'] ?? '';
                            $counter = 0;

                            foreach ($Menu as $item) {
                                $counter++;

                                // Primer item -> dinámico
                                if ($counter == 1) {
                                    // Si NO estamos en home ni vacío -> ir a "./"
                                    if ($Actual_Page !== '' && $Actual_Page !== 'home') {
                                        $item[0] = './';
                                    } else {
                                        $item[0] = '#home';
                                    }
                                }

                                // Segundo y tercer item -> solo mostrar en "home" o vacío
                                if (in_array($counter, [2, 3]) && $Actual_Page !== '' && $Actual_Page !== 'home') {
                                    continue;
                                }

                                // Submenú con sub-sub (Menu 4)
                                if ($counter == 4) {
                                    echo "<li class='rel'>";
                                    echo "<a href='#' class='btn-sub'>{$item[2]}</a>";

                                    echo "<ul class='sub'>";
                                    foreach ($Sub as $item_sub) {
                                        $hasSubSub = isset($item_sub[1]) && is_array($item_sub[1]);

                                        echo "<li>";
                                        echo "<a href='#'>{$item_sub[0]}</a>";

                                        if ($hasSubSub) {
                                            echo "<ul class='sub-sub'>";
                                            foreach ($item_sub[1] as $subsub) {
                                                echo "<li>
                                                        <span class='img'><img src='./images/body/products/{$subsub[0]}.webp' alt='{$subsub[2]}'></span>
                                                        <a href='?p=product&id={$subsub[0]}$ref'>{$subsub[1]}<span>{$subsub[2]}</span></a>
                                                      </li>";
                                            }
                                            echo "</ul>";
                                        }
                                        echo "</li>";
                                    }
                                    echo "</ul>";
                                    echo "</li>";

                                // Submenú simple (Menu 7)
                                } else {
                                    echo "<li><a href='{$item[0]}' class='{$item[1]}'>{$item[2]}</a></li>";
                                }
                            }
                            ?>

                            <li class="sub-evo rel">
                                <div class="btn-lan btn-shop btn c-ter br-30"><?php echo $Menu_05; ?></div>
                                <div class="lan flags">
                                    <?php
                                    foreach ($Sub_shop as $idioma_opcion) {
                                        $href  = $idioma_opcion[0];
                                        $class = $idioma_opcion[1];
                                        $text  = $idioma_opcion[2];
                                        echo "<a class='$class' href='$href' target='_blank' >$text</a>";
                                    }
                                    ?>
                                </div>
                            </li>
                            <li class="sub-evo rel d-none med-d-block">
                                <div class="btn-lan btn-login btn c-ter br-30"><?php echo $Menu_log; ?></div>
                                <div class="lan">
                                    <?php
                                    foreach ($Sub_login as $idioma_opcion) {
                                        $href  = $idioma_opcion[0];
                                        $class = $idioma_opcion[1];
                                        $text  = $idioma_opcion[2];
                                        echo "<a class='$class' href='$href' target='_blank' >$text</a>";
                                    }
                                    ?>
                                </div>
                            </li>
                            <li class="sub-evo rel d-none med-d-block">
                                <div class="btn-lan btn-login btn c-ter br-30"><?php echo $Menu_reg; ?></div>
                                <div class="lan">
                                  <?php
                                    foreach ($Sub_register as $idioma_opcion) {
                                      $href  = $idioma_opcion[0];
                                      $class = $idioma_opcion[1];
                                      $text  = $idioma_opcion[2];
                                      echo "<a class='$class' href='$href' target='_blank' >$text</a>";
                                    }
                                  ?>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="jc-center ai-center g-10">
                        <div class="rel">
                            <div class="btn-lan <?= htmlspecialchars($idioma); ?>"><?= $Condicion_lan; ?></div>
                            <div class="lan">
                                <?php
                                foreach ($idiomas as $codigo => $nombre) {
                                    $activeClass = ($_SESSION["language"] === $codigo) ? 'selected' : '';
                                    echo "<a class='$codigo $activeClass' href='?language=$codigo$Actual_Page_Lan$Client_Page_Id'>$nombre</a>";
                                }
                                ?>
                            </div>
                        </div>

                        <div class="ai-center med-d-none">
                            <div class="rel">
                                <div class="btn-lan btn-login btn c-ter br-30"><?php echo $Menu_log; ?></div>
                                <div class="lan">
                                    <?php
                                    foreach ($Sub_login as $idioma_opcion) {
                                        $href  = $idioma_opcion[0];
                                        $class = $idioma_opcion[1];
                                        $text  = $idioma_opcion[2];
                                        echo "<a class='$class' href='$href' target='_blank' >$text</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="rel">
                                <div class="btn-lan btn-login btn c-ter br-30"><?php echo $Menu_reg; ?></div>
                                <div class="lan">
                                    <?php
                                        foreach ($Sub_register as $idioma_opcion) {
                                            $href  = $idioma_opcion[0];
                                            $class = $idioma_opcion[1];
                                            $text  = $idioma_opcion[2];
                                            echo "<a class='$class' href='$href' target='_blank' >$text</a>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="hamburguer">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </nav>
        </header>

        <!-- ============================================== -->
        <!-- PAGE CONTENT -->
        <!-- ============================================== -->

        <main>





