<?php
    function find_all_subjects(){
        global $db;
        $sql = "select * from subjects order by position asc";
        $result = mysqli_query($db, $sql);
        confirm_results($result);
        return $result;
    }

    function find_all_pages(){
        global $db;
        $sql = "select * from pages order by subject_id asc, position asc";
        $result = mysqli_query($db, $sql);
        confirm_results($result);
        return $result;
    }
?>