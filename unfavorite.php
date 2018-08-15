<?php 

    session_start();
    
    //A Handy function to remove a single element from an array
    function array_remove($elementToRemove, $array){
        $index = array_search($elementToRemove, $array);
        array_splice($array, $index, 1);
        return $array;
    }



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
        if(in_array($id, $_SESSION['favorites'])) {
            $_SESSION['favorites'] = array_remove($id, $_SESSION['favorites']);
        }

        echo 'true';
    }else{
        echo 'false';
    }

    
    //return true/false



?>