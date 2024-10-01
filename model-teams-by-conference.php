<?php
function selectTeamsByConferenceId($conference_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT DISTINCT u.university_id, u.university_name, c.conference FROM university u JOIN conference c ON u.university_id = c.university_id JOIN team t ON c.team_id = t.team_id WHERE c.conference_id = ?");
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
