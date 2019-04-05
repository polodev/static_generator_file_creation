<?php

class Helper {
  public static function lower($value)
  {
    return mb_strtolower($value, 'UTF-8');
  }
  public static function slug($title, $separator = '-')
  {
    $flip = $separator === '-' ? '_' : '-';

    $title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

        // Replace @ with the word 'at'
    $title = str_replace('@', $separator.'at'.$separator, $title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace.
    $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', static::lower($title));

        // Replace all separator characters and whitespace by a single separator
    $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

    return trim($title, $separator);
  }
}


class MyGen {
  public function generatTitle()
  {
    $text = "PICKSUM IPSUM YOUR COOL LOREM IPSUM TEXT GENERATOR ALTERNATIVE Do you love movies as much as you love making cool websites? Then, boy – have we got the lorem ipsum for you! Our badass text generator will give you the best lines from some of the hardest Hollywood legends – we’re talking Eastwood, Caine, Carrey and Freeman – and mix them up ready to work their magic on your new website. In fact, we reckon you’ll love Picksum Ipsum so much, you might never want to replace it with real text. Simply pick your main man, choose your number of paragraphs and tell us if you’d likesum <P> tags, then in one click we’ll give you the script to create a web page which is a huge hit. Your website is too cool for boring lorem ipsum, so why not make something that really stands out by using our lorem ipsum alternative instead? If you’re a film fan as well as a web genius, get to grips with our cool text generator now and Picksum Ipsum. About a year ago, I changed my website from Wordpress to Hugo, which is a static site generator written in Go that uses Go’s template libraries for templating. I have recently done a viability assessment of Gatsby, another static site generator written in React that uses React for templating. In this article, I compare the differences between Hugo v0.42 and Gatsby v1.93. For the comparison, I used this Hugo site and this Gatsby site. The code for each can be found on Github for the Hugo site and for the Gatsby site. Framework familiarity If you are not familiar with React and you don’t plan on learning React, then you should probably choose Hugo. If you know and like React, should you choose Gatsby? Well, not necessarily. I would argue that you need a decent understanding of React (see Learn React with these Resources) if you want to use Gatsby. And in order to understand React, you need a decent understanding of JavaScript (see Learn JavaScript with these resources). Even though I have been using Hugo for almost a year, it wasn’t necessary for me to understand Go. I also only had to learn a little bit about Go’s template libraries. However, I did find that I had to refer to the documentation more often with Hugo because of my lack of familiarity. Gatsby requires a deeper understanding of React than Hugo expects of Go. Nevertheless, if framework familiarity were the only criteria, I would choose Gatsby because it’s nice not to have to refer to the documentation while adding new features to my website. Stability One way of assessing stability would be to compare Hugo’s issues on GitHub with Gatsby’s issues on GitHub. You will see that Gatsby has more features, (which is exciting) but also has more bugs (which is not so exciting). I initially did not consider stability as a criteria until I found this bug and that made me realise the importance of stability in software. I may be taking this one personally because of the time and effort I expended, trying to find that bug, but I still think Hugo is more stable than Gatsby. Security Gatsby uses JavaScript, and JavaScript applications are notorious for requiring a lot of Node modules to run. There is even a Node module that sends Hot Pocket tweets and another that harvests credit card numbers :D. Static sites tend to be more secure by nature, but I still think it is worth mentioning that more dependencies result in more code that you might not trust. Tooling Gatsby has all the advantages of the JavaScript toolchain and all the disadvantages of JavaScript fatigue. On top of that, Gatsby has a really nice plugin library. In particular, gatsby-plugin-offline allowed me to easily add offline capabilities to my website, which I still haven’t figured out with Hugo. On the other hand, some things that require a plugin with Gatsby just come out of the box with Hugo. For example, gatsby-plugin-react-helmet is needed to edit the head tag, whereas this can be done with simple HTML in Hugo. Since I enjoyed using the tooling that came with Gatsby, I give this one to Gatsby. Build speed Hugo is able to build my website without any additional tooling in less than 100ms. Gatsby is able to build my website in about 15 seconds, but this does include a lot of additional tooling. Adding PostCSS and Imagemin to the Hugo build bumps the build time up to about 5 seconds. Watching for changes during development was also faster using Hugo. I think Hugo is the winner here. Documentation Both Gatsby and Hugo have really nice documentation. Hugo has a Quick Start and Gatsby has a Getting Started section. Gatsby also has a really nice tutorial, which evens out the steeper learning curve. Personally, I found it easier to get started with Gatsby, but that is because I already understood React. I think it is fair to say that both Hugo and Gatsby have great documentation. Performance Using Lighthouse, the performance score was 100 for my site in Hugo and 95 for my site in Gatsby. The First Contentful Paint for a 3G connection was about 1 second for the Hugo site and 1.5 seconds for the Gatsby site. Using Web Page Test the load time on a 2G connection was 8.7 seconds in Hugo and 11.7 seconds in Gatsby. However, doing a simple manual test to see which site loads first, Gatsby was noticeably faster, so I don’t really understand what Lighthouse or Web Page Test was measuring. Furthermore, as Gatsby is a Single Page App, navigating within the website does not require a request from the server. Pages are just re-rendered with JavaScript. Anyhow, I can say with certainty that both Hugo and Gatsby are fast. I would be interested to hear your thoughts in the comments below. Community Gatsby is gaining popularity quickly, which comes with a thriving community. That is not to say that Hugo’s community is boring. If GitHub stars are anything to go by, Hugo has more than 27 thousand and Gatsby has more than 23 thousand. On Twitter, Gatsby seems to be more active than Hugo. Final thoughts So which one should you choose? Gatsby uses React, which I am more familiar with, it has better tooling, and it has a thriving community. On the other hand, Hugo is more stable and spends less time building. For larger websites, build speeds become more important and some of you might not care for React at all. In my case, stability was the most important criteria, so I decided to stick with Hugo. I am very excited to see what the future brings in this space. Before you go… Thanks for reading the article! If you enjoyed it, please don’t forget to show your appreciation by clicking the 👏 below! I write about my professional and educational experiences as a self-taught software developer, so click the follow button if this interests you! You can also check out my blog or subscribe to my newsletter for more content. ";
    $length = strlen($text);
    $start = rand(0, $length - 10);
    $end   = rand($start, $length);
    $random_string = substr($text, $start, $end);
    $random_string = substr($random_string, 0, rand(30, 60));
    $random_string = str_replace('.', ' ', $random_string);
    $random_string = str_replace(',', ' ', $random_string);
    $random_string = str_replace('\'', ' ', $random_string);
    $random_string = ucfirst($random_string);
    return $random_string;
  }
  public function generateText()
  {
    $text = "Lorem ipsum shiznit sizzle amizzle, consectetuer adipiscing boofron. Nullam crackalackin velit, shiznit volutpizzle, suscipizzle its fo rizzle, gravida vizzle, fizzle. Pellentesque owned boom shackalack. Sed erizzle. Daahng dawg dang dolor dapibus turpis daahng dawg pot. Maurizzle shizznit izzle gangster. We gonna chung izzle tortizzle. Pellentesque eleifend rhoncizzle fo shizzle. In shizzle my nizzle crocodizzle phat platea own yo'. Donec dapibizzle. Curabitur tellus urna, pretizzle ghetto, shut the shizzle up , eleifend vitae, nunc. Stuff suscipit. Integizzle sempizzle dawg ma nizzle purizzle. Maecenizzle shizznit mi. Dang erizzle. Proin condimentizzle, things shit yo mamma consectetizzle, metus libero consequat purizzle, egizzle ullamcorpizzle gangsta mammasay mammasa mamma oo sa non quizzle. Fizzle yippiyo yo mamma. Dizzle nibh lectizzle, consequat sizzle, break yo neck, yall sure, crazy ac, funky fresh. Prizzle sizzle urna. Shiz condimentum sheezy uhuh ... yih! go to hizzle. Pellentesque hendrerit euismizzle felis. Donizzle ultrices nisl mofo erat. Etiam mammasay mammasa mamma oo sa boom shackalack mi. Ut you son of a bizzle. Sed nisl metus, euismizzle izzle, eleifend ass, malesuada vel, yippiyo. Vivamizzle crunk consectetuer nisl. Sed vitae owned that's the shizzle break it down ultricies shiznit. In convallis, arcu ac dignissizzle crackalackin, shit lorem luctus pede, a ma nizzle augue dolizzle sizzle brizzle. Pellentesque away diam nec rizzle varius fo shizzle. Stuff turpizzle for sure, pulvinar at, porta fizzle, tincidunt sure, ass. Nunc sizzle you son of a bizzle. Lorizzle ipsum dolor sit doggy, you son of a bizzle adipiscing yo. Maecenas izzle elizzle. Nizzle congue. Gangster boom shackalack erat vitae fo shizzle aliquizzle rizzle. In break yo neck, yall my shizz yo mamma pot nibh. Cras break it down. Nunc my shizz ante et neque lacinia sagittizzle. Bling bling nizzle massa izzle shiz pharetra lobortizzle. Suspendisse break it down est, bibendum pulvinar, dizzle vizzle, imperdiet doggy, fo shizzle. Vivamizzle egizzle that's the shizzle fizzle massa adipiscing fo shizzle. Sure izzle nisl quizzle crackalackin ornare nonummy. Nulla own yo'. Etiam faucibizzle pharetra pot. Rizzle gangsta arcu fo maurizzle. Cras accumsizzle odio izzle ipsizzle. Yippiyo adipiscing nibh vel lectizzle. Fo shizzle laorizzle, dope egizzle eleifend tincidunt, dolor sem its fo rizzle orci, eu doggy fo shizzle maurizzle eget gizzle. Etiam adipiscing, dizzle izzle aliquet aliquizzle, shizznit orci, fizzle sagittizzle nulla mi check it out purizzle. Nizzle aliquizzle you son of a bizzle pede. In pulvinizzle aliquet for sure. Break it down leo enim, tempor shit, facilisizzle fizzle, laorizzle in, sizzle. Crunk eget gangster quis risus blandizzle da bomb. Vestibulizzle ullamcorper turpis boom shackalack sem tincidunt lobortizzle. Crackalackin quis own yo'. Maecenizzle that's the shizzle. Vivamizzle fermentizzle consequizzle rizzle. Pellentesque gangster. Lorizzle check it out dolor black amizzle, gizzle adipiscing elizzle. urna arcu, black egizzle, sagittis a, pharetra eu, shiz. Lorizzle check out this dolizzle sit amizzle, i'm in the shizzle adipiscing elit. Crizzle aliquam pede et mi. Sheezy shizzlin dizzle owned go to hizzle away magnizzle cool my shizz montes, nascetizzle mofo shizzlin dizzle. Ut purizzle diam, molestie sheezy, convallizzle izzle, sollicitudin izzle, check out this. Mah nizzle viverra urna commodo libero. Donizzle sagittizzle. Nullizzle augue fo shizzle, boofron away, bizzle fo, hizzle izzle, away. My shizz gangsta, cool its fo rizzle fo shizzle my nizzle commodo we gonna chung, crazy lectizzle ornare enizzle, a hendrerizzle nunc est scelerisque yo mamma. Fo shizzle quizzle dawg. Nizzle nonummy fo shizzle my nizzle yo metizzle. For sure facilisi. Nulla for sure shiz. Aliquam fo shizzle commodo tellizzle. Aenean viverra, sapizzle shizzlin dizzle vulputate hendrerit, sheezy urna hendrerit mah nizzle, non tellivizzle nunc fo izzle crazy. Donizzle eu mah nizzle. Vestibulizzle quis gizzle. Check it out elementum da bomb izzle. Integizzle nulla sizzle, volutpizzle own yo', shiznit egizzle, ghetto egizzle, nunc. Sed pharetra. You son of a bizzle owned. Curabitizzle sit amet i'm in the shizzle nizzle yippiyo blandizzle dignissizzle. Quisque dope tellizzle go to hizzle amizzle hizzle. Aenizzle tempizzle dignissizzle the bizzle. ";
    $length = strlen($text);
    $start = rand(0, $length - 10);
    $end   = rand($start, $length);
    $random_string = substr($text, $start, $end);
    $random_string = substr($random_string, 0, rand(300, 800));
    $random_string = str_replace('.', ' ', $random_string);
    $random_string = ucfirst($random_string);
    return  $random_string ;
  }
  public function generateContent($value='')
  {
    $string = "";
    foreach (range(2, 8) as $value) {
      $title = $this->generatTitle();
      $text  = $this->generateText();
      $string .= " ### $title      \n\n$text       \n\n";
    }
    return $string;
  }
  public function generateFileContent($title, $description)
  {
    $content = $this->generateContent();
    $file_content =  <<<"TEXT"
---
extends: _layouts.post
section: content
title: $title
date: 2018-12-25
description: $description
cover_image: /assets/img/post-cover-image-2.png
featured: true
categories: [Configuration, Industrial Work]
---

$content

TEXT;
    return $file_content;

  }
  public function make_file()
  {
    $description = substr($this->generatTitle(), 0, rand(300, 450));
    $title = substr($description, 0, rand(20, 45));
    $file_content = $this->generateFileContent($title, $description);
    if (!file_exists('_posts')) {
      mkdir('_posts');
    }
    $file_name = '_posts/'. Helper::slug($title) . '.md';
    $file = fopen($file_name, 'w');
    fwrite($file, $file_content);
    fclose($file);
    return true;
  }


}

$text = "hello world";

// echo strlen($text);
echo (new MyGen)->make_file();
