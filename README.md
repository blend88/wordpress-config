Wordpress Multi-environment Configuration
=========================================

This is the basic approach our team uses for managing multiple environments (development, staging, and production) when creating Wordpress websites.

Using this setup allows us to not have to worry about changing configuration settings every time we deploy a Wordpress site to a new environment. 

How Does It Work
----------------

The `wp-config.php` file determines the environment automatically based on the following criteria:

**Development**

Matches any domain name containing:

- `.local` (i.e `blend88.local`)
- `local.` (i.e `local.blend88.com`)
- `dev.` (i.e `dev.blend88.com`)
- `localhost` (i.e `localhost`)
- `xip.io` (i.e `example.local.192.168.0.1.xip.io`)

**Staging**

Matches any domain name containing:

- `staging.` (i.e `wordpresssite.blend88-staging.com` or `staging.blend88.com`)

**Production**

Matches any domain name that doesn't satisfy the *Development* or *Staging* criteria.

Getting Started
---------------

To use this setup in one of your Wordpress websites:

1. Copy the `config/` folder and `wp-config.php` into your Wordpress root folder.
2. Edit each file in the `config/` folder with the MySQL database settings for each environment. 
3. (Optionally) Change the environment URL matching in `wp-config.php` to work with whatever naming convention you may use in your workflow.