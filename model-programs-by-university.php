<?php
function selectProgramsByUniversity($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT u.university_id, university_location, university_mascot, university_name, conference, first_opponent, record FROM 'university' U JOIN team t ON U.university_id = t.university_id WHERE t.university_id = ?");
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
