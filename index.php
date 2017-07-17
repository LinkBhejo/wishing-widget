<?php
include_once('config.php');
include_once('save.php');
?>
<!DOCTYPE>
<html lang="en-US" xml:lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Send Your Best Wishes On Independence Day</title>
    <meta name="language" content="en-US"/>
    <meta name="robots" content="index,follow"/>
    <link rel="icon" type="image/x-icon" href="favicon.png"/>
    <meta name="description"
          content="Wishing You Happy Independence Day - Send your greeting to your Friends or Family"/>
    <meta name="twitter:title" content="Send Your Best Wishes On Independence Day">
    <meta name="twitter:description"
          content="Wishing You Happy Independence Day - Send your greeting to your Friends or Family.">
    <meta name="twitter:image" content="logo.png">
    <meta property="og:title" content="Send Your Best Wishes On Independence Day"/>
    <meta property="og:site_name" content="Link Bhejo"/>
    <meta property="og:url" content="https://linkbhejo.com/wishing-widget"/>
    <meta property="og:description"
          content="Wishing You Happy Independence Day - Send your greeting to your Friends or Family."/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="logo.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="298"/>
    <meta content='https://www.facebook.com/linkbhejo/' property='article:author'/>
    <meta property="article:publisher" content="https://www.facebook.com/linkbhejo/"/>
    <meta itemprop="name" content="Send Your Best Wishes On Independence Day">
    <meta itemprop="description"
          content="Wishing You Happy Independence Day - Send your greeting to your Friends or Family.">
    <meta itemprop="image" content="logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
<div class="container">

    <div class="main-form">

        <h4>Send Your Best Wishes On Independence Day</h4>
        <form method="post" role="form" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="name">Your Name
                            <small>(Required)</small>
                        </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>

                    <div class="form-group border">
                        <label for="message">Your Profile Picture
                            <small>(Optional)</small>
                        </label>
                        <div class="pp_file">
                            <input type="file" name="pp" onchange="readURL(this);">
                        </div>
                        <div class="pp_box">
                            <div class="col-sm-4">
                                <label>
                                    <input type="radio" name="pp_style" value="img-rounded" checked>
                                    <img src="" class="pp img-responsive img-rounded">
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label>
                                    <input type="radio" name="pp_style" value="img-circle">
                                    <img src="" class="pp img-responsive img-circle">
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label>
                                    <input type="radio" name="pp_style" value="img-thumbnail">
                                    <img src="" class="pp img-responsive img-thumbnail">
                                </label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">GO</button>

                </div>
            </div>
        </form>
        <div class="text-center" style="border-top: 1px solid #ddd">
            &copy; <a href="https://linkbhejo.com" target="_blank"><b>LinkBhejo</b></a> <span>||</span>
            linkbhejo@gmail.com
        </div>
    </div>
</div>


<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var ext = input.files[0]['type'];
            console.log(ext);
            if (ext == 'image/jpeg' || ext == 'image/jpg' || ext == 'image/png' || ext == 'image/gif') {
                reader.onload = function (e) {
                    $('.pp_box img').attr('src', e.target.result);
                    $('.pp_box').fadeIn();
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('Please Select only Images');
                $('.pp_file').html('<input type="file" name="pp" onchange="readURL(this);">')
                $('.pp_box img').attr('src', '');
                $('.pp_box').fadeOut();
                $('#pp').val('');
            }
        } else {
            $('.pp_box img').attr('src', '');
            $('.pp_box').fadeOut();
        }
    }
</script>
<?php
include_once('footer.php');
?>
</body>
</html>