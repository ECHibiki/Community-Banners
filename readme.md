# Community Banners 
<img src="https://travis-ci.com/ECHibiki/Community-Banners.svg?branch=dev" /><br/>
BITCOIN: 14K6kHgpRvgKPnktf4e2UVfEaarYEe64n4<br/>
ETHEREUM: 0xf590a2cdd900eae8a680ed199e97f59d3718457a<br/>
BITCOIN CASH: 1DrBJ3TWGDjmKX4VKfaXTcMvq8UJBZyiEu<br/>
DOGECOIN: DDVEFppYykougRWhEaWN7oAYXu2Lw3bk5i<br/>
LITECOIN: LPjzwQjCjMT55W79SPifztGppdbfQQymkP<br/>
MONERO: 49wbxUahfiyCQWtpJefQWVJofKPXj7pjohgmGeTChRJRCYMyUPeZe7fMdoK5MLbsvHS3A3QoB1hWTQ4D8FZFQsh445Gp93K<br/>
<a href="https://www.patreon.com/ECVerniy"><img width="20%" src="https://banners.kissu.moe/static/Patreon_Navy.png" /></a>
<br/><a href="https://blog.verniy.ca">Blog</a>
## About
In the early days of 4chan, moot released his advertising program where individuals could create banners to troll or advertise something to users. In 2016 4chan had a banner contest that generated interest in designing advertisements for boards done by the pass holding community. Myself, looking at an alternative to the moderated submission of art and paywalling features, decided to create an alternative that allows for any user to submit and then if need be, remove/ban them after.
The use of banners in the community has been interesting and kissu's decent size community has found fun in creating them. Vichan also has some poor ways of handling banners that don't offer much in the way of encouragement for the artists on sites.

Hopefully this Laravel+React application can be installed easily next to your prefered imageboard software and linked onto your site using iframes or image loading through the random banner generation API. If you should run into trouble you can find me @ https://kissu.moe/b/res/2275.

## Requirements
Tested to work on:
- Debian GNU/Linux
- MySQL Server
- PHP 7.2, 7.3, 7.4 ...
    - Not all of these are confirmed as required, but are listed as Laravel dependencies
        - BCMath PHP Extension
        - Ctype PHP Extension
        - Fileinfo PHP extension
        - JSON PHP Extension
        - Mbstring PHP Extension
        - OpenSSL PHP Extension
        - PDO PHP Extension
        - Tokenizer PHP Extension
        - XML PHP Extension
- Composer
- Node Package Manager

## Configuration

A more detailed explanation can be found on the <a href="">Wiki</a>.

- Create a file called .env to hold your database information, using .env.example as your template, mailgun API keys, email addresses and site MIX variables.
- Using node, after running npm install, ```npm run production``` will update the javascript files based on your configurations
- Run the shell file ```./SETUP``` and it will set up Laravel for your project creating database tables and installing dependancies.
    - Note, Composer is a memory hog and in the case you do not have a large bank of memory you may need to upload the Vendor directory manually.
- Routing through NGINX is prefered, be sure to add an HTTP_X_REAL_IP header. A sample is given in the wiki.

Emails can be sent to individuals specified in the .env file. This uses a mailgun account which you will need to setup and place keys into the .env file. When a new banner is created you will get an email. This was found to easily deal with a spammer and his pool of IPs. A primary email will be listed to all and extras are blind CC so this could potentially act as a mailing list, albeit a bit tedious to set up and requiring of a cache reload every time.

Custom Dimensions may be set up in the .env. This will require an NPM rebuild.

Community Banners makes use of PHPUnit testing. In the case something is broken on your machine you can make use of this as a way to figure out what is wrong. Docker could possibly resolve issues, but hasn't been set up or tested to work.

Running on a site can easily be done through iframe making use of ```/banner```, but generating an image through javascript is possible through ```/api/banner```
