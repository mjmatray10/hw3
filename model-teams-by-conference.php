<?php
function selectTeamsByConferenceId($conference) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT DISTINCT u.university_id, u.university_name, c.conference FROM university u JOIN conference c ON u.university_id = c.university_id JOIN team t ON c.team_id = t.team_id WHERE c.conference = ?");
        $stmt->bind_param("s", $conference);
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
