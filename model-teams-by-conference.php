<?php
function selectTeamsByConferenceId($conference_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT u.university_id, u.university_name FROM university u JOIN team t ON u.university_id = t.university_id WHERE t.conference_id = ?");
        $stmt->bind_param("i", $conference_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    } catch (Exception $e) {
        throw $e;
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
}
?>
