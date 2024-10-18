<?php
function selectTeams() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, coach_id, university_id, conference, first_opponent, record, conference_id FROM `team`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeams($tcoachid, $tuid, $tcon, $tFO, $trec, $tconid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO team (coach_id, university_id, conference, first_opponent, record, conference_id) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("iisssi", $tcoachid, $tuid, $tcon, $tFO, $trec, $tconid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeams($tcoachid, $tuid, $tcon, $tFO, $trec, $tconid, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `team` set `coach_id` = ?, `university_id` = ?, `conference` = ?, `first_opponent` = ?, `record` = ?, `conference_id` = ? where team_id = ?");
        $stmt->bind_param("iisssii", $tcoachid, $tuid, $tcon, $tFO, $trec, $tconid, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeams($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id = ?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
