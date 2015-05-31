<?php
    include('../src/class.uploader.php');
    
    $uploader = new Uploader();
    $data = $uploader->upload('https://www.google.com/images/srpr/logo11w.png', array(
        'uploadDir' => 'uploads/', //Upload directory {String}
        'title' => array('auto', 10), //New file name {null, String, Array} *please read documentation in README.md
    ));
    
    if($data['isComplete']){
        $files = $data['data'];
        print_r($files);
    }

    if($data['hasErrors']){
        $errors = $data['errors'];
        print_r($errors);
    }
?>