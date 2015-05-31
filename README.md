[PHP] Uploader
============
PHP File Uploader is an easy to use, hi-performance File Upload Script which allows you to upload/download files to webserver

<b><a href="http://creativedream.net/jquery.filer/#demos" target="blank">Demo</a></b> | <b><a href="https://github.com/CreativeDream/php-uploader#options">Documentation</a></b> | <b><a href="https://github.com/CreativeDream/jquery.filer" target="_blank">jQuery.filer</a></b>

Usage
-------
__Upload:__
~~~~ php
include('../src/class.uploader.php');
    
$uploader = new Uploader();
$data = $uploader->upload($_FILES['files'], array(
    'limit' => 10, //Maximum Limit of files. {null, Number}
    'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
    'extensions' => null, //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
    'required' => false, //Minimum one file is required for upload {Boolean}
    'uploadDir' => 'uploads/', //Upload directory {String}
    'title' => array('auto', 10), //New file name {null, String, Array} *please read documentation in README.md
    'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
    'perms' => null, //Uploaded file permisions {null, Number}
    'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
    'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
    'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
    'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
    'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
    'onRemove' => null //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
));

if($data['onComplete']){
    $files = $data['files'];
    print_r($files);
}

if($data['hasError']){
    $errors = $data['errors'];
    print_r($errors);
}
~~~~

__Download:__
~~~~ php
include('../src/class.uploader.php');
    
$uploader = new Uploader();
$data = $uploader->upload('https://www.google.com/images/srpr/logo11w.png', array(
    'uploadDir' => 'uploads/', //Upload directory {String}
    'title' => array('auto', 10), //New file name {null, String, Array} *please read documentation in README.md
));

if($data['onComplete']){
    $files = $data['files'];
    print_r($files);
}

if($data['hasError']){
    $errors = $data['errors'];
    print_r($errors);
}
~~~~

Options
-------
Fully documentation of class options and features.

* __limit__ Maximum Limit of files. {null, Number}
* __maxSize__ Maximum Size of files {null, Number(in MB's)}
* __extensions__ Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
* __required__ Minimum one file is required for upload {Boolean}
* __uploadDir__ Upload directory {String}
* __title__ New file name
    * __null__ Uploads with original file name
    * __String__ Custom file name | use: auto, name, {{random}}, {{file_name}}, {{file_size}}, {{timestamp}}, {{date}}
    * __Array__
        * __String__ Custom file name | use: auto, name, {{random}}, {{file_name}}, {{file_size}}, {{timestamp}}, {{date}}
        * __Number__ Random name length
* __removeFiles__ Enable file exclusion
    * __Boolean__ extra for plugin jQuery.filer
    * __String__ $_POST field name containing json data with removed files names
* __perms__ Uploaded file permisions {null, Number}
* __onCheck__ A callback function name to be called by checking a file for errors (must return an array) | ($file)
* __onError__ A callback function name to be called if an error occured (must return an array) | ($errors, $file)
* __onSuccess__ A callback function name to be called if all files were successfully uploaded | ($files, $metas)
* __onUpload__ A callback function name to be called if all files were successfully uploaded (must return an array) | ($file)
* __onComplete__ A callback function name to be called when upload is complete | ($file)
* __onRemove__ A callback function name to be called by removing files (must return an array) | ($removed_files)

Support
-------
Questions or need help? You can ask it by writing us an <a href="mailto:contact@creativedream.net">Email</a>  or using <a href="http://stackoverflow.com/questions/ask?tags=php,php-uploader,jquery.filer" target="_blank">StackOverflow</a> site where you are most likely to get answer quickly. Make sure you add the tags "php", "php-upload" and "jquery.filer" when posting.

If you run into an issue and need to report a bug or you just have a question, please create an <a href="https://github.com/CreativeDream/php-uploader/issues" target="_blank">Issue</a> on GitHub issues and we will investigate it.

jQuery.filer
-------
jQuery.filer - Simple HTML5 File Uploader, a plugin tool for jQuery which change completely File Input and make it with multiple file selection, drag&drop support, different validations, thumbnails, icons, instant upload, print-screen upload and many other features and options.
<b><a href="https://github.com/CreativeDream/jquery.filer" target="blank">jQuery.filer</a></b>

License
-------
> Licensed under <a href="http://opensource.org/licenses/MIT">MIT license</a>.