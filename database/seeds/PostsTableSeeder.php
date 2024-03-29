<?php

use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'How I built a Web Scraper to create a Bin Collection API',
                'slug' => 'bin-web-scraper',
                'markdown' => 'A few months back I wrote some code that would go to my local council\'s website, search for a street name, open the link, get the bins for that week. When I got it working I was amazed at how easy it was. I was able to just take out content from another site and present it however I wanted.

I wrote this project with the end goal of turning it into Voice skills for Alexa and Google Assistant, which I will do, just in a few weeks when I have some spare time.

![https://damcclean-blog.s3.amazonaws.com/bin-scraper.png](https://damcclean-blog.s3.amazonaws.com/bin-scraper.png)

Above is the PHP function I wrote to serve the API request. I\'m just going to walk you through the code.

So the first thing it does is sets up three arrays, the `binArray`, the `timeArray` and the `locationArray`. These will be used later to store data we capture during our scraping.

The next two variables hold the two URL parameters required for the request. So the API request URL would look like this. `https://bin-collections.herokuapp.com/api/bin?street=Calderwood%20Road&area=camglen`

We then get have four if statements. Each of the if statements check if the `$area` parameter equals to one of the areas. It then sets the base URL for the search results on the local council\'s website.

The next thing we do is to setup Goutte, which is a PHP web scraper library. I used a Laravel wrapper for Goutte in this project. We send Goutte to the base URL, the one we set in the last bit.

On the page we then go ahead and find the result links and we click on the first one we find and we grab the URL from that and store that in the `$link`variable.

Now we go to the street page we found in the search results.

The next part of the code, we find parts in the web page and take out the text of it and we store it in the arrays we created a minute ago.

So for example, we store the location in the `locationArray` and so on.

Then we go ahead and send a JSON response with the content of each of the arrays.

On the frontend of my bin collection site, I\'m using a Vue component that makes HTTP requests to the API I built.

I\'m pretty proud of the whole thing. It could probably be simplified quite a bit but at least it works.',
                'is_published' => '2019-01-04T19:53:00.000+00:00'
            ],
            [
                'title' => 'CoderDojo Bridgeton Website',
                'slug' => 'coderdojo-bridgeton',
                'markdown' => '<!--kg-card-begin: html--><img src="https://damcclean-blog.s3.amazonaws.com/coderdojo-wip.jpg"><!--kg-card-end: html--><p>For the last year and a half I have been building the <a href="https://www.coderdojobridgeton.co.uk/"><strong>CoderDojo Bridgeton</strong></a> website. A large portion of that time was spent creating a static prototype with HTML and CSS.</p><h1 id="what-is-coderdojo">What is CoderDojo?</h1><p>"The CoderDojo movement believes that an understanding of programming languages is increasingly important in the modern world, that it\'s both better and easier to learn these skills early, and that nobody should be denied the opportunity to do so. To that end, we\'ve built a global network of free, volunteer-led, community-based programming clubs for young people. Anyone aged seven to seventeen can visit a Dojo where they can learn to code, build a website, create an app or a game, and explore technology in an informal, creative, and social environment." - <a href="https://coderdojo.com/about/"><strong>About CoderDojo</strong></a></p><h1 id="wireframes-and-planning">Wireframes and Planning</h1><p>Before we could get started with anything, We needed to plan out the website and create wireframes of the design. The below images are wireframes of the Homepage and the Blog Archive.</p><!--kg-card-begin: html--><img src="https://damcclean-blog.s3.amazonaws.com/coderdojo-wireframe-01.jpg"><!--kg-card-end: html--><!--kg-card-begin: html--><img src="https://damcclean-blog.s3.amazonaws.com/coderdojo-wireframe-02.jpg"><!--kg-card-end: html--><h1 id="prototypes">Prototypes</h1><p>As I said at the start of this post, Prototyping took up most of the time in this project (over a year). The prototype was created using plain HTML and CSS. Later on I converted all of the CSS to SASS so it\'s easier to maintain.</p><p>I learnt a lot whilst I was creating this project thanks to my mentors.</p><h1 id="the-end-product">The End Product</h1><p>After the prototype, I built the site using <a href="https://jekyllrb.com/"><strong>Jekyll</strong></a> and I am hosting it with <a href="https://pages.github.com/"><strong>https://pages.github.com/</strong></a>. I also made use of <a href="http://cloudflare.com/"><strong>Cloudflare</strong></a> because it gives us a free SSL certificate and a bunch of other benefits.</p><p>The website is live! Please <a href="https://www.coderdojobridgeton.co.uk/"><strong>check it out</strong></a>.</p>',
                'is_published' => '2018-01-28T19:10:00.000+00:00'
            ],
            [
                'title' => 'The Dream Web Development Stack: Statamic, Laravel, TailwindCSS and VueJS',
                'slug' => 'dream-web-dev-stack',
                'markdown' => 'For the past few years I’ve been a hobbyist web developer, making websites for friends and family. During this time, I’ve used all sorts of stuff to build my websites. Bootstrap, WordPress and jQuery.

However, most of the stuff I was using felt clunky and I didn’t 100% understand it.

Now in 2018, I think I may have found my dream web development stack. It consists of Statamic, Laravel, TailwindCSS and VueJS.

![https://damcclean-blog.s3.amazonaws.com/statamic-homepage.png](https://damcclean-blog.s3.amazonaws.com/statamic-homepage.png)

# [**Statamic**](https://statamic.com/)

Statamic is a flat-file content management system which means that all of your data is stored in markdown files. This [**is great**](https://statamic.com/why) because it means that there is no MySQL database to worry about.

Previously I was working with WordPress to built sites which meant having to write ugly PHP loops every time I wanted to display content. Whereas with Statamic, you can use something like this to display the latest posts.

![https://damcclean-blog.s3.amazonaws.com/laravel-homepage.png](https://damcclean-blog.s3.amazonaws.com/laravel-homepage.png)

# [**Laravel**](https://laravel.com/)

[**Laravel**](https://laravel.com/) is a PHP framework for web artisans. It’s easy to learn and it makes building web applications fast.

If you would like to check out what a Laravel project looks like, check out one I’ve [**created here**](https://github.com/damcclean/laravel-licenses).

![https://damcclean-blog.s3.amazonaws.com/tailwindcss-homepage.png](https://damcclean-blog.s3.amazonaws.com/tailwindcss-homepage.png)

# TailwindCSS

[**TailwindCSS**](https://tailwindcss.com/) is a CSS framework like no other. It’s a utility first framework that allows for quick development.

For example if you want a div with 2rem of padding, a background of black and flexbox, the code would look like this.

```html
<div class="p-8 bg-black flex"></div>
```

It feels a bit strange at first as you’re adding tones of classes, but you’ll get used to it and wonder why you did it any other way.

![https://damcclean-blog.s3.amazonaws.com/vuejs-homepage.png](https://damcclean-blog.s3.amazonaws.com/vuejs-homepage.png)

# Vue.js

You’ve probably used jQuery or some other Javascript library before. Personally, I had used jQuery and I hadn’t really got the hang of it. I was always coping and pasting code and when things broke I had absolutely no idea what happened. However, then I stumbled upon [**VueJS**](https://vuejs.org/) and gave it a try and I loved it. It’s so easy to write. One of the first things I built with Vue was a postcode locator that hooks into an API and grabs information about a certain UK postcode. You can [view it over on CodePen](https://codepen.io/damcclean/pen/Jvyqwb).',
                'is_published' => '2018-09-03T19:40:00.000+01:00'
            ],
            [
                'title' => 'My Favourite Podcasts, Video tutorials, Newsletters and Blogs for Web Developers',
                'slug' => 'favourite-podcasts-videos-web-developers',
                'markdown' => '<!--kg-card-begin: markdown--><p><img src="https://damcclean-blog.s3.amazonaws.com/css-code.jpeg" alt="https://damcclean-blog.s3.amazonaws.com/css-code.jpeg"></p>
<!--kg-card-end: markdown--><p>You can often find me reading web development articles or listening to podcasts. I’ve collected some of my personal favourites resources that I think might be useful for other web developers, like myself.</p><!--kg-card-begin: markdown--><h1 id="podcasts">Podcasts</h1>
<li><a href="https://blog.codepen.io/Radio/" rel="nofollow noopener" target="_blank">CodePen Radio</a> — The CodePen Team run a weekly podcast where they chat about all things running a web business.</li>
<li><a href="http://www.fullstackradio.com/" rel="nofollow noopener" target="_blank">Full Stack Radio</a> — Full Stack Radio is run by Adam Wathan, a well-respected figure in the Laravel community. He talks to others about product design, user experience, unit testing and more.</li>
<li><a href="https://shoptalkshow.com/" rel="nofollow noopener" target="_blank">ShopTalk</a> — Chris Coyier and Dave Rupert run Shop Talk show.</li>
<li><a href="https://syntax.fm/" rel="nofollow noopener" target="_blank">SyntaxFM</a> — Wes Bos and Scott Tolinski record two episodes of Syntax a week. One episode is around 15 minutes long and they talk about a specific topic. And the other episode is longer, around an hour and talks about multiple topics.</li>
<li><a href="http://www.laravelpodcast.com/" rel="nofollow noopener" target="_blank">Laravel Podcast</a> — This podcast talks about news and in the Laravel community and they often interview people in the Laravel community.</li>
<li><a href="http://www.dadsindev.com/" rel="nofollow noopener" target="_blank">Dads in Development </a>— The Dads in Dev podcast talks about being dads and being geeks. It’s hosted by David Hemphill and Andrew Del Prete.</li>
<li><a href="https://www.northmeetssouth.audio/" rel="nofollow noopener" target="_blank">North Meets South Web Podcast</a> — This podcast is hosted by Michael Dyrynda and Jacob Bennett. Michael and Jacob talk about life as web developers while battling a 14 hour time difference.</li>
<h1 id="videotutorials">Video Tutorials</h1>
<li><a href="https://codecourse.com/" rel="nofollow noopener" target="_blank">Codecourse </a>— I first learned about Laravel through some videos on Codecourse. The videos are very well planned and are simple. Codecourse also provides various other subjects which you can learn about like Nodejs and Socket.io.</li>
<li><a href="https://laracasts.com/" rel="nofollow noopener" target="_blank">Laracasts </a>— Laracasts is a great website with lots of tutorials on Laravel and Vue. I would recommend it to anyone getting started with Laravel. “It’s like Netflix for your career”</li>
<li><a href="https://vueschool.io/" rel="nofollow noopener" target="_blank">Vue School</a> — If you’re looking to dig into Vue, then Vue School is for you. There are new videos being added every week. The website is run by Alex Kyriakidis (who is also a member of the Vue Core Team) and Rolf Haug.</li>
<h1 id="newsletters">Newsletters</h1>
<li><a href="https://codepen.io/spark/" rel="nofollow noopener" target="_blank">CodePen Spark</a> — CodePen produces a weekly newsletter with links to various things in the front-end web development world.</li>
<li><a href="https://justinjackson.ca/" rel="nofollow noopener" target="_blank">Justin Jackson</a> — Justin sends out frequent emails with startup advice, lessons and tips for growing your business. I find that it’s one of the only emails that I actually read.</li>
<li><a href="https://premium.wpmudev.org/blog/get-the-whip/" rel="nofollow noopener" target="_blank">WPMUDev WHIP</a> — The WHIP newsletter has links to news articles across the WordPress community.</li>
<li><a href="https://murze.be/newsletter" rel="nofollow noopener" target="_blank">Freek’s newsletter </a>— Freek Van der Herten, who is very well known in the Laravel community, sends out an email every two weeks with interesting links for modern PHP Developers</li>
<h1 id="blogs">Blogs</h1>
<li><a href="https://laravel-news.com/" rel="nofollow noopener" target="_blank">Laravel News</a> — Laravel News is a Laravel focused blog sharing tools and packages to help you with your Laravel apps.</li>
<li><a href="https://mattstauffer.com/blog/" rel="nofollow noopener" target="_blank">Matt Stauffer</a> — Matt Stauffer who works for Tighten blogs every so often on Laravel related topics.</li>
<li><a href="https://www.smashingmagazine.com/articles/" rel="nofollow noopener" target="_blank">Smashing Magazine</a> — an Overall great blog for front-end web developers.</li>
<li><a href="https://css-tricks.com/" rel="nofollow noopener" target="_blank">CSS Tricks</a> — Everyone knows what CSS Tricks is</li>
<li><a href="http://www.bbc.co.uk/blogs/internet" rel="nofollow noopener" target="_blank">BBC Internet Blog</a> — The BBC run a blog on what goes on behind the scenes of BBC Online. The&nbsp;<a href="https://www.bbc.co.uk/gel/" rel="nofollow noopener" target="_blank">BBC Gel site</a>&nbsp;is also a good read.</li><!--kg-card-end: markdown-->',
                'is_published' => '2018-10-18T19:49:00.000+01:00'
            ],
            [
                'title' => 'Finding an idea can be hard...',
                'slug' => 'finding-an-idea-can-be-hard',
                'markdown' => '<p>I\'m getting to that point with ReadCast where it\'s starting to be pretty stable and the features are pretty much what I wanted them to be when I initially started.</p><p>This is leading me to think about starting another side project. The only thing is: I want to do it for real this time.</p><p>Before I put my time and effort into creating a project, I want to know for sure that it\'s something developers (my chosen audience) will use. Rather than spending lots of time on a product only to launch it and find out no one ever needed it and that I had wasted my time.</p><p>I\'ve actually tried to keep a list in Todoist every time I came up with a possible business idea, these are a few of the things I came up with.</p><ul><li>App that provides consistency for open-source repositories created by an organisation - keeping <code>README.md</code>\'s, <code>.gitignore</code> etc the same style and in sync</li><li>App that PRs all the time to make sure you are following JavaScript, PHP, CSS best practises.</li><li>Clean live chats for small and medium Saas companies</li><li>Single app for messaging with others</li></ul><p>I tried making a few of them and a few of them I just decided would just be too complicated or is just not technically possible (the last one).</p><p>I think what I\'m going to do over the next few days is study a few different developers I know and find their pain points of doing everyday work and see if there\'s a common issue in there that could be solved by a software product.</p><p>If I remember correctly, that\'s what Justin Jackson said to do in one of his Laracon talks.</p>',
                'is_published' => '2019-09-04T22:23:49.000+01:00'
            ],
            [
                'title' => 'Getting Started with testing Laravel Apps',
                'slug' => 'getting-started-laravel-testing',
                'markdown' => 'Recently I\'ve started to write tests in my Laravel applications. Tests are useful because they allow you to make sure important parts of your application are working, things like registration or subscriptions. Things that could be easily missed and could cause uproar if they broke.

When I started building ReadCast, about a month ago I created it as a prototype and missed out on writing tests. Now that the application is stable and has a few users, I think it\'s about time to write some tests.

In a standard Laravel install, PHPUnit is already installed for you and so are a few example tests.

In this tutorial I\'m going to go through:

- Setting up your tests
- Creating database seeds
- Writing tests

# Setting up your tests

In Laravel, your tests belong inside the `tests` directory. In there you have two directories. One for your feature tests and one for your unit tests. I should probably know the difference between this but I don\'t, so go elsewhere if you want to know the meaning.

Most applications will talk to a database when doing anything. When testing, there are two types of databases that people will likely use. They will either use a SQLite database or a MySQL database.

If you don\'t know, a SQLite database is pretty much a lightweight SQL database that\'s stored in a single file.

I tend to create a separate MySQL database for running my tests. Why? Because last time I tried to use SQLite I managed to break some dependency that every programming language needed which meant I had to rebuild my Mac, not a fun time. However, feel free to use whatever you like best.

If you like using MySQL like me, this is how I tend to configure it.

First, I create my testing database, usually called something like `app_testing`.

The next thing I do is go to my `database.php` configuration file and setup a new `testing` database connection. It looks like this:

```php
\'testing\' => [
    \'driver\'    => \'mysql\',
    \'host\'      => env(\'TESTING_DB_HOST\', \'localhost\'),
    \'database\'  => env(\'TESTING_DB_DATABASE\', \'app_testing\'),
    \'username\'  => env(\'TESTING_DB_USERNAME\', \'homestead\'),
    \'password\'  => env(\'TESTING_DB_PASSWORD\', \'secret\'),
    \'charset\'   => \'utf8\',
    \'collation\' => \'utf8_unicode_ci\',
    \'prefix\'    => \'\',
    \'strict\'    => false,
]
```

The values rely on some environment variables so you\'ll need to add these env variables to your `.env` and `.env.example` files.

```
TESTING_DB_HOST=
TESTING_DB_DATABASE=
TESTING_DB_USERNAME=
TESTING_DB_PASSWORD=
```

Now there\'s one more thing you need to do before being fully setup. You\'ll need to specific the type of database you wish to use when testing. We can do this in PHPUnit\'s configuration file, `phpunit.xml`.

In the bottom `<php>` part, make it look like below, where we add the `DB_CONNECTION` rule and specify the `testing` database connection we just created.

```xml
<php>
        <env name="APP_ENV" value="testing"/>
        <env name="BCRYPT_ROUNDS" value="4"/>
        <env name="CACHE_DRIVER" value="array"/>
        <env name="MAIL_DRIVER" value="array"/>
        <env name="QUEUE_CONNECTION" value="sync"/>
        <env name="SESSION_DRIVER" value="array"/>
        <env name="DB_CONNECTION" value="testing"/>
    </php>
```

That should be us done with the setup.

# Setting up factories

Factories allow you to you to generate database records. Laravel comes with a package called Faker which makes it easy to create factories with fake information. Things like names, emails, passwords, that sort of thing.

You can find your factories in the `database/factories` directory. If you need to create your own factory, you can do so with a simple artisan command: `php artisan make:factory ArticleFactory`

Laravel comes with a User Factory, so we\'ll just use that one. The user factory looks like this:

```php
<?php
  
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application\'s database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        \'name\' => $faker->name,
        \'email\' => $faker->unique()->safeEmail,
        \'email_verified_at\' => now(),
        \'password\' => \'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm\', // secret
        \'remember_token\' => Str::random(10),
    ];
});
```

The information in the sample user factory is fine for me but you might want to change it, depending on what fields you have in models.

# Writing tests

Laravel gives you a pretty basic test which visits a page and the test passes if the status of the page request is 200 (that means its OK).

```php
<?php
  
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get(\'/\');
        $response->assertStatus(200);
    }
}
```

Now that we know what tests look like, let\'s delete the example test and create our own. To create our example test, run this command:

```
php artisan make:test LoginTest
```

In the test I\'m going to write, I\'m going to create a user, login to my application, submit my email and password then the test will pass if we get status code 200.

Just a heads up, when writing test, make sure to start the method with `test` so PHPUnit knows which methods are actually tests.

In our test, we need to specify that we want to use the `RefreshDatabase` trait. This will allow us to have a clean database for every test meaning results won\'t be messed up with those from other tests, You can add trait like this:

```php
<?php
  
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
  
    //
}
```

Now let\'s write the test. The first thing I said we would do in the test would be to create the user we want to login. We can use Factories to do this. In the code sample below, we\'re creating a user and storing it\'s information in the `user` variable.

```
$user = factory(\App\User::class)->create();
```

Now we have created the user, we need to send a POST request to my login endpoint with my email and password.

The below code will find the input with the name of `email` and will fill it with the email of the user we created and will find the input with the name `password`and will fill it with the password of the user (by default, Laravel\'s user factory password is \'secret\'). It will then find the button with the text that says \'Login\' which submits the form. Then it checks to make sure we\'re redirected successfully to the `/articles` url.

```php
$response = $this->post(\'/login\', [
	\'email\' => $user->email,
	\'password\' => \'secret\'
]);

$response->assertStatus(302)
	->assertRedirect(\'/articles\');
```

You should now have something that looks a little like this:

```php
<?php
  
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
  
    public function testLogin()
    {
        $user = factory(\App\User::class)->create();
      
        $response = $this->post(\'/login\', [
            \'email\' => $user->email,
            \'password\' => \'secret\'
        ]);
      
        $response->assertStatus(302)
            ->assertRedirect(\'/articles\');
    }
}
```

If you\'ve done everything correctly, you should be able to run your tests and see them all pass.

![https://damcclean-blog.s3.amazonaws.com/happy-times.png](https://damcclean-blog.s3.amazonaws.com/happy-times.png)

And that\'s it, we\'ve got Laravel setup and we\'ve written tests to make sure logins to our application are working.',
                'is_published' => '2019-07-17T19:59:57.000+01:00'
            ],
            [
                'title' => 'Setting up Laravel Forge for a Statamic site',
                'slug' => 'laravel-forge-statamic',
                'markdown' => '<blockquote>A big thanks to <a href="https://benfurfie.co.uk">Ben Furfie</a> who helped by looking over this article and suggested loads of improvements. </blockquote><p>Every site needs to be hosted, and your Statamic site is no different. The recommended solution is a combination of Digital Ocean and Laravel Forge to handle your hosting and provisioning respectively.</p><p>This is the setup I use personally, but being around in the Statamic discord for long enough has prompted me that it\'s something not everyone knows how to do. So I thought I would write up something to help lighten the learning curve.</p><!--kg-card-begin: hr--><hr><!--kg-card-end: hr--><p>First things first, it\'s worth making sure that you know what each part of the puzzle does.</p><h2 id="laravel-forge">Laravel Forge</h2><p>Forge is the tool that is designed to make the provisioning, deploying and managing your website easier.</p><h2 id="digital-ocean">Digital Ocean</h2><p>Digital Ocean is the company that you rent your server from. You pay them for your own virtual private server which is often abbreviated as a VPS.</p><p>Now that we know what each thing is for, let\'s actually get started with the setup process.</p><h2 id="setting-up-laravel-forge-for-statamic">Setting up Laravel Forge for Statamic</h2><p>Next, you\'ll need to setup your own Laravel Forge account. You can do this by <a href="https://forge.laravel.com/register">clicking here</a> and creating one, that is if you don\'t already have one. After you\'ve entered all your details, you will be prompted to connect with Github or one of the other version control providers. You\'ll also need to connect with a <strong>service provider</strong>, which in our case is Digital Ocean. </p><p>Forge will ask you for a Digital Ocean token, you can find this by:</p><ul><li>logging into your Digital Ocean account</li><li>going into the API section</li><li>creating a token with <code>Read &amp; Write</code> access.</li></ul><p>Then you just need to copy the token it gives you and add it to Forge where it asks for it.</p><h3 id="configuring-your-first-server">Configuring your first server</h3><p>You will now be on the server screen. This is where you\'ll be able to create your first server. It\'ll ask you to choose some options.</p><blockquote>Word of advice: unless you\'re going to be serving loads of users and you\'re going to be using loads of storage, then you don\'t need to go any higher than the minimum $5 Digital Ocean droplet. If you do need to go higher in the future, it\'s easy to change - all you need to do is change a small setting in the Digital Ocean control panel.</blockquote><p>Once you\'re done with all of the above, Forge will create a server for you in your Digital Ocean account. It usually takes anywhere from five to ten minutes for Forge to provision a new server; so you might want to find a good YouTube video to watch in that time.</p><h2 id="your-first-laravel-forge-statamic-site">Your first Laravel Forge Statamic site</h2><p>Once the server is ready, you\'ll be able to click on the name of the server and you\'ll be given the option to create your first site.</p><p>With this first site, it might be clever to start with a dummy domain or a low traffic site; something that you\'re not going to be panicking about if all goes weird.</p><p>Fill in the domain of the site you want to host. You can also add aliases here, like a www version.</p><p>The last version is a select. For Statamic sites, leave this as <code>General PHP / Laravel</code>.</p><p>You\'ll also want to change the web directory from <code>/public</code> to <code>/</code>. Of course, if you\'ve setup Statamic to work above webroot or your planning on using a service like Envoyer, this doesn\'t apply, but as we\'re planning on keeping everything simple, just set it as <code>/</code>.</p><h3 id="selecting-your-statamic-github-repo">Selecting your Statamic Github repo</h3><p>Next, you\'ll be asked if you want to set the site up from a repo, or as a fresh WordPress install. As this is a Statamic site, you\'re going to want to select the first option.</p><p>As with most git related services, you need to include both the repo author, and the repo name. So my github name is <code>damcclean</code>, and my example repo is <code>awesome-statamic.com</code>. So the repo name will be <code>damcclean/awesome-statamic.com</code>. That\'s what you put in that field.</p><p>Next, you\'ll be asked if you want to install any composer dependencies. Untick that box or you\'re going to have a bad time.</p><p>Once you\'ve done that, click the button and Forge will do it\'s thing. These include things like configuring nginx and other server things you don\'t need to worry about right now. After Forge finishes loading, your site should be ready.</p><p>The only thing I\'d recommend doing now is tweaking the default deploy script. In the settings screen, you\'ll see a box with some options starting with something like:</p><!--kg-card-begin: code--><pre><code class="language-bash">cd /home/forge/awesome-statamic.com
git pull origin master
echo "" | sudo -S service php7.3-fpm reload</code></pre><!--kg-card-end: code--><p>I often add a couple of extra please commands to make it easier when I push a new version of my site live. My config often looks like this:</p><!--kg-card-begin: code--><pre><code class="language-bash">cd /home/forge/awesome-statamic.com
git pull origin master
echo "" | sudo -S service php7.3-fpm reload

php please clear:cache
php please clear:stache
php please clear:static</code></pre><!--kg-card-end: code--><blockquote>One thing you might want to look into is using Spock. Spock commits &amp; pushes updates to entries, assets and settings when you make them in the Control Panel. This makes sure your Git repo always has the latest content. <a href="https://www.youtube.com/watch?v=H5xvl7m7tm4">Ben Furfie has recorded a little video clip</a> on how to get this setup.</blockquote><h2 id="pointing-your-domain-to-forge">Pointing your domain to Forge</h2><p>Getting your domain to point to Forge is easily one of the hardest and most fiddly parts of dealing with hosting - largely because how you do this depends on who and where you bought your domain.</p><p>The key thing is you\'ll need to get the server\'s IP address from Forge and point an A record at it. Beyond the basics, how to point a domain to a server is a whole other topic and is outside the scope of this article (sorry...).</p><h2 id="getting-into-your-server">Getting into your server</h2><p>There may be times when you need to access your server to look at log files or access some sort of system configuration. To do this, you\'ll need to be able to use SSH.</p><p>Unlike other virtual private servers (the droplet you pay Digital Ocean for), you can\'t just put in a username and password to SSH into a server. Instead you need a username and an SSH key.</p><p>If you haven\'t already created an SSH key for yourself - and you\'re on a Mac - you can do it by running these commands.</p><!--kg-card-begin: code--><pre><code class="language-bash">ssh-keychain -t rsa
pbcopy &lt; ~/.ssh/id_rsa.pub</code></pre><!--kg-card-end: code--><blockquote>I\'m not sure on how you do this on Windows as I don\'t use Windows. But if I find out then I\'ll add instructions on it to this article.</blockquote><p>The first command will create your key, while the second will copy the contents of the public version of that key to your clipboard. Once you\'ve done that, you\'ll be able to go to Forge account, go to User Settings and then click the SSH Keys tab.</p><p>You\'ll see a box where you can paste in your key. Once you\'ve done that, click save and Forge will now have the part of your SSH key it needs to authenticate your computer.</p><p>The last thing you need to do is click on the \'Add to Servers\' button, next to the key. This will add that key to each individual server.</p><p>Now when you want to SSH into your server, you can type this (replacing <code>127.0.0.1</code> with the IP of the server in your Forge account):</p><!--kg-card-begin: code--><pre><code class="language-bash">ssh forge@127.0.0.1</code></pre><!--kg-card-end: code--><h2 id="a-few-quick-things">A few quick things</h2><ul><li>If you want your site to be auto-deployed when you push to your Git repo, you need to enable <code>Quick Deploy</code> on the Site page in Forge.</li><li>I would recommend that you should install SSL on your site. Thankfully, Forge makes this super easy. Within your site options, click on the SSL link on the left hand menu in Forge. Then click on <code>Let\'s Encrypt</code> and then click on <code>Obtain Certificate</code>. A fresh certificate should be created and installed for you within a minute.</li></ul>',
                'is_published' => '2019-09-14T21:03:00.000+01:00'
            ],
            [
                'title' => 'RSS Feeds and Sitemaps in Statamic',
                'slug' => 'statamic-rss-sitemaps',
                'markdown' => '[**Statamic**](https://statamic.com/) is a flat-file content management system built on the Laravel framework.

If you\'ve built a website with Statamic, you\'ll know that by default, Statamic does not automatically come with RSS feeds or Sitemaps. In this article I will show you how to setup a simple RSS feed and a simple sitemap for your Statamic website.

The first thing you will need is a Statamic site and a theme. Which you\'ll most likly have if you\'re reading this article.

First things first, create a new layout, I called mine xml.html, you can call it whatever you like. In that file, just copy and paste the following:

```
{{ template_content }}
```

Now we can create two new templates. One for your sitemap and one for your RSS feed.

## RSS Feed

This is the code I use for my RSS Feed on my site. You can fill it out with more details if you need to. It\'s just a really simple template.

```
{{ xml_header }}
<title>Your Site Name</title>
<link>https://your.site.com</link>
<description>Description of your site</description>
<category>The category of your website</category>

{{ collection:blog paginate="true" as="posts" }}
  {{ posts scope="tag" }}
    <item>
      <title>{{ title }}</title>
      <link>https://your.site.com{{ url }}</link>
      <description>{{ content | striptags }}</description>
      <pubDate>{{ date format="M j, Y" }}</pubDate>
    </item>
  {{ /posts }}
{{ /collection:blog }}
```

## Sitemap

Below is what I use for the sitemap on this site. Again, it\'s all really basic. All the below sitemap does is get the latest from the blog collection and loops them.

```
{{ xml_header }}
{{ collection:blog as="posts" }}
	{{ posts scope="tag" }}
		<loc>https://your.site.com{{ url }}</loc>
  	<changefreq>weekly</changefreq>
  	<priority>0.5</priority>
	{{ /posts }}
{{ /collection:blog }}
```

After you have created the two files, you need to add them to your `site/settings/routes.yaml` file so they can actually be used. Copy and paste the following into your routes file.

```yaml
/feed:
  template: xml/feed
  layout: xml
  content_type: xml
/sitemap.xml:
  template: xml/sitemap
  layout: xml
  content_type: xml
```

After you have copied it into your routes file, it should look something like this.

```yaml
routes:
  /blog/tags: blog/taxonomies
  /search: search
  /login: auth/login
  /register: auth/register
  /forgot-password: auth/password-forgot
  /reset-password: auth/password-reset
  /feed:
    template: xml/feed
    layout: xml
    content_type: xml
  /sitemap.xml:
    template: xml/sitemap
    layout: xml
    content_type: xml
```

You should now be able to view your RSS feed and sitemap at the following URLs.

- RSS Feed: `https://your-site.com/feed`
- Sitemap: `https://your-site.com/sitemap.xml`',
                'is_published' => '2018-03-22T19:37:00.000+00:00'
            ],
            [
                'title' => 'Update Customer in Stripe using Laravel Cashier',
                'slug' => 'update-customer-laravel-cashier-stripe',
                'markdown' => '<p>I\'ve just had the situation where I needed to setup my Laravel app to update my customer\'s information in Stripe when they change it in my app.</p><p>The method I used to do this is actually undocumented on the official Laravel Cashier documentation, I found it while I was looking through the Cashier code.</p><p>In my Settings controller I used the following code to update the customer\'s name and email when they resubmit the settings form.</p><!--kg-card-begin: code--><pre><code>$stripeData = array(
    \'name\' =&gt; $user-&gt;first_name . \' \' . $user-&gt;last_name,
    \'email\' =&gt; $user-&gt;email
);

$user-&gt;updateStripeCustomer($stripeData);</code></pre><!--kg-card-end: code--><p>That code should work as long as the User model has the <code>Billable</code> trait.</p>',
                'is_published' => '2019-06-06T20:00:00.000+01:00'
            ],
            [
                'title' => 'Using Vuex to store authentication in Local Storage',
                'slug' => 'vuex-authentication',
                'markdown' => 'I\'m currently Rebuilding [**BiblioSpot**](https://bibliospot.com/) as a standalone Vue app which fetches data from our private API. At the start of the project, I was wondering, how I should go about handling Authentication? I tried out a few different solutions but this one seems to work, so I\'m going to go along with it.

The first thing I did was obviously create a new Vue app so I did `vue create app-name`. I chose Vue router, Vuex and some other stuff that was there that looked like a good option. I also installed Axios for the HTTP request stuff. Yes I know Vue has their own package for this and there is a similar function built into Javascript, but who cares.

Now, the first thing that we should do is to write code to allow the user to actually login. I\'m using Laravel Passport for API auth and it gives us the `/oauth/token` route which we can send a payload to and it will give us our access token. A simple bit of code like this should do the jiffy.

```vue
<template>
  <div>
    <h1>Login</h1>
    <input v-model="email" type="email">
    <input v-model="password" type="password">
  </div>
</template>

<script>
import axios from \'axios\'
export default {
  data: function() {
    return {
      email: \'\',
      password: \'\',
      response: \'\'
    }
  },
  methods: {
    post: function() {
      axios.post(\'[your site url]/oauth/token\', {
        \'grant_type\': \'password\',
        \'client_id\': [your client id],
        \'client_secret\': [your client secret],
        \'username\': this.email,
        \'password\': this.password,
        \'scope\': \'\'
      })
        .then(response => {
          this.response = response.data;
          this.$store.dispatch(\'bearer\', this.response.access_token);
          this.$router.push(\'/\')
        });
    }
  }
}
</script>
```

Once you\'ve got your HTTP requests to work, you can create your Vuex store. This is a simplified version of my `store.js` file.

```javascript
import Vue from \'vue\'
import Vuex from \'vuex\'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user: {
      bearer: \'\'
    }
  },
  
  mutations: {
    bearer (state, payload) {
      state.user.bearer = payload
    }
  },

  actions: {
    bearer (context, payload) {
      context.commit(\'bearer\', payload)
    }
  },

  getters: {
    bearer: state => {
      return state.user.bearer
    }
  }

})
```

Basically what I\'ve done in my Vuex store is set it up so that you can change and view the bearer/access token.

Now that we\'ve got this in place, when you login your token should be set in your Vuex store and you should be directed to `/`. (you can change this route in the success part of the Axios request in the `Login.vue` component)

However, if you refresh the page, your bearer token is no longer in the Vuex store. This is where local storage comes in. It can store data that can be used even if you close the browser entirely.

The way I stored my state in local storage was by using the vuex-persistedstate npm package. You just need to install it and import it into your store, like so.

```javascript
import Vue from \'vue\'
import Vuex from \'vuex\'
import createPersistedState from \'vuex-persistedstate\'

Vue.use(Vuex)

export default new Vuex.Store({
  plugins: [createPersistedState()]
  
  state: {
    user: {
      bearer: \'\'
    }
  },
  
  mutations: {
    bearer (state, payload) {
      state.user.bearer = payload
    }
  },

  actions: {
    bearer (context, payload) {
      context.commit(\'bearer\', payload)
    }
  },

  getters: {
    bearer: state => {
      return state.user.bearer
    }
  }

})
```

Now you should be able to login and refresh your page and your bearer token will still be in your store.

Now you\'ve pretty much got everything working. However, if you need to check within views/components of your application if the user is logged in or out for that matter I\'ve devised a little component that you can use that will detect such things and will redirect the user to the login page. (If you need to check that the user is logged out you can place the redirect at the other side of the if statement)

```vue
<template>
</template>

<script>
export default {
    computed: {
        loggedIn: function() {
            return this.$store.getters.loggedIn
        }
    },
    methods: {
        loginHandler: function() {
            if (this.loggedIn == true) {
                //
            } else {
                this.$router.push(\'/login\')
            }
        }
    },
    mounted: function() {
        this.loginHandler()
    },
    watch: {
        loggedIn: function() {
            this.loginHandler
        }
    }
}
</script>
```

That\'s us done!',
                'is_published' => '2018-12-28T19:51:00.000+00:00'
            ]
        ];

        collect($posts)->each(function ($post) {
           $item = new Post();
           $item->title = $post['title'];
           $item->slug = $post['slug'];
           $item->markdown = $post['markdown'];
           $item->is_published = Carbon::parse($post['is_published']);
           $item->posted_on_dev_to = false;
           $item->save();
        });
    }
}
