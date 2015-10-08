docker-symfony-wordpress
========================

[![Build Status](https://secure.travis-ci.org/ekino/docker-symfony-wordpress.png?branch=master)](http://travis-ci.org/ekino/docker-symfony-wordpress)

This is a docker demonstration of the [EkinoWordpressBundle](http://open.ekino.com/EkinoWordpressBundle/) that allows to mix [Symfony](https://www.symfony.com) and [WordPress](https://www.wordpress.org) together.

# Prerequisites

* Linux ou Mac OS X
* [PHP](http://www.php.net) (>= 5.3.9)
* [Docker](https://docs.docker.com/compose/install/) (with docker-compose tool)

# Quick installation

First, clone this repository:

```bash
$ git clone git@github.com:ekino/docker-symfony-wordpress.git
```

Next, run the demonstration instance by running:

```bash
$ make build-demo
$ make run
```

You are done!

You can visit your WordPress/Symfony application on the following URL: `http://wordpress-demo.loc` (don't forget to add it to your /etc/hosts). To install your Wordpress application, go on `http://wordpress-demo.loc/`.

You also will have to specify the MySQL docker container host when filling the database installation: `dockersymfonywordpress_db_1` and `root/root` as login/password.

# Options

You can also re-build Docker images and run the docker instance by typing:

```bash
$ make build-containers
```

You can reset your demonstration instance at any time. This can be done by using our script:

```bash
$ make build-demo
```
