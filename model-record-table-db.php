<?php
function selectUniversityRecords() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT university_name, t.record FROM team t JOIN university u ON t.university_id = u.university_id");
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
