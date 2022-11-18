
# PHP Dev Environment Using Docker


## Overview

This is a starter project for a PHP development environment using Docker. A docker-compose file is used to set up the required docker containers and a Makefile is used to store the required docker commands to start up the containers.

## Prerequisites

- General knowledge on how to use docker and docker-compose
- General knowledge on PHP web development

## Run Code locally

To run the project locally, please follow the steps given below.

- Clone this Repository

  ```bash
  git clone https://github.com/Wandonium/php-docker-starter
  ```

- Go to Project directory

  ```bash
  cd php-docker-starter
  ```

- Start up the docker containers using the commands in the Makefile

  ```bash
  make run
  ```

- Print out the logs for the MySQL container and look for the 'ready for connections' text to make sure MySQL server is up and running.

  ```bash
  docker logs php-docker-starter-mysql-1
  ```

### Expected Output
You should see the following output once you navigate to the http://localhost:8080 url on your browser. Your MySQL version should be printed out so if your version if later than the one shown below then '_tings are good_' 😎.

![Landing Page Screenshot](./output.PNG?raw=true "Landing Page")

## Links

- PHP Tutorial: [PHP Tutorial](https://www.youtube.com/watch?v=BUCiSSyIGGU)
- Docker Tutorial: [Docker Tutorial](https://www.flask-book-api.m.hillarywando.com/)
- Reference Blogpost: [Blogpost](https://www.sitepoint.com/docker-php-development-environment/)
  
## About Author

- Website - [Hillary Wando](http://hillarywando.com/)
- Twitter - [@hillarywando](https://www.twitter.com/hillarywando)


<!-- It is mandatory to add this.-->

Any comments, suggestions or corrections are welcome. Contribution are welcome as This repository is licensed under [MIT](https://opensource.org/licenses/MIT) License.

