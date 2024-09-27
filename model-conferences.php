<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT DISTINCT conference FROM university u JOIN team t ON u.university_id = t.university_id");
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

function selectTeamsByConference($conference) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT university_id, university_name FROM university WHERE conference = ?");
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
