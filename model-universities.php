<?php
function selectUniversities() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT university_id, university_location, university_mascot, university_name FROM `university`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertUniversities($uLoc, $uMas, $uName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `university` (`university_location`, `university_mascot`,  `university_name`) VALUES (?,?,?)");
        $stmt->bind_param("sss", $uLoc, $uMas, $uName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateUniversities($uLoc, $uMas, $uName, $uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `university` set `university_location` = ?, `university_mascot` = ?,  `university_name` = ? where university_id = ?");
        $stmt->bind_param("sssi", $uLoc, $uMas, $uName, $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteUniversities($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from universities where university_id = ?");
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
