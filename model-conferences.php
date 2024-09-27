<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT DISTINCT conference FROM conference");
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
        $stmt = $conn->prepare("SELECT u.university_id, u.university_name FROM university u JOIN conference c ON u.university_id = c.university_id WHERE c.conference = ?");
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
