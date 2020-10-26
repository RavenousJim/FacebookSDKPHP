# FacebookSDKPHP
Wordpress interfacing with the facebbok sdk.


Overview: Today, I will be showcasing newspapercup.com and its automated Facebook publishing feature. Newspapercup.com is a site that takes an RSS feed and automatically publishes stories of interest to the audience on the page. Furthermore, everytime the site is updated with new content, the site automatically publishes to the corresponding Facebook account. Newspapercup.com is a Wordpress site ona LAMP stack, so anyone with Wordpress could potentially replicate this. I currently am working on some other features on some of my other sites, but this is the only one that I have worked out Facebook's auto-post feature, and at least for a time, was given the administrative go-ahead. 

Getting Started: Initially all you need is a Wordpress site. You will need a Facebook Developer account as well. There are multiple auto-post plugins that run through Facebook. Some of these work better than others. The one I use is from XYZ scripts. From the DASHBOARD in WORDPRESS go to pulg-ins and click. Next click on add. Search for WP2Social auto-publish. Once you open this plug-in, you'll be given some spaces that need to be filled in by creationg a Facebbok App. Open a new tab and go to developers.facebook.com

Navigate to My Apps and create your first app. There are a lot of confusing resources here, so part of my doing this is to help Wordpress users navigate the Facebook SDK in implementing any code. For this app, we are taking an outside resource and allowing it to remotely access our account and then perform an action. We need FB to connect with our website and its php code. Facebook uses a lot of Javascript, specifically React and JSX, but those are topics for another day. 

How are we going to connect as PHP based mySQL site with Javascript and MongoDB? 

If you browse the Facebook Docs you'll find some php based answers, but I was more inclined to use an HTML hook with the Facebook script necessary for the app to communicate with the website.

Go back to your Wordpress site for a moment. Navigate back to the Dashboard. From that screen, open "Appearance" and then "Theme Editor." On the right side you will see Theme Files. In those files, you need to find the file index.php (this could also be done on the code editor of your choice.) We are going to inject our Facebook Scripts into the beginning of the file. That way, when the site is initialized from index.php, our html will be the first thing to run in the browser. I also have a mailchimp application running in a similar fashion. You can copy the code from the FBHook.php file.


Make sure that you click the Update File button in wordpress after you have added your code.


That shoud be all of the hard-coding we need. Navigate back to Wordpress and the WP2Social Plugin. 
These settings ask for an applicatio id as well as some other secret numbers.
Let's go back to our application in our Facebook Developers Account. We need to put our application in ID in the code in oit index.php as well as our wordpress plugin. Our Wordpress plugin will ask for the Secrest ID. The app's secret Id can be found under the App Settings and then Basic menu. To show your secret Id, locate it and click show. You will probably have to type in your Facebook password to reveal it. Simply put in these numbers and hit authorize on the Plug-in screen.


As of today, I do not have the proper authority to auto-post. To get privelages for your application, you will have to follow Facebooks rigorous protocol that includes handing them your passwords. If you go to the Newspapercup Facebook Page, you can see that I had it working for some time. This was until we came closer to the election, and it seems like self-publishing your application will be impossible until afterwards.



You can follow this video for some further help: https://www.youtube.com/watch?v=Zpn19_EvCzg

