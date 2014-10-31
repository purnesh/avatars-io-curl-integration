Code Igniter wrappers for Avatars.io
====================================
Note: There was an error in naming the repository. I am extremely sorry for inconvenience.

Facilitating Avatars.io wrappers for Code Igniter.

Components
----------
- Config: The config file contains the autoload for the only model that carries out all the tasks!
- Model: The model contains simple wrappers for avatars.io URLs.

Installation
------------
- Add the config file to your config folder, all it contains is the autoload for "Avatars_model" model.
- Add the "avatars_model.php" file to Models folder.

Usage
-----

Use the following methods in your controllers in order to retrieve the URLs for respective avatars of your users.

- For twitter's avatar url for a particular user
$this->Avatars_model->twitter($user_id);

- For instagram's avatar url for a particular user
$this->Avatars_model->instagram($user_id);

- For facebook's avatar url for a particular user
$this->Avatars_model->facebook($user_id);

- For Avatars of different sizes:
Note: The availability of different sizes of avatars is subject to availability, depending upon the resource server, i.e. Facebook, Instagram or Twitter in this case.
$this->Avatars_model->sized($service, $user_id, $size);
