# Set up local development

1. Install and start [Docker Desktop](https://www.docker.com/products/docker-desktop)
1. Clone this repository
1. Open a terminal and cd into its directory
1. Run `dev-init.sh`
1. Prepare for a waiting game. Switch to the Docker Desktop app, click on the arrow next to the container and wait until composer is done (icon turns from green to grey) and npm install is done (log entry "webpack compiled successfully").
1. Open http://localhost:8100

## Now what?

1. If you need to stop containers, e.g. to free up ports, run `./dev-stop.sh`
1. To continue working when containers are stopped, run `./dev.sh`
1. To update composer packages, run `./dev-composer.update.sh`
1. To update node packages, run `./dev-npm-update.sh`

[Check the Wiki for more information.](https://github.com/Manstomper/wp-events/wiki)
