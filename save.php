<?php
if(isset($_POST)) {
    if (isset($_POST['name'])) {

        if (date_default_timezone_get() != 'Asia/Kolkata') {
            date_default_timezone_set("Asia/Kolkata");
        }

        function create_slug($text)
        {
            $text = mb_convert_encoding((string)$text, 'UTF-8', mb_list_encodings());
            $text = preg_replace('~[^-\w]+~', '-', $text);
            $text = trim($text, '-');
            $text = preg_replace('~-+~', '-', $text);
            $text = strtolower($text);
            if (empty($text)) {
                return time() . '-' . rand(0, 100);
            }
            return substr($text, 0, 200);
        }

        $name = addslashes($_POST['name']);
        $pp_style = addslashes(@$_POST['pp_style']);
        $slug = create_slug($name);

        if (file_exists('uploads/' . $slug . '.php')) {
            $slug .= '-' . time() . '-' . rand(0, 999) . rand(0, 999);
            $slug = trim($slug, '-');
        }
        $pp = '';


        if (isset($_FILES)) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["pp"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


            $data = file_get_contents($_FILES["pp"]["tmp_name"]);
            $pp = 'data:image/' . $imageFileType . ';base64,' . base64_encode($data);

        }

        $data = [
            'name' => $name,
            'pp_style' => $pp_style,
            'pp' => $pp,
        ];

        $data = json_encode($data);
        $file = file_put_contents('uploads/' . $slug . '.php', $data);
        if ($file) {
            echo "<script>window.location.href='" . $slug . "';</script>";
            die;
        }
    }
}