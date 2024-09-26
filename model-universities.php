<?php
function selectUniversities() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT university_id, university_location, university_mascot, university_name FROM `university`");
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
