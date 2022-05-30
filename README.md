# Set up local development

1. Install and start [Docker Desktop](https://www.docker.com/products/docker-desktop)
1. Clone this repository
1. Open a terminal and cd into its directory
1. Run `dev/init.sh`
1. Wait until all processes have completed. This could take several minutes.
1. Look for the WP_HOME URL in .env and open it in your browser

## Now what?

1. To continue working after containers have been stopped, run `./dev.sh`
1. To update composer packages, run `dev/composer.update.sh`
1. To update node packages, run `dev/npm-update.sh`
