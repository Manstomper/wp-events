# Set up local development

1. Install and start [Docker Desktop](https://www.docker.com/products/docker-desktop)
1. Clone this repository
1. Open a terminal and cd into its directory
1. Run `dev/init.sh`
1. Prepare for a waiting game. Switch to the Docker Desktop app, click on the arrow next to the container and wait until composer is done (icon turns from green to grey) and npm install is done (log entry "webpack compiled successfully").
1. Open the site in your browser

## Now what?

1. To continue working after containers have been stopped, run `./dev.sh`
1. To update composer packages, run `dev/composer.update.sh`
1. To update node packages, run `dev/npm-update.sh`
