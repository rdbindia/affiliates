# dev-codetest
Gambling.com Group Dev Code Test

The JSON-encoded affiliates.txt file attached contains a shortlist of affiliate contact records - one per line. 

We want to invite any affiliate that lives within 100km of our Dublin office for some food and drinks using this text file as the input (without being altered).

##Task
Write a program that will read the full list of affiliates from this txt file and output the name and IDs of matching affiliates within 100km, sorted by Affiliate ID (ascending).

You can use the first formula from this [Wikipedia article](https://en.wikipedia.org/wiki/Great-circle_distance) to calculate distance. Don't forget, you'll need to convert degrees to radians.

The GPS coordinates for our Dublin office are 53.3340285, -6.2535495.

You can find the affiliate list in this repository called affiliates.txt.

Please don’t forget, your code should be production ready, clean and tested!

## Requirements
- Use of Laravel
- Basic HTML & CSS output
- Demonstrate understanding of MVC

## Nice to haves:
- Use of [TailwindCSS](https://tailwindcss.com/)
- Use the original txt file as input
- Unit Tests
- Responsive Web Design (desktop and mobile)
- SEO best practice


================================================================================================================================================================

<h2>Solution : </h2>

Clone `affiliates` repository from GitHub using the following: 

HTTP -  https://github.com/rdbindia/affiliates.git
SSH - git@github.com:rdbindia/affiliates.git

Once cloned, cd into your directory and run `composer install`.

If you get an error, you may have to run `composer update` first. Once updated, run `composer install` again.

Copy your .env.example file into a new .env file and configure any passwords if necessary.

`cp .env.example .env`


<h3> Adding Sail to an existing application</h3>

You can also install Sail in an existing application using Composer, assuming your local development environment is set up to use it:

`composer require laravel/sail --dev`

Once the installation is complete, you can publish Sail’s docker-compose.yml file in your project directory using the following command:

`php artisan sail:install`

Lastly, to kickstart Sail, run the following command:

`./vendor/bin/sail up`

<h3>In case of any errors try these following commands:</h3>
`brew install php` (Check if you have PHP installed.)

Navigate to your project’s root directory and run the following:

`php artisan sail:publish`

This will create a new docker directory in your root directory. I have php 8.2 running, so I navigated to /docker/8.2/ and opened up the Dockerfile.
Delete the following lines of code.

<code>
&& curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | gpg --dearmor | tee /usr/share/keyrings/yarn.gpg >/dev/null \
&& echo "deb [signed-by=/usr/share/keyrings/yarn.gpg] https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
&& apt-get install -y yarn \
</code>

Save the Dockerfile and run the sail up command again.

`./vendor/bin/sail up`

Run the following commands:
`
php artisan key:generate
composer update
`

You can now access your localhost.

Resources used - https://medium.com/geekculture/setting-up-laravel-docker-on-the-new-macbook-apple-chip-m1-m2-4e9027535aca
