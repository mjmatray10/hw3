<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_team FROM `coach`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoachesByUniversity($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT u.university_id, university_location, university_mascot, university_name, conference, first_opponent, record FROM university U JOIN team t ON U.university_id = t.university_id WHERE t.coach_id = ?");
        $stmt->bind_param("i", $cid);
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
