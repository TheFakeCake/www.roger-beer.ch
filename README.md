# Site web de Roger Beer

# Tech stack

- PHP 7.4
    - Symfony 5.3
- [Composer](https://getcomposer.org/) 2.x
- Git

## Pour le développement et déploiement

- [Yarn](https://classic.yarnpkg.com/lang/en/) 1.x
- Node.js >= 14.17 pour build les assets front end
    - Webpack via webpack-encore
    - Sass
- [Deployer](https://deployer.org/) 7.0.0-beta.24

# Développement

Le développement de l'application s'effectue en local avec les server de développement de Symfony et de webpack-encore.

```console
$ symfony server:start
$ yarn dev-server
```

# Infrastructure

Le site est hébergé chez Infomaniak.

## Sites et environnements

Plusieurs sites sont mis en place chez Infomaniak :

- Production : Le site web de production visible sur internet
- Staging : Environnement protégé par mot de passe avec Apache pour le développement
- Old : C'est l'ancien site web de Roger Beer, protégé par mot de passe avec Apache

## URLs

### Production

L'URL principale du site est https://www.roger-beer.ch

Les requêtes en HTTP sont redirigées vers HTTPS et plusieurs autres URLs avec des noms de domaines différents sont également redirigées vers l'URL principale :

- [http[s]://roger-beer.ch](https://roger-beer.ch)
- [http[s]://[www.]roger-beer.com](https://www.roger-beer.com)
- [http[s]://[www.]rogerbeer.com](https://www.rogerbeer.com)
- [http[s]://[www.]sequoiaandgardens.com](https://www.sequoiaandgardens.com)

### Staging

L'URL principale du site de développement est https://dev.roger-beer.ch

Les requêtes en HTTP sont redirigées vers HTTPS et plusieurs autres URLs avec des noms de domaines différents sont également redirigées vers l'URL principale :

- [http[s]://dev.roger-beer.com](https://dev.roger-beer.com)
- [http[s]://dev.rogerbeer.com](https://dev.rogerbeer.com)
- [http[s]://dev.sequoiaandgardens.com](https://dev.sequoiaandgardens.com)

### Ancien site

L'ancien site de Roger Beer a été conservé à l'adresse http://old.roger-beer.ch

## Déploiement

Le déploiement vers Infomaniak s'exécute depuis la machine locale de développement
avec l'outil PHP [Deployer](https://deployer.org/).

Durant la procédure, les assets sont construit en local avec Yarn et Node.js puis transférés vers le serveur Infomaniak.

```console
$ dep deploy
```

## Fichier `.htaccess`

Les fichiers `.htaccess` des environnements de production et staging chez infomaniak sont celui proposé par [symfony/apache-pack](https://github.com/symfony/recipes-contrib/blob/master/symfony/apache-pack/1.0/public/.htaccess)

La redirection vers HTTPS et vers l'URL principale a ensuite été ajoutée.

### Exemple pour l'invironnement de production

```apache
DirectoryIndex index.php

<IfModule mod_negotiation.c>
    Options -MultiViews
</IfModule>

<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirecting to www.roger-beer.ch and HTTPS
    RewriteCond %{HTTPS} off [OR]
    RewriteCond %{HTTP_HOST} !^www\.roger-beer\.ch [NC]
    RewriteRule (.*) https://www.roger-beer.ch/$1 [R=301,L]

    RewriteCond %{REQUEST_URI}::$0 ^(/.+)/(.*)::\2$
    RewriteRule .* - [E=BASE:%1]

    RewriteCond %{HTTP:Authorization} .+
    RewriteRule ^ - [E=HTTP_AUTHORIZATION:%0]

    RewriteCond %{ENV:REDIRECT_STATUS} =""
    RewriteRule ^index\.php(?:/(.*)|$) %{ENV:BASE}/$1 [R=301,L]

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ %{ENV:BASE}/index.php [L]
</IfModule>

<IfModule !mod_rewrite.c>
    <IfModule mod_alias.c>
        RedirectMatch 307 ^/$ /index.php/
    </IfModule>
</IfModule>
```
