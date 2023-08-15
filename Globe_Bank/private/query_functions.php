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

    function find_subject_by_id($id){
        global $db;
    
        $sql = "SELECT * FROM subjects WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_results($result);
        $subject = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        return $subject;
    }

    function find_page_by_id($id) {
        global $db;
    
        $sql = "SELECT * FROM pages ";
        $sql .= "WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_results($result);
        $page = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        return $page; // returns an assoc. array
      }

    function insert_subject($subject){
        global $db;

        $sql = "insert into subjects (menu_name, position, visible) ";
        $sql .= "values ('".$subject['menu']."'";
        $sql .= ", '" . $subject['pos']."'";
        $sql .= ", '". $subject['vis']."')";

        $result = mysqli_query($db, $sql);
        if(!$result){
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
            
        }else{
            return true;
        }
    }

    function update_subject($subject){
        global $db;

        $sql = "update subjects set ";
        $sql .= "menu_name='".$subject['menu_name']."', ";
        $sql .= "position='".$subject['position']."', ";
        $sql .= "visible='".$subject['visible']."' ";
        $sql .= "where id='".$subject['id']."' limit 1";

        $results = mysqli_query($db, $sql);
        if(!$results){
            echo mysqli_error($db);
            db_disconnect($db);
            exit;

        }else{
            return true;
        }
    }

    function delete_subject($id) {
        global $db;
    
        $sql = "DELETE FROM subjects ";
        $sql .= "WHERE id='" . $id . "' LIMIT 1";
        $result = mysqli_query($db, $sql);
    
        if($result) {
          return true;

        } else {
          // DELETE failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
      }

    function insert_page($page) {
        global $db;

        $sql = "INSERT INTO pages ";
        $sql .= "(subject_id, menu_name, position, visible, content) VALUES (";
        $sql .= "'" . $page['subject_id'] . "',";
        $sql .= "'" . $page['menu_name'] . "',";
        $sql .= "'" . $page['position'] . "',";
        $sql .= "'" . $page['visible'] . "',";
        $sql .= "'" . $page['content'] . "')";

        $result = mysqli_query($db, $sql);

        // For INSERT statements, $result is true/false
        if($result) {
            return true;

        } else {
            // INSERT failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    function update_page($page) {
        global $db;
    
        $sql = "UPDATE pages SET ";
        $sql .= "subject_id='" . $page['subject_id'] . "', ";
        $sql .= "menu_name='" . $page['menu_name'] . "', ";
        $sql .= "position='" . $page['position'] . "', ";
        $sql .= "visible='" . $page['visible'] . "', ";
        $sql .= "content='" . $page['content'] . "' ";
        $sql .= "WHERE id='" . $page['id'] . "' LIMIT 1";
    
        $result = mysqli_query($db, $sql);
        
        if($result) {
          return true;

        } else {
          // UPDATE failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
      }

      function delete_page($id) {
        global $db;
    
        $sql = "DELETE FROM pages ";
        $sql .= "WHERE id='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
    
        // For DELETE statements, $result is true/false
        if($result) {
          return true;
        } else {
          // DELETE failed
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
        }
      }

?>