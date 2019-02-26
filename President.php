<?php
 
class President {
 
  /**
   * L'objet unique President
   *
   * @var President
   * @access private
   * @static
   */
   private static $_instance = null;
 
   /**
    * Le nom du Président
    *
    * @var string
    * @access private
    */
   private $_nom='';
 
    /**
    * Le prénom du Président
    *
    * @var string
    * @access private
    */
   private $_prenom='';
 
   /**
    * Représentation chainée de l'objet
    *
    * @param void
    * @return string
    */
   public function __toString() {
 
     return $this->getPrenom() .' '. strtoupper($this->getNom());
   }
 
   /**
    * Constructeur de la classe
    *
    * @param string $nom Nom du Président
    * @param string $prenom Prénom du Président
    * @return void
    * @access private
    */
   private function __construct($nom, $prenom) {
 
     $this->_nom = $nom;
     $this->_prenom = $prenom;
   }
 
   /**
    * Méthode qui crée l'unique instance de la classe
    * si elle n'existe pas encore puis la retourne.
    *
    * @param string $nom Nom du Président
    * @param string $prenom Prénom du Président
    * @return President
    */
   public static function getInstance($nom="nom_par_defaut", $prenom="prenom_par_defaut") {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new President($nom, $prenom);  
     }
 
     return self::$_instance;
   }
 
  /**
   * Retourne le nom du Président
   *
   * @return string
   */
  public function getNom() {
    return $this->_nom;  
  }
 
  /**
   * Retourne le prénom du Président
   *
   * @return string
   */
  public function getPrenom() {
    return $this->_prenom;  
  }
}
 
?>