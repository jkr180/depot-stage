<?php

class ImageModel extends CI_Model
{
    public function revue()
    {

        // Exécute la requête 
        // Ont récupère les résultats de la requete dans la variable $results.
        $results = $this->db->query("SELECT class.*, actuality.*,media.*            
            FROM class
            JOIN actuality ON class.cla_id = actuality.cla_id
            JOIN detail ON actuality.actu_id = detail.actu_id
            JOIN media ON detail.med_id = media.med_id
            WHERE cla_name = '' LIMIT 1");//ont limite a 1 les résultats de la requete pour éviter d'avoir plusieur résultat a l'affichage
        //$this->db->query chargement de la base de donnée
        // Récupération des résultats    
        $aListe = $results->result();
    }

    public function articles($nomclasse) // Ont donne $nomclasse en parametre cela permettra de trouver le nom de la classe que veux l'utilisateur pour cela ont le mettra dans la condition du "Where".
    {

        // Exécute la requête 
        $results = $this->db->query("SELECT actuality.*
        FROM actuality
        JOIN class ON actuality.cla_id = class.cla_id
        WHERE cla_name = '$nomclasse'"); 

        // Récupération des résultats    
        $tab_articles = $results->result_array();  // ont stock les résultats dans un tableau 
        for ($i = 0; $i < sizeof($tab_articles); $i++) { // ont boucle les résultats dans le tableau ont utilise la fonction sizeof pour renvoyer le nombre d'élément qu'il y a dans le tableau
            $art = $tab_articles[$i]; //ont stock les résultats du tableau 
            $idarticle = $art['actu_id'];// ont vas chercher l'ID des article
            $tabmedias = $this->medias($idarticle); // ont stock les résultats des medias dans la variable $tabmedia pour cela ont charge la fonction media($idarticle) .
            $tab_articles[$i]['medias'] = $tabmedias; // ont stock les résultats dans $tabmedias
        
        }
       

        return $tab_articles; // ont retourne les résultats de tab_articles
    }


    public function medias($idarticle) //même principe que $nomclasse
    {

        // Exécute la requête 
        $results = $this->db->query("SELECT media.*
    FROM detail
    JOIN media ON detail.med_id = media.med_id
    WHERE detail.actu_id = $idarticle");

        // Récupération des résultats    
        $tab_medias = $results->result_array();

        return $tab_medias;// ont retourne les résultats de tab_medias
    }
}
