# Système d’authentification (PHP + MySQL)

## Présentation

Ce projet est un système d’authentification simple développé en **PHP et MySQL**.  
Il permet aux utilisateurs de s’inscrire, se connecter, accéder à un espace protégé et se déconnecter de manière sécurisée.

L’objectif est de démontrer des compétences en développement backend, gestion de base de données et sécurité des sessions.

---

## Fonctionnalités

- Inscription utilisateur
- Connexion utilisateur
- Hachage des mots de passe
- Gestion des sessions
- Tableau de bord sécurisé
- Déconnexion

---

## Technologies utilisées

- PHP (Backend)
- MySQL (Base de données)
- HTML / CSS (Interface)
- PDO (Connexion sécurisée à la base de données)

---

## Configuration de la base de données

### 1. Création de la base de données :

``sql
CREATE DATABASE auth_db;

## Import de la base de données

Importer le fichier `auth_db.sql` dans phpMyAdmin ou MySQL :

1. Ouvrir phpMyAdmin
2. Créer une base ou utiliser le script fourni
3. Importer le fichier `auth_db.sql`
