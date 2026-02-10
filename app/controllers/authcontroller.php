login()

<?php

class AuthController
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Affiche le formulaire de connexion
     */
    public function showLoginForm()
    {
        require "../app/Views/login.php";
    }

    /**
     * Traite la connexion après soumission du formulaire
     */
    public function login()
    {
        // 1. Récupération des champs du formulaire
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";

        // 2. Recherche de l'utilisateur en base
        $stmt = $this->db->prepare("SELECT * FROM employe WHERE email = ?");
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // 3. Vérification du mot de passe
        if ($user && password_verify($password, $user['password'])) {

            // ✅ Code que tu as donné
            $_SESSION['user'] = $user;

            // Redirection vers l'accueil
            header("Location: index.php");
            exit;
        }

        // 4. Sinon erreur
        $error = "Email ou mot de passe incorrect";
        require "../app/Views/login.php";
    }

    /**
     * Déconnexion
     */
    public function logout()
    {
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
