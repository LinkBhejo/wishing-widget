<?php
include_once('config.php');
if(isset($_GET['slug']) && trim($_GET['slug']) != '' && file_exists('uploads/'.$_GET['slug'].'.php')){
    $slug = $_GET['slug'];
}else{
    header('Location: ' . SITE_URL);
    exit;
}
$data = file_get_contents('uploads/'.$_GET['slug'].'.php');
$data = json_decode($data);

$name = @$data->name;
$og_image = SITE_URL.'logo.png';
if(@$data->pp != ''){
    $og_image = SITE_URL.$data->pp;;
}
?>
<!DOCTYPE>
<html lang="en-US" xml:lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title><?=$name?> Wishing You Happy Independence Day</title>
    <meta name="language" content="en-US"/>
    <meta name="robots" content="index,follow"/>
    <link rel="icon" type="image/x-icon" href="favicon.png"/>
    <meta name="description" content="<?=$name?> Wishing You Happy Independence Day - Send your greeting to your Friends or Family."/>

    <meta property="og:site_name"          content="Link Bhejo"/>
    <meta property="fb:app_id"             content="684827678383164"/>
    <meta property="og:url"                content="<?=SITE_URL.$row['slug']?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?=$name?> Wishing You Happy Independence Day" />
    <meta property="og:description"        content="<?=$name?> Wishing You Happy Independence Day - Send your greeting to your Friends or Family."/>
    <meta property="og:image"              content="<?=$og_image?>" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body style="<?=(@$data->bg != '' ? 'background-image:url('. $data->bg .')':'')?>">

<div class="container">


    <div class="main-greeting new">
        <?php
        if(@$data->pp != ''){
            echo '<img src="'.$data->pp.'" alt="'.$name.'" class="pp-img '. @$data->pp_style .'">';
        }
        ?>
        <div class="text_gradient"><?=$name?></div>
        <div class="main_body">
            <div class="text">
                <?php
                $text = $name ." की तरफ से आपको स्वतंत्रता दिवस की हार्दिक शुभकामनाये।";
                ?>
                <?=$text?>
            </div>

           <div class="vi" style="text-align: center;">
               <img src="indian-flag.gif" class="img-rounded img-responsive" alt="स्वतंत्रता दिवस की हार्दिक शुभकामनाये।" style="width: 100%;">
           </div>
        </div>

        <a href="<?=SITE_URL?>" class="btn btn-warning btn-block hidden" style="border-radius: 0px;">Create Your New Wishes</a>
        <br>

            <div class="text-center" style="border-top: 1px solid #ddd">
            <hr>
             <div style="font-size: 10px;">Mail us for suggestion or customize your wishes : linkbhejo@gmail.com</div>
            &copy;  <a href="<?=SITE_URL?>" target="_blank"><b>LinkBhejo</b></a>
        </div>
    </div>


</div>

<div class="row share-box">
    <div class="col-xs-6">
        <a class="btn btn-block whatsapp" href="whatsapp://send?text=<?=$name?> की तरफ से आपको स्वतंत्रता दिवस की हार्दिक शुभकामनाये।%0A%0Aयहां से देखे=> <?=SITE_URL.$slug?>%0A%0Aअपने नाम व फोटो की स्पेशल शुभकामनाएँ बनाने के लिए क्लिक करें - <?=SITE_URL?>" data-action="share/whatsapp/share">Share on Whatsapp</a>
    </div>
    <div class="col-xs-6">
        <a class="btn btn-block facebook" href="http://www.facebook.com/share.php?u=<?=SITE_URL.$slug?>" target="_blank">Share on Facebook</a>
    </div>

</div>


<?php
include_once('footer.php');
?>
</body>
</html>