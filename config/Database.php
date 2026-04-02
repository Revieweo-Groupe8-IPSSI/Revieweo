<?php
class Database {
    private static ?PDO $instance = null;

    // Le Singleton moderne (La meilleure pratique pour ne pas saturer le serveur)
    public static function getInstance(): PDO {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO(
                    'mysql:host=localhost;dbname=revieweo;charset=utf8mb4',
                    'root', 
                    '', // Laisse vide pour XAMPP Windows, mets 'root' si tes collègues sont sur MAMP (Mac)
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ]
                );
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }
        return self::$instance;
    }

    // Pour garder la compatibilité avec le code de tes camarades sans rien casser
    public function getConnection() {
        return self::getInstance();
    }
}
?>