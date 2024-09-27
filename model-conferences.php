<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select university_name, conference from university u join team t on u.university_id = t.university_id where conference = ?");
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
