<?php
// assets/php/db.php
class Database {
    private $database;

    public function __construct($database_file) {
        $this->database = new PDO('sqlite:' . $database_file);
        $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getModels() {
        $stmt = $this->database->query('SELECT * FROM models');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
