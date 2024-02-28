## Reservation app POC

### TODOs
- [ ] Add reservable resources
    - [ ] Service providers*
    - [ ] Appointment
    - [ ] Room
    - [ ] Table
- [ ] Prevent reservation time overlap
- [ ] Add multitenancy
- [ ] Add auth

* Consider service providers as professions and industries where individuals or companies offer various services to clients or customer

---

### Running locally

#### Requirements
- [Docker Desktop](https://docs.docker.com/desktop/install/linux-install/)
- [Docker Compose](https://docs.docker.com/compose/install/) (Already included if you're using Docker Desktop)

#### 1. Clone the project
```sh
git clone git@github.com:shoxton/reservation-poc.git
```

#### 2. Install dependencies using docker
```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
#### 3. Running the containers
```sh
./vendor/bin/sail up
```
See [how to create a custom shell alias](https://laravel.com/docs/10.x/sail#configuring-a-shell-alias) so you can simplify your command to be simple as running `sail up`
