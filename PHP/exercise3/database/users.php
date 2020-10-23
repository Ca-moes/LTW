<?php 
    function userExists($username, $password){
        global $db;
        
        $stmt = $db->prepare('SELECT 1 FROM users WHERE username = ? AND password = ?');
        $stmt->execute(array($username, sha1($password)));
/*         return !empty( $stmt->fetchAll() )
 */    }
?>