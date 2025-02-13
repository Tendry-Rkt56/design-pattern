# Exemple d'utilisation du pattern Adapter en PHP

Ce projet illustre l'utilisation du **Pattern Adapter** pour adapter différentes méthodes d'envoi de message (à titre d'exemple) (email et SMS) à une interface uniforme. Le **Pattern Adapter** permet de rendre des interfaces incompatibles compatibles afin qu'elles puissent être utilisées de manière cohérente par un client.

## Structure du code

- **src/** : Contient tout le code source de l'application
     - **Adapter/** : Contient les classes qui adaptent les méthodes d'envoi de message (email et SMS) à une interface commune.
     - **MessageSender/** : Contient l'interface `MessageSender`, qui définit la méthode uniforme pour l'envoi de messages.
     - **Sender/** : Contient les classes spécifiques à chaque méthode d'envoi de message.

- **index.php** : Utilisé pour tester l'application. 
