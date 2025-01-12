<?php

namespace App;

class Factory
{

     /**
      * Récupère une instance d'entité en fonction du nom de la table.
      * 
      * @param string $table Le nom de la table pour laquelle créer l'entité correspondante. 
      * 
      * @return object Retourne une instance de l'entité associée à la table demandée.
      * 
      * @throws \Exception Si la classe d'entité correspondant au nom de la table n'existe pas.
     */
     public function getEntity(string $entity)
     {
          
          $className = "\\App\\Entity\\" . ucfirst($entity); 
          
          if (class_exists($className)) {
               return new $className();
          } 
          
          throw new \Exception("Entité pour la table {$entity} non trouvée.");
     }

     /**
      * Récupère une instance de contrôleur en fonction du nom du contrôleur.
      * 
      * @param string $controller Le nom du contrôleur (ex : 'SomeController').
      * 
      * @return object Retourne une instance du contrôleur demandé.
      * 
      * @throws \Exception Si la classe de contrôleur correspondant au nom fourni n'existe pas.
     */
     public function getController(string $controller)
     {

          if (class_exists($controller)) {
               return new $controller();
          }

          throw new \Exception("Contrôleur {$controller} non trouvé.");
     }
}


