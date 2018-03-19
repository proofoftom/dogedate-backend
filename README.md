# DogeDate API

![Main](dogedate.png)

## What Is This

A CryptoKitties knock off with Doges. An additional feature on top of siring will be the aspect of a DogeShow, where users compete by entering their Doge and then, utilizing Loom side chains, perform actions to gain an advantage over the other competitors to knock them out of the competition, all the while building a pool for the winner. In addition, participating in a DogeShow entitles the user to an ERC721 raffle ticket, which can also be purchased if not participating. At the end of a DogeShow, a portion of the pool will go to the raffle winner and the rest will go to the winning pup. A user will also have to, utilizing Loom side chains, perform small maintenance tasks (i.e. feed daily, play fetch, etc.) to maintain a Doge's happiness to be able to perform in a DogeShow.

## Contributing

### Getting Started

```shell
# Clone both repositories
git clone git@github.com:tommycox/dogedate-backend.git
git clone git@github.com:tommycox/dogedate-frontend.git

# Copy seed images from frontend into public files
cp -R dogedate-frontend/src/statics/images dogedate-backend/storage/app/public/

# Setup Laravel
cd dogedate-backend
chmod -R a+rwX bootstrap/cache storage
cp .env.example .env

# Run with Docker Compose (php-fpm + nginx + MySQL)
docker-compose up -d
docker-compose run composer install
docker-compose run php php artisan key:generate
docker-compose run php php artisan migrate
docker-compose run php php artisan db:seed
```

### Frontend
The frontend will be pre-configured to use your new Laravel backend URL. Go set that up now.

[DogeDate Frontend Repo](https://github.com/tommycox/dogedate-frontend)
