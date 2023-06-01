<?php
class Formulaire {
    //On creer des caractéristique private
    private $type;
    private $name;
    // On creer une constante
    const DEBUT_FORMULAIRE = '<form method="post" action="">';
    // On creer une nouvelle constante de fin 
    const FIN_FORMULAIRE = '</form>';

    // On creer une methode qui permet de creer un champs formulaire
    public function setChamp($type, $name) {
        // La base de la condition
        if( ($type == 'text') || ($type == 'number') || ($type == 'email')) {
            // Pour l'objet courant $this
            $this->type = $type;
            $this->name = $name;
        }
    }

    public function getChamp() {
        if( !empty($this->type) && !empty($this->name)) {
            $champ = '<input type="'.$this->type.'" name="'.$this->name.'" placeholder="' .ucfirst($this->name).'">';
            return $champ;
        }
    }
}

