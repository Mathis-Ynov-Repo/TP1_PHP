commande composer pour créer un projet symfony 4 : composer create-project symfony/skeleton nom_du_projet '4.4.*'

commande pour voir la version courante de Symfony : symfony --v 

commande à utiliser pour créer une entité : php bin/console make:entity

commande à utiliser pour créer les données de tests (fixtures) dans la base de données : php bin/console doctrine:fixtures:load 

Nous avons 2 classes de controlleurs pour une meilleure organisation, de plus, les pages ont des besoins différents (le TemplatesController a besoin du CardTemplateRepository contrairement à l'IndexController) et il pourrait y avoir une évolution potentielle ou l'on aurait une page individuelle par Template, il serait alors plus logique d'avoir un controlleur lié au templates directement.