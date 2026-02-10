public function home()
{
    $trajetModel = new Trajet($this->db);
    $trajets = $trajetModel->getAvailableTrajets();

    require "../app/Views/home.php";
}
