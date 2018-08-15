<?php 

    session_start();
    
    function is_ajax_request(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    if (!is_ajax_request()) {
        exit;
    }

    //extract $id
    $raw_id = isset($_POST['id']) ? $_POST['id'] : '';
    if (preg_match("/blog-post-(\d+)/", $raw_id, $matches)) {
        
        $id = $matches[1];

            //store in $_SESSION['favorites']
        if(!in_array($id, $_SESSION['favorites'])) {
            $_SESSION['favorites'][] = $id;
        }

        echo 'true';
    }else{
        echo 'false';
    }

    
    //return true/false



?>