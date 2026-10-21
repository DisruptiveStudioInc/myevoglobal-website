# EVO Global website

PHP website served by Nginx and PHP-FPM in Docker. Docker Compose mounts this
repository at `/var/www/html` and exposes the website at <http://localhost:5101>.

## Runtime

`docker-compose.yml` pins the Trafex PHP/Nginx image by digest, verified to contain
PHP **8.5.12**. This release fixes CVE-2026-109618 and CVE-2026-109619; see the
[PHP security announcement](https://www.php.net/archive/2026.php#2026-10-21-5).
When updating the image again, verify its PHP version and update the digest and
the version check in `azure-pipelines.yml` together.

## Local startup or upgrade

Run from the repository root with Docker and Docker Compose with `up --wait` support:

```sh
docker compose pull myevoglobal-website
docker compose up -d --force-recreate --no-deps --wait myevoglobal-website
docker compose exec -T myevoglobal-website php -v
```

The version must report PHP 8.5.12. Pulling source code or restarting an existing
container alone does not replace its PHP runtime; the container must be recreated.

## Production deployment

The Azure pipeline in `azure-pipelines.yml` runs on changes to `main`. It updates
the server checkout at `/var/www/$(Build.Repository.Name)`, pulls the pinned image,
recreates the service, waits for its health check, and verifies PHP 8.5.12. The
server needs Docker Compose with `up --wait` support. Deployment failures fail
the pipeline.

For a manual deployment, update the server checkout and run the local upgrade
commands above from that checkout, using `sudo` if Docker requires it. Check the
website after deployment. Recreating this single container briefly interrupts
service and resets PHP sessions stored in the container.
