<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT conference, MIN(conference_id) AS conference_id FROM conference GROUP BY conference");
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

function insertConferences($conName, $conTeam) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `conference` (`conference_name`) VALUES (?)");
        $stmt->bind_param("s", $conName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateConferences($conName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `conference` set `conference_name` = ? where conference_id = ?");
        $stmt->bind_param("si", $conName, $conid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteConferences($conid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from conference where conference_id = ?");
        $stmt->bind_param("i", $conid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
