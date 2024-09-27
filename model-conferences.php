<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select university_name, conference from university u join team t on u.university_id = t.university_id where conference = ?");
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
