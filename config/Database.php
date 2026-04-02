<?php

class Database {
    private static ?PDO $instance = null;

    // Le Singleton : La meilleure pratique pour ne pas saturer le serveur MySQL
    public static function getInstance(): PDO {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=revieweo;charset=utf8mb4',
                    'root', 
                    '', // Vide par défaut sur XAMPP (Windows)
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false,
                    ]
                );
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }
        return self::$instance;
    }

    // Fonction de compatibilité pour permettre aux camarades d'utiliser le code existant
    public function getConnection() {
        return self::getInstance();
    }
}
?>