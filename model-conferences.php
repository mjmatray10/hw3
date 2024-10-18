<?php
function selectConferences() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT conference_id, conference FROM conference");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertConferences($conName, $conTeam) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `conference` (`conference`) VALUES (?)");
        $stmt->bind_param("s", $conName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateConferences($conName, $conid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `conference` set `conference` = ? where conference_id = ?");
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
