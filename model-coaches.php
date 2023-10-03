<?php
function selectCoaches() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM Coaches");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
