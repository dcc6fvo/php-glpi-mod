# php-glpi-mod

This is a modification for GLPI 10.0.x that allows users to open tickets in entities other than the root entity, accessing them through the buttons in the "Home" profile. The "Home" profile must be configured on the root entity. In this model, users cannot open tickets in the root entity, only in the sub-entities. For this context we consider there are no people managing the root entity, only people in their departments/entities who are responsible only for them.

First you need to make some modifications to GLPI, and then just copy the files suggested in the installation session.

Prerequisites
-----------------------
  - A GLPI 10.0.x running instance

Config
-----------------------

The following represents a step by step to configure the glpi installation that will be modified:

  1) Organize your entities with at least one root entity and its subentities;
  2) Create a "Home" profile;
  3) On your "Home" profile main tab, set your fresh "Home" profile as the Default Profile;
  4) On your "Home" profile assistance tab, uncheck all the options;
  5) Last but not least, access Administration > Users and add the root entity with the home profile;
  
<p align="center">
  <img src="img/entities.png">
</p>

<p align="center">
  <img src="img/profiles.png">
</p>

<p align="center">
  <img src="img/profile-home-profiles.png">
</p>

<p align="center">
  <img src="img/profile-home-assistance.png">
</p>

<p align="center">
  <img src="img/admin-user-authorization.png">
</p>

Install
-----------------------
The install is very easy. First copy the MudarEntidades.php file to the GLPI src/ folder. Then, add the following code to front/helpdesk.public.php:

```
  if (isset($_SESSION['glpiactiveprofile'])) {
        if ($_SESSION['glpiactiveprofile']['name'] == 'Home'){
            MudarEntidade::show();
        }
  }  
```

Finally
-----------------------
If everything went well, the user's home screen will look something like this:
<p align="center">
  <img src="img/user-home-page.png">
</p>

Feel free to modify the code as needed !!
