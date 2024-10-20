<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name, coach_team FROM `coach`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoachesByUniversity($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT university_id, university_location, university_mascot, university_name, coach_id FROM university U WHERE coach_id = ?");
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

function insertProgram($loc, $mas, $nam, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `university` (`university_location`, `university_mascot`, `university_name`, `coach_id`) VALUES (?,?,?,?)");
        $stmt->bind_param("sssi", $loc, $mas, $nam, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateProgram($loc, $mas, $nam, $cid, $uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `university` set `university_location` = ?, `university_mascot` = ?, `university_name` = ?, `coach_id` = ? where `university_id` = ?");
        $stmt->bind_param("sssii", $loc, $mas, $nam, $cid, $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteProgram($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from university where university_id = ?");
        $stmt->bind_param("i", $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>
