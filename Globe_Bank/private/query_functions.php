<?php
    function find_all_subjects(){
        global $db;
        $sql = "select * from subjects order by position asc";
        $result = mysqli_query($db, $sql);
        confirm_results($result);
        return $result;
    }
?>