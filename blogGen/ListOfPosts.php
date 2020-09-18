<?php

require_once __DIR__ . "/Page.php";
require_once __DIR__ . "/models/BlogPost.php";
require_once __DIR__ . "/models/BlogPosts.php";

function getOldPosts()
{
    return array(
        "2002-09-08|corporations|private|2002-09-08-the-corporation",
        "2002-10-09|computer crash with data loss|private|2002-10-09-i-have-lost-everything-stress",
        "2002-10-28|a little busy|private|2002-10-28-a-little-busy",
        "2002-10-30|yeah who kicks?|private|2002-10-30-yeah-who-kicks",
        "2002-10-31|this is so crazy|private|2002-10-31-this-is-so-crazy",
        "2002-11-06|I'm still alive|private|2002-11-06-im-still-alive",
        "2002-11-07|crazyness|private|2002-11-07-crazyness",
        "2002-11-09|away for a while|private|2002-11-09-away-for-a-while",
        "2002-12-18|akkk|private|2002-12-18-akkk",
        "2002-12-21|the 4 man lan|private|2002-12-21-the-4-man-lan",
        "2003-01-04|one.. more.. post..|private|2003-01-04-one-more-post",
        "2003-01-29|Scott, you're crazy!|private|2003-01-29-scott-youre-crazy",
        "2003-02-07|conflicting reality|private|2003-02-07-conflicting-reality",
        "2003-02-11|nani?|private|2003-02-11-nani",
        "2003-02-12|things (Base64)|private|2003-02-12-things-base64",
        "2003-02-28|multiple posts|private|2003-02-28-multiple-posts",
        "2003-03-05|Divide By Zero|private|2003-03-05-010",
        "2003-03-10|achoo!|private|2003-03-10-achoo",
        "2003-03-11|Hola!|private|2003-03-11-hola",
        "2003-03-13|flowing time|private|2003-03-13-flowing-time",
        "2003-03-24|lagged|private|2003-03-24-lagged",
        "2003-03-25|another post?|private|2003-03-25-another-post",
        "2003-03-26|Scott, you're weird.|private|2003-03-26-scott-youre-weird",
        "2003-06-02|pre-misia, post-2nd crash|private|2003-06-02-pre-misia-post-2nd-crash",
        "2003-06-10|Misia|private|2003-06-10-misia",
        "2003-06-18|June post Misia 1|private|2003-06-18-june-post-misia-1",
        "2003-06-19|June post Misia 2|private|2003-06-19-june-post-misia-2",
        "2003-06-27|June post Misia 3|private|2003-06-27-june-post-misia-2-2",
        "2003-07-01|*REST OF THE POSTS*|private|2003-07-01-rest-of-the-posts",
        "2003-07-29|grrr...|private|2003-07-29-grrr",
        "2003-08-01|hello world|private|2003-08-01-hello-world",
        "2003-08-07|the wired owns me|private|2003-08-07-the-wired-owns-me",
        "2003-08-11|ccrraaapppp!|private|2003-08-11-ccrraaapppp",
        "2003-08-12|more posts|private|2003-08-12-more-posts",
        "2003-08-12|no crap ^_^|private|2003-08-12-no-crap",
        "2003-08-14|baka-scott!|private|2003-08-14-baka-scott",
        "2003-08-14|Fiery Keep of the Dragon!|private|2003-08-14-fiery-keep-of-the-dragon",
        "2003-08-15|back again|private|2003-08-15-back-again",
        "2003-08-16|ehemmmm...|private|2003-08-16-ehemmmm",
        "2003-08-17|no way!|private|2003-08-17-no-way",
        "2003-08-23|track team? HERE?!|private|2003-08-23-track-team-here",
        "2003-08-24|pickas|private|2003-08-24-pickas",
        "2003-08-24|what to do|private|2003-08-24-what-to-do",
        "2003-08-25|which one? senior? freshman?|private|2003-08-25-which-one-senior-freshman",
        "2003-08-28|3 days in 1!|private|2003-08-28-3-days-in-1",
        "2003-08-31|saturday night|private|2003-08-31-saturday-night",
        "2003-09-03|I'm loved!|private|2003-09-03-im-loved",
        "2003-09-07|Ahh, relaxation|private|2003-09-07-ahh-relaxation",
        "2003-09-08|So, now what?|private|2003-09-08-so-now-what",
        "2003-09-09|yet another day at school|private|2003-09-09-yet-another-day-at-school",
        "2003-09-11|tired, very tired|private|2003-09-11-tired-very-tired",
        "2003-09-14|comments comments comments!|private|2003-09-14-comments-comments-comments",
        "2003-09-14|My Sassy Girl #6|private|2003-09-14-my-sassy-girl-6",
        "2003-09-16|messy and boring|private|2003-09-16-messy-and-boring",
        "2003-09-17|another morning, a full day|private|2003-09-17-another-morning-a-full-day",
        "2003-09-18|that's not a turd is it?|private|2003-09-18-thats-not-a-turd-is-it",
        "2003-09-22|Ring 2|private|2003-09-22-ring-2",
        "2003-09-22|run Lola run!|private|2003-09-22-run-lola-run",
        "2003-09-23|eighteen|private|2003-09-23-eighteen",
        "2003-09-25|hacked from school|private|2003-09-25-hacked-from-school",
        "2003-09-28|wasssaaaaaa|private|2003-09-28-wasssaaaaaa",
        "2003-09-29|on and on and on and on|private|2003-09-29-on-and-on-and-on-and-on",
        "2003-10-02|writing, coding, AimPoo?|private|2003-10-02-writing-coding-aimpoo",
        "2003-10-05|no, I will not fix your computer|private|2003-10-05-no-i-will-not-fix-your-computer",
        "2003-10-06|the poo is moving again|private|2003-10-06-the-poo-is-moving-again",
        "2003-10-08|aimpoo progress|private|2003-10-08-aimpoo-progress",
        "2003-10-09|first glimpse of AimPoo|private|2003-10-09-first-glimpse-of-aimpoo",
        "2003-10-12|beta testing started|private|2003-10-12-sign-up-to-be-a-beta-tester",
        "2003-10-14|get me my putty|private|2003-10-14-get-me-my-putty",
        "2003-10-14|school, school, poo, poo?|private|2003-10-14-school-school-poo-poo",
        "2003-10-16|AimPoo is now on Google|private|2003-10-16-aimpoos-googled",
        "2003-10-16|at school|private|2003-10-16-at-school-and-aww-crap",
        "2003-10-17|Scott is tired|private|2003-10-17-scott-is-tired",
        "2003-10-18|aimpoo... rel... zzZZzzZZzzZZzz...|private|2003-10-18-aimpoo-rel-zzzzzzzzzzzzzz",
        "2003-10-18|excuse me, a new song please|private|2003-10-18-excuse-me-a-new-song-please",
        "2003-10-19|Scott is in the 1'st person|private|2003-10-19-scott-is-in-the-1st-person",
        "2003-10-21|blackmailed|private|2003-10-21-blackmailed",
        "2003-10-23|hacked first 3char screen name|private|2003-10-23-woohoo-it-works",
        "2003-10-24|Scott's too tired to post|private|2003-10-24-scotts-too-tired-to-post",
        "2003-10-25|life: paused. resume imminent. QIO's in command.|private|2003-10-25-life-paused-resume-imminent-qios-in-command",
        "2003-10-26|looking at life through a window|private|2003-10-26-looking-at-life-through-a-window",
        "2003-10-28|listening to the silence|private|2003-10-28-listening-to-the-silence",
        "2003-10-29|wonderful days|private|2003-10-29-wonderful-days-2",
        "2003-10-31|OWNED!!!!!!!|private|2003-10-31-owned",
        "2003-11-02|AimPoo is still churning|private|2003-11-02-aimpoo-is-still-churning",
        "2003-11-02|my day has gone down the tiolet - uberpost|private|2003-11-02-my-day-has-gone-down-the-tiolet-uberpost",
        "2003-11-03|I think I watched too much Trading Spaces|private|2003-11-03-i-think-i-watched-too-much-trading-spaces",
        "2003-11-04|time. crunch. comic. gas?|private|2003-11-04-time-crunch-comic-gas",
        "2003-11-05|unexpected babysitting: no problem|private|2003-11-05-unexpected-babysitting-no-problem",
        "2003-11-06|I am watching my internet die|private|2003-11-06-i-am-watching-my-internet-die",
        "2003-11-07|people simply love me|private|2003-11-07-people-simply-love-me",
        "2003-11-08|ggrreeaaahhhh! crazyness|private|2003-11-08-ggrreeaaahhhh-crazyness",
        "2003-11-09|away for a day, how nice|private|2003-11-09-away-for-a-day-how-nice",
        "2003-11-11|GOOGLE thinks I'm hot|private|2003-11-11-google-thinks-im-hot",
        "2003-11-12|how could you let your room get like that?|private|2003-11-12-how-could-you-let-your-room-get-like-that",
        "2003-11-15|today was pretty cool|private|2003-11-15-today-was-pretty-cool",
        "2003-11-16|a nice sunday with many events|private|2003-11-16-a-nice-sunday-with-many-events",
        "2003-11-17|subtle changes, in all aspects of scott|private|2003-11-17-subtle-changes-in-all-aspects-of-scott",
        "2003-11-18|must... play... pool...|private|2003-11-18-must-play-pool",
        "2003-11-19|my blog has diarrhea|private|2003-11-19-my-blog-has-diarrhea",
        "2003-11-20|is this a better title?|private|2003-11-20-is-this-a-better-title",
        "2003-11-21|TGIF... aww great, now I'm hungry!|private|2003-11-21-tgif-aww-great-now-im-hungry",
        "2003-11-23|studycramming slash blog catsup|private|2003-11-23-studycramming-slash-blog-catsup",
        "2003-11-25|doh!|private|2003-11-25-doh",
        "2003-11-29|the incredible return and the dumpage thereafter|private|2003-11-29-the-incredible-return-and-the-dumpage-thereafter",
        "2003-12-09|It's alive!|private|2003-12-09-its-alive",
        "2003-12-11|oh jeez Scott, another new look?|private|2003-12-11-oh-jeez-scott-another-new-look",
        "2003-12-12|I can feel it when it's quiet... the wired|private|2003-12-12-i-can-feel-it-when-its-quiet-the-wired",
        "2003-12-13|I will not let you [all] hurt me.|private|2003-12-13-i-will-not-let-you-all-hurt-me",
        "2003-12-15|no way, tell me this is NOT a 3,000+ word blog|private|2003-12-15-no-way-tell-me-this-is-not-a-3000-word-blog",
        "2003-12-17|I need to talk, ya' have a minute?|private|2003-12-17-i-need-to-talk-ya-have-a-minute",
        "2003-12-18|WHAT did your professor give you?!|private|2003-12-18-what-did-your-professor-give-you",
        "2003-12-21|do NOT read today's post.|private|2003-12-21-do-not-read-todays-post",
        "2003-12-23|but Scott, that's torture!|private|2003-12-23-but-scott-thats-torture",
        "2003-12-24|Scott is acting weird again...|private|2003-12-24-scott-is-acting-weird-again",
        "2003-12-25|Merii Kurisumasu!|private|2003-12-25-merii-kurisumasu",
        "2003-12-26|hey, lookie what I made!|private|2003-12-26-hey-lookie-what-i-made",
        "2004-01-01|bbblllaahhhhhhh|private|2004-01-01-bbblllaahhhhhhh",
        "2004-01-04|I beg you: forgive me! I haven't blogged in days.|private|2004-01-04-havent-blogged-in-days",
        "2004-01-04|what an idiot|private|2004-01-04-what-an-idiot",
        "2004-01-06|words? going for 5k and get 7200+? no way?!|private|2004-01-06-words-going-for-5k-and-get-7200-no-way",
        "2004-01-09|I'm not posting tonight.|private|2004-01-09-im-not-posting-tonight",
        "2004-01-10|I'm going to sleep early ... in the morning|private|2004-01-10-im-going-to-sleep-early-in-the-morning",
        "2004-01-11|all that user feedback: to the test!|private|2004-01-11-all-that-user-feedback-to-the-test",
        "2004-01-12|The first day back to school.|private|2004-01-12-the-first-day-back-to-school",
        "2004-01-13|I forgot to title this post.|private|2004-01-13-i-forgot-to-title-this-post",
        "2004-01-14|oh yeah baby|private|2004-01-14-oh-yeah-baby",
        "2004-01-15|My blogs are fun again =oD|private|2004-01-15-my-blogs-are-fun-again",
        "2004-01-17|worse than rebellion: complete compliance|private|2004-01-17-worse-than-rebellion-complete-compliance",
        "2004-01-19|I need to talk about it|private|2004-01-19-i-need-to-talk-about-it",
        "2004-01-19|Scott's feelin' good!|private|2004-01-19-scotts-feelin-good",
        "2004-01-21|organizing my life through chaos|private|2004-01-21-organizing-my-life-through-chaos",
        "2004-01-24|c'mon Scott, post already!|private|2004-01-24-cmon-scott-post-already",
        "2004-01-25|scott continuing to live in silence|private|2004-01-25-scott-continuing-to-live-in-silence",
        "2004-01-27|I Hate Pedestrians|private|2004-01-27-i-hate-pedestrians",
        "2004-01-29|yet another day|private|2004-01-29-yet-another-day",
        "2004-01-31|a loss of words?|private|2004-01-31-a-loss-of-words",
        "2004-02-01|you've got to be kidding me...|private|2004-02-01-youve-got-to-be-kidding-me",
        "2004-02-02|weeeee flying kitties!|private|2004-02-02-weeeee-flying-kitties",
        "2004-02-03|another view of the world through Scott's eyes.|private|2004-02-03-another-view-of-the-world-through-scotts-eyes",
        "2004-02-08|still working on the server!|private|2004-02-08-still-working-on-the-server",
        "2004-02-09|holy cantaloupes!!|private|2004-02-09-holy-cantaloupes",
        "2004-02-10|I'm tired.|private|2004-02-10-im-tired",
        "2004-02-11|Homework: conquered!|private|2004-02-11-homework-conquered",
        "2004-02-13|Valentine's day? Tomorrow!?|private|2004-02-13-valentines-day-tomorrow",
        "2004-02-14|Singles Awareness Day|private|2004-02-14-singles-awareness-day",
        "2004-02-15|gee, I wonder what Scott's working on today?|private|2004-02-15-gee-i-wonder-what-scotts-working-on-today",
        "2004-02-19|Scott, oh Scott, where art thou?|private|2004-02-19-scott-oh-scott-where-art-thou",
        "2004-02-22|Well begun is half done|private|2004-02-22-well-begun-is-half-done",
        "2004-02-25|take a raincheck|private|2004-02-25-take-a-raincheck",
        "2004-02-26|Scott, you're so irresponsible!|private|2004-02-26-scott-youre-so-irresponsible",
        "2004-02-28|incomplete|private|2004-02-28-incomplete",
        "2004-03-02|overloaded|private|2004-03-02-overloaded",
        "2004-03-06|The silhouette of Scott emerges from the fog...|private|2004-03-06-the-silhouette-of-scott-emerges-from-the-fog",
        "2004-03-07|First post made while wardriving|private|2004-03-07-first-post-made-while-wardriving",
        "2004-03-10|I'll blog tonight|private|2004-03-10-ill-blog-tonight",
        "2004-03-17|I got The Black Album to erase his pc AGAIN!|private|2004-03-17-i-got-the-black-album-to-erase-his-pc-again",
        "2004-03-21|You win; I surrender.|private|2004-03-21-you-win-i-surrender",
        "2004-03-22|A Video Clip Afterall!|private|2004-03-22-a-video-clip-afterall",
        "2004-03-22|Second post of the day|private|2004-03-22-second-post-of-the-day",
        "2004-03-23|I am Jacks reclaimed time|private|2004-03-23-i-am-jacks-reclaimed-time",
        "2004-03-24|Sorry folks!|private|2004-03-24-sorry-folks",
        "2004-03-26|What a long day!|private|2004-03-26-what-a-long-day",
        "2004-03-27|Whale Riding|private|2004-03-27-whale-riding",
        "2004-03-28|Deceived!|private|2004-03-28-deceived",
        "2004-03-29|Aggressive blogging|private|2004-03-29-aggressive-blogging",
        "2004-03-31|TheBlackAlbum's site is dead!|private|2004-03-31-theblackalbums-site-is-dead",
        "2004-04-01|I'm so over this|private|2004-04-01-im-so-over-this",
        "2004-04-02|the last post... for a while|private|2004-04-02-the-last-post-for-a-while",
        "2004-04-09|4728 words of mayhem!|private|2004-04-09-4728-words-of-mayhem",
        "2004-04-11|watch out world; here I come!|private|2004-04-11-watch-out-world-here-i-come",
        "2004-04-15|broken laptop|private|2004-04-15-broken-laptop",
        "2004-04-17|decent post vol. 1|private|2004-04-17-decent-post-vol-1",
        "2004-04-18|decent post vol. 2|private|2004-04-18-decent-post-vol-2",
        "2004-04-21|decent post vol. 3 (finale)|private|2004-04-21-decent-post-vol-3-finale",
        "2004-04-25|Thanks Kanya!|private|2004-04-25-thanks-kanya",
        "2004-04-29|regretting regressing regressions|private|2004-04-29-regretting-regressing-regressions",
        "2004-05-02|It's time for a little Bloggie!|private|2004-05-02-its-time-for-a-little-bloggie",
        "2004-05-06|Finals-a-a-achoo!|private|2004-05-06-finals-a-a-achoo",
        "2004-05-11|icy fingers...|private|2004-05-11-icy-fingers",
        "2004-05-12|last minute trip!|private|2004-05-12-last-minute-trip",
        "2004-05-14|I just have to yell about some things|private|2004-05-14-i-just-have-to-yell-about-some-things",
        "2004-05-16|back to school... again?!|private|2004-05-16-back-to-school-again",
        "2004-05-17|First day at school... again|private|2004-05-17-first-day-at-school-again",
        "2004-05-19|a post from within these walls|private|2004-05-19-a-post-from-within-these-walls",
        "2004-05-19|ANOTHER post on the SAME day?!|private|2004-05-19-another-post-on-the-same-day",
        "2004-05-22|Time to take some write-ins!|private|2004-05-22-time-to-take-some-write-ins",
        "2004-05-23|I smell a challenge...|private|2004-05-23-i-smell-a-challenge",
        "2004-05-24|boxers|private|2004-05-24-boxers",
        "2004-05-25|I washed my brain with soap|private|2004-05-25-i-washed-my-brain-with-soap",
        "2004-05-27|Takako Chigusa|private|2004-05-27-takako-chigusa",
        "2004-06-08|nothing new here|private|2004-06-08-nothing-new-here",
        "2004-06-11|Puss In Boots... and more!|private|2004-06-11-puss-in-boots-and-more",
        "2004-06-19|still gone|private|2004-06-19-still-gone",
        "2004-06-20|Remote blogging?|private|2004-06-20-remote-blogging",
        "2004-06-26|A classic post|private|2004-06-26-a-classic-post",
        "2004-06-27|locked and smiled|private|2004-06-27-locked-and-smiled",
        "2004-06-29|Freestyle blogging?|private|2004-06-29-freestyle-blogging",
        "2004-07-03|Almost Classic|private|2004-07-03-almost-classic",
        "2004-07-07|AdSense Rejection|private|2004-07-07-what-im-rejected",
        "2004-07-08|Twelve Hours Later|private|2004-07-08-twelve-hours-later",
        "2004-07-11|Not Geico, Gekkou!|private|2004-07-11-not-geico-gekkou",
        "2004-07-14|A time-split blog: part 1|private|2004-07-14-a-time-split-blog-part-1",
        "2004-07-19|waiting|private|2004-07-19-waiting",
        "2004-08-09|Results of a Lamer-Targeted Virus|private|2004-08-09-results-of-a-lamer-targeted-virus",
        "2004-08-10|I'm in the paper!!|private|2004-08-10-im-in-the-paper",
        "2004-08-13|Scott vs. Charley|private|2004-08-13-scott-vs-charley",
        "2004-08-16|Scott wins!|private|2004-08-16-scott-wins",
        "2004-08-17|Another day... finally|private|2004-08-17-another-day-finally",
        "2004-08-27|Yet another beginning|private|2004-08-27-yet-another-beginning",
        "2004-08-30|My brain is mush|private|2004-08-30-my-brain-is-mush",
        "2004-09-02|Wonderful Days|private|2004-09-02-wonderful-days",
        "2004-09-04|Another hit|private|2004-09-04-another-hit",
        "2004-09-10|Friday Freestyle|private|2004-09-10-friday-freestyle",
        "2004-09-17|Lain of the wired is calling me|private|2004-09-17-lain-of-the-wired-is-calling-me",
        "2004-09-24|Happy Birthday Scott!|private|2004-09-24-happy-birthday-scott",
        "2004-10-01|No time to write!!!|private|2004-10-01-no-time-to-write",
        "2004-10-02|Oh, was I supposed to write something?|private|2004-10-02-oh-was-i-supposed-to-write-something",
        "2004-10-10|Tonight I partake in a little speedblogging!|private|2004-10-10-tonight-i-partake-in-a-little-speedblogging",
        "2004-10-17|How much does free time cost?|private|2004-10-17-how-much-does-free-time-cost",
        "2004-10-19|Oh come on; you’re talking about “Her” again?|private|2004-10-19-oh-come-on-youre-talking-about-her-again",
        "2004-10-26|The Intermission|private|2004-10-26-the-intermission",
        "2004-10-27|The post without a title|private|2004-10-27-the-post-without-a-title",
        "2004-10-31|Happy Halloween!|private|2004-10-31-happy-halloween",
        "2004-11-03|Scott's pumpkin won this election!|private|2004-11-03-scotts-pumpkin-won-this-election",
        "2004-11-08|Evermore Blissful Perseverance|private|2004-11-08-evermore-blissful-perseverance",
        "2004-11-10|Satisfied With Words|private|2004-11-10-satisfied-with-words",
        "2004-11-14|Whoa; Another Personal Rant?|private|2004-11-14-whoa-another-personal-rant",
        "2004-11-20|Awkward Frustrations; Life|private|2004-11-20-awkward-frustrations-life",
        "2004-11-27|Five Days of Aimless Boredom|private|2004-11-27-five-days-of-aimless-boredom",
        "2004-12-01|Finally; Uninterrupted Time to Write|private|2004-12-01-finally-uninterrupted-time-to-write",
        "2004-12-04|Overwhelmed With Finals Week Apathy|private|2004-12-04-overwhelmed-with-finals-week-apathy",
        "2004-12-08|I'm Sill Alive! (barely)|private|2004-12-08-im-sill-alive-barely",
        "2004-12-12|Experiments in Writing|private|2004-12-12-experiments-in-writing",
        "2005-01-14|A Final Recovery...|private|2005-01-14-a-final-recovery",
        "2005-01-14|ALMOST BACK!|private|2005-01-14-almost-back",
        "2005-01-14|Another Day Of My Half-Life|private|2005-01-14-another-day-of-my-half-life",
        "2005-01-14|Bitter Disappointment; Final Grades Are In|private|2005-01-14-bitter-disappointment-final-grades-are-in",
        "2005-01-14|School Lets Out; Boredom Sets In|private|2005-01-14-school-lets-out-boredom-sets-in",
        "2005-01-15|Keiko Saves the Day!|private|2005-01-15-keiko-saves-the-day",
        "2005-01-16|As Her Heart Beats With Mine|private|2005-01-16-as-her-heart-beats-with-mine",
        "2005-01-23|Snapshot of Life|private|2005-01-23-snapshot-of-life",
        "2005-01-26|A Beautiful Day For A Psychopath|private|2005-01-26-a-beautiful-day-for-a-psychopath",
        "2005-01-30|Way To Go There Mr. Productive!|private|2005-01-30-way-to-go-there-mr-productive",
        "2005-02-06|Taking a break from life|private|2005-02-06-im-taking-a-break-from-life",
        "2005-02-07|I can’t keep fighting the urge to write|private|2005-02-07-i-cant-keep-fighting-the-urge-to-write",
        "2005-02-08|Wonderful days frozen in time|private|2005-02-08-wonderful-days-frozen-in-time",
        "2005-02-10|Uhhgg; I'm sick|private|2005-02-10-uhhgg-im-so-sick",
        "2005-02-14|Smothering the Walls With My Blood|private|2005-02-14-smothering-the-walls-with-my-blood",
        "2005-02-15|A Quick Email and A Gentle Smile|private|2005-02-15-a-quick-email-and-a-gentle-smile",
        "2005-02-24|Do you have any idea how boring I am?|private|2005-02-24-do-you-have-any-idea-how-boring-i-am",
        "2005-03-03|You've Started Audioblogging?!|private|2005-03-03-youve-started-audioblogging",
        "2005-03-07|My Enemies Are Those of Distractions|private|2005-03-07-my-enemies-are-rhose-of-distraction-and-interruption",
        "2005-03-08|Another Website Has Been Hacked?!|private|2005-03-08-another-website-has-been-hacked",
        "2005-03-11|Confessions of a Lunatic Mind|private|2005-03-11-confessions-of-a-lunatic-mind",
        "2005-03-18|Audioblog! March 18'th|private|2005-03-18-audioblog-march-18th",
        "2005-03-18|Feeling a Little Down|private|2005-03-18-feeling-a-little-down",
        "2005-03-21|Audioblog! March 21'st|private|2005-03-21-audioblog-march-21st",
        "2005-03-24|Why are you staring at me like that?|private|2005-03-24-why-are-you-staring-at-me-like-that",
        "2005-04-01|What? No Blog Tonight?!|private|2005-04-01-what-no-blog-tonight",
        "2005-04-03|67 Minutes Plus?!|private|2005-04-03-67-minutes-plus",
        "2005-04-11|Earnestly Disappointed|private|2005-04-11-empry-lament",
        "2005-04-14|NEW LIVE AUDIOBLOG!|private|2005-04-14-new-live-audioblog",
        "2005-04-17|S.I.H.B. Live Radio Show?!|private|2005-04-17-sihb-live-radio-show",
        "2005-04-20|The End is Approaching|private|2005-04-20-the-end-is-approaching",
        "2005-04-27|Terrible Day Number Nine|private|2005-04-27-terrible-day-number-nine",
        "2005-05-06|Updated 'About Scott' Webpage|private|2005-05-06-updated-about-scott-webpage",
        "2005-05-09|Uhg, this is so dumb.|private|2005-05-09-uhg-this-is-so-dumb",
        "2005-05-10|Knighthacker and Friends!|private|2005-05-10-knighthacker-and-friends",
        "2005-05-12|One Semester Down, Five Million Remaining|private|2005-05-12-one-semester-down-five-million-remaining",
        "2005-05-31|silence...|private|2005-05-31-silence",
        "2005-06-02|UPGRADING...|private|2005-06-02-upgrading",
        "2005-06-04|Love is Tenderness and Momentary Pain|private|2005-06-04-love-is-tenderness-and-momentary-pain",
        "2005-06-17|More Than Life Itself|private|2005-06-17-more-than-life-itself",
        "2005-06-26|Fruity Watermelodrama!|private|2005-06-26-fruity-watermelodrama",
        "2005-06-29|EVA-05 Attack Scott's Sanity!|private|2005-06-29-eva-05-attack-scotts-sanity",
        "2005-07-03|Interrupted Thought #524|private|2005-07-03-interrupted-thought-524",
        "2005-07-03|Regrets|private|2005-07-03-regrets",
        "2005-07-05|Independence Day 2005|private|2005-07-05-independence-day-2005",
        "2005-07-15|Oh no! I shouldn’t be blogging!|private|2005-07-15-oh-no-i-shouldnt-be-blogging",
        "2005-07-20|Back (shortly)|private|2005-07-20-back-shortly",
        "2005-07-25|The Blogging Protagonist Strikes Again!|private|2005-07-25-the-blogging-protagonist-strikes-again",
        "2005-08-02|Venomcrack: AntiVenom|private|2005-08-02-venomcrack-antivenom",
        "2005-08-06|Live, Love, and Code.|private|2005-08-06-live-love-and-code",
        "2005-08-07|Must Love Blogs|private|2005-08-07-must-love-blogs",
        "2006-01-19|Squelching Daily Chaos|private|2006-01-19-squelching-daily-chaos",
        "2006-08-13|nostalgic pecks on a dusty keyboard|private|2006-08-13-nostalgic-pecks-on-a-dusty-keyboard",
        "2006-08-15|bathe me in benadryl!|private|2006-08-15-bathe-me-in-benadryl",
        "2006-08-17|The Numbness of an empty mind|private|2006-08-17-the-numbness-of-an-empty-mind",
        "2006-08-18|Experiencing Gravity|private|2006-08-18-experiencing-gravity",
        "2006-08-21|Mannerisms|private|2006-08-21-highly-homosexual-mannerisms",
        "2006-08-21|Recollections of an unplanned day|private|2006-08-21-recollections-of-an-unplanned-day",
        "2006-12-14|One Among Many Recorded Fragments of My Life|private|2006-12-14-seemingly-endless-and-perpetually-torturous",
        "2007-09-01|Discomfiting and Inexplicable|private|2007-09-01-discomfiting-and-inexplicable",
        "2008-09-08|Ignore Me Because I Hate DNA|private|2008-09-08-ignore-me-because-i-hate-dna",
        "2008-09-11|The Day I Decided to Stop Writing|private|2008-09-11-the-day-i-decided-to-stop-writing",
        "2008-09-22|Finally, a Breakthrough in my Research|private|2008-09-22-finally-a-breakthrough-in-my-research",
        "2008-10-01|It's True, My Application Essay Says So!|private|2008-10-01-its-true-my-application-essay-says-so",
        "2008-11-12|Glorious Intolerable Monotony|private|2008-11-12-glorious-intolerable-monotony",
        "2008-11-13|It's Just Molecules, They're Not People|private|2008-11-13-its-just-molecules-theyre-not-people",
        "2008-11-16|Free Damask Seamless Tiling Backgrounds|private|2008-11-16-free-damask-seamless-tiling-backgrounds",
        "2008-11-24|Is Descriptive Eloquence Inherited?|private|2008-11-24-is-descriptive-eloquence-inherited",
        "2008-11-29|Enamored by a Past Life|private|2008-11-29-past-life",
        "2008-12-17|Molecular Purgatory|private|2008-12-17-molecular-purgatory",
        "2008-12-19|Disappointing Sweaters|private|2008-12-19-disappointing-sweaters",
        "2008-12-20|Data Mismanagement / Infestation|private|2008-12-20-data-mismanagement-infestation",
        "2008-12-23|Merry Labmice|private|2008-12-23-merry-labmice",
        "2009-01-02|Don't Yell at Your PC Like I Do|private|2009-01-02-dont-yell-at-your-pc-like-i-do",
        "2009-01-07|Lipid Raft|private|2009-01-07-lipid-raft",
        "2009-01-22|Using PHP to Create Apache-Style Access.log|private|2009-01-22-using-php-to-create-apache-style-accesslog",
        "2009-01-25|I'm in Love with InkScape|private|2009-01-25-im-in-love-with-inkscape",
        "2009-01-26|Yay Python!|private|2009-01-26-yay-python",
        "2009-01-28|Head-on|private|2009-01-28-head-on",
        "2009-01-28|Losing... Energy... Fast...|private|2009-01-28-losing-energy-fast",
        "2009-01-29|Celebrity Dwarf Gouramis|private|2009-01-29-celebrity-dwarf-gouramis",
        "2009-01-30|Random Fact|private|2009-01-30-random-fact",
        "2009-02-04|EM Toothbrush Study?|private|2009-02-04-em-toothbrush-study",
        "2009-02-12|My Mental Dustpan|private|2009-02-12-my-mental-dustpan",
        "2009-02-15|Averatec's Last Breath|private|2009-02-15-averatecs-last-breath",
        "2009-02-17|Integrated Writing|private|2009-02-17-integrated-writing",
        "2009-02-19|Mystic Mechanism|private|2009-02-19-mystic-mechanism",
        "2009-03-03|Hacking Into Pandora's Box|private|2009-03-03-hacking-into-pandoras-box",
        "2009-03-11|Thesis Countdown Continues...|private|2009-03-11-from-latex-to-lamemsw",
        "2009-03-23|Momentary Silence|private|2009-03-23-momentary-silence",
        "2009-03-30|Mental Fragmentation|private|2009-03-30-mental-fragmentation",
        "2009-04-01|Releasing the Bull|private|2009-04-01-releasing-the-bull",
        "2009-04-02|DIY 2meter Radio Antenna|private|2009-04-02-diy-2meter-radio-antenna",
        "2009-04-02|Free Online Study Questions for Ham Radio Technician License|private|2009-04-02-free-online-study-questions-for-ham-radio-technician-license",
        "2009-04-06|I Spotted an Airplane!|private|2009-04-06-i-spotted-an-airplane",
        "2009-04-09|Capacitor + LEDs + HDD = LOLZ|private|2009-04-09-capacitor-leds-hdd-lolz",
        "2009-04-14|Molecules and Non-Steam Engines|private|2009-04-14-molecules-and-non-steam-engines",
        "2009-06-02|Timing is Everything|private|2009-06-02-timing-is-everything",
        "2009-06-04|I Wish I Weren't Forced to Recycle|private|2009-06-04-i-wish-i-werent-forced-to-recycle",
        "2009-06-05|Code Monkey Want Cookie|private|2009-06-05-code-monkey-want-cookie",
        "2009-06-07|McPPNG Nearing completion|private|2009-06-07-mcppng-nearing-completion",
        "2009-06-09|Determining the Prime-ary Language|private|2009-06-09-determining-the-prime-ary-language",
        "2009-06-10|Prime-ary Prototype: Complete!|private|2009-06-10-primary-prototype-complete",
        "2009-06-10|Time Prediction by Curve Fitting|private|2009-06-10-time-prediction-by-curve-fitting",
        "2009-06-18|Updated pySquelch Code|private|2009-06-18-updated-pysquelch-code",
        "2009-06-22|Jedi Soldering Skills|private|2009-06-22-dont-drink-and-solder",
        "2009-06-25|Jedi Soldering Skills - Part 2|private|2009-06-25-jedi-soldering-skills-part-2",
        "2009-07-23|Transition|private|2009-07-23-transition",
        "2009-08-06|Defibrillating My DIY ECG Project|private|2009-08-06-defibrillating-my-diy-ecg-project",
        "2009-08-07|Fringe Culture Seared Into My Brain|private|2009-08-07-fringe-culture-seared-into-my-brain",
        "2009-08-11|Bloated Software Makes Me Sick|private|2009-08-11-bloated-software-makes-me-sick",
        "2009-08-22|Wrapping-Up the Summer|private|2009-08-22-wrapping-up-the-summer",
        "2009-09-23|Mental Viscosity|private|2009-09-23-mental-viscosity",
        "2009-12-05|Dental School is Boring|private|2009-12-05-dental-school-is-boring",
        "2010-03-09|I'm working too hard|private|2010-03-09-im-working-too-hard",
        "2010-03-15|Lubnaan Shaikhto's Project|private|2010-03-15-1920",
        "2010-05-26|Measuring Coil Inductance with an MFJ Antenna Analyzer|private|2010-05-26-measuring-coil-inductance-with-an-mfj-antenna-analyzer",
        "2010-05-27|Drop-In Lowpass Filters?|private|2010-05-27-drop-in-lowpass-filters",
        "2010-05-29|PWM Junk in CKOUT?|private|2010-05-29-pwm-junk-in-ckout",
        "2010-06-05|How Real Hackers Communicate|private|2010-06-05-how-real-hackers-communicate",
        "2010-06-15|I've Tried the Windows Thing Again, and I Give Up!|private|2010-06-15-ive-tried-the-windows-thing-again-and-i-give-up",
    );
}

class ListOfPosts extends Page
{
    function __construct(string $blog_post_folder, $posts_per_page = 5)
    {
        $this->allowAds = false;
        $posts = new BlogPosts($blog_post_folder);
        $articles = $posts->newestFirst;
        $totalPages = count($articles) / $posts_per_page;

        $html = "<h1>&nbsp;&nbsp;Posts</h1>";
        $postLines = [];
        foreach ($articles as $article) {
            $post = new BlogPost($article->markdown_file_path, true);
            $timestamp = date("Y-m-d", $post->epochTime);
            $tags = [];
            foreach ($post->tags as $tag) {
                $tags[] = "<span style='color: #ccc;'>$tag</span>";
            }
            $tags = "<span style='color: #ccc;'>" . join(", ", $tags) . "</span>";
            $postLines[] = "<div><li>$timestamp <a href='$post->url_folder'>$post->title</a> $tags</div>";
        }

        foreach (getOldPosts() as $oldPost) {
            $parts = explode("|", $oldPost);
            $timestamp = $parts[0];
            $title = $parts[1];
            $postLines[] = "<div><li>$timestamp $title <span style='color: #ccc;'>private</span></div>";
        }

        rsort($postLines);

        $html .= join("", $postLines);

        $pageLinks = [];
        for ($i = 1; $i < $totalPages + 1; $i++) {
            $pageLinks[] = "<a href='/blog/page/$i'>page $i</a>";
        }
        $html .= "<h1>&nbsp;&nbsp;Pages</h1><div>" . join(", ", $pageLinks) . "</div>";

        $this->title = "All Blog Posts";
        $this->content = "<article><div id='md2html'>$html</div></article>";
    }
}
