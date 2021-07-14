-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Júl 14. 12:38
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `marksblog`
--
CREATE DATABASE marksblog;
-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2b$10$KYL8OFRUQY0Cksfjly9sfuMcPODGgCKmR2XTHWQbG9tYp1sv1zDeG', 'test@test.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_queue` int(11) NOT NULL,
  `post_label` varchar(120) COLLATE utf8mb4_bin NOT NULL,
  `post_status` int(1) NOT NULL,
  `url` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `post_img` varchar(300) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post_intro_txt` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `post_content_txt` varchar(5000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `post_queue`, `post_label`, `post_status`, `url`, `date`, `post_img`, `post_intro_txt`, `post_content_txt`) VALUES
(42, 8, 'The 10 Best Mario Levels of All Time Part 1', 1, 'the-10-best-mario-levels-of-all-time-part-1', '2021-03-15', 'p_img/mario.jpg', 'After 36 years, there have been a lot of Mario games, with hundreds of levels between them -- and, dare I say it, most of them are pretty great. So we decided it was time to comb through the treasure trove of stages.', '<h2>10. Bowser&#39;s Fury - Super Mario 3D World</h2>\r\n\r\n<p>Yes, it&#39;s a very new addition to the series to be included on this list, but there&#39;s no denying that Bowser&#39;s Fury is something really special.</p>\r\n\r\n<p>One part new school, 3D exploration-based Mario adventure, and one part old school Mario platforming charm dropped onto one giant map where you seamlessly migrate between levels and challenges. It feels like the &ldquo;next big thing&quot; for Mario, and while it&rsquo;s true that games like Sunshine, Odyssey, and even 64 have been described as open-world, this is on a whole new level. See what we did there?</p>\r\n\r\n<h2>9. Donut Plains 1 - Super Mario World</h2>\r\n\r\n<p>When we think of the Mario franchise, the first thing that comes to mind is Donut Plains 1. Grabbing that first feather and realizing that the cape would let you FLY was nothing short of revelatory, and turned everything we thought we knew about Mario on its ear. Mix this with the catchy steel drums and tuba soundtrack, secret exits, and bonus block puzzles and you&#39;ve got a template for not only the rest of Super Mario World, but a great evolution of the structure of a Mario level. There are more complex levels in Super Mario World, for sure, but Donut Plains One is a shining example of a game teaching you its own rules and how to break them. Perfection.</p>\r\n\r\n<h2>8. Sunken Ghost Ship - Super Mario World</h2>\r\n\r\n<p>Another from Super Mario World, the Sunken Ghost Ship is no normal level by any means. Sitting isolated in the waters at the center of Dinosaur Island, the stage combines the foreboding atmosphere of Super Mario World&rsquo;s ghost houses with clever references to Super Mario Bros. 3&rsquo;s airships - which have been noticeably absent in this world. Though somewhat short, its vast hordes of underwater Boos that literally fill the screen make for a lasting impact, as does the subtle storytelling of falling down a seemingly bottomless void with no traditional goalpost in sight to raise the gaping jaws of a giant stone bowser up from the depths. You&rsquo;d be hard pressed to find a better introduction to a final boss&rsquo;s secret lair.</p>\r\n\r\n<h2>7. Giant Land - Super Mario Bros. 3</h2>\r\n\r\n<p>The levels in Super Mario Bros. 3 are full of clever ideas and fun surprises. Perhaps the biggest surprise (pun intended) occurs the moment you enter world 4-1. In this level, the enemies, blocks, pipes, and clouds are just enormous, about four times bigger than usual. You&#39;re still regular-sized Mario, but the world you&#39;ve entered is shockingly huge. The first time you play this level, you probably had no idea the game could even do this. What&#39;s great about Giant Land, though, is the strength of all great Mario levels: it offers a perfect combination of surprise and delight. It has the same precise and satisfying Mario gameplay, but in a creative new package that can make even the most veteran players crack a smile.</p>\r\n\r\n<h2>6. Bianco Hills - Super Mario Sunshine</h2>\r\n\r\n<p>Super Mario Sunshine, unlike so many other Mario games, made a daring choice with its setting: a tropical island divided into individually themed biomes, all centered around a relaxing vacation gone wrong. Bianco Hills is easily the most iconic of these, especially as it&rsquo;s the first level you visit. This believable, pleasant little Pianta town invites the player to test out their new FLUDD capabilities throughout its multiple layers.<br />\r\n<br />\r\nThere&#39;s a town side and a lakeside, ground areas, water, and aerial bouncing wires that allow you to just climb and climb and climb. What&#39;s more, its topography changes from episode to episode as different structures, paint splats, and enemies re-shape the village. Its clever architecture, attention to detail, and sheer personality makes Bianco Hills a wonderful summation of everything that made Mario Sunshine such a brave and delightful adventure.</p>\r\n\r\n<h2>5. Darker Side - Super Mario Odyssey</h2>\r\n\r\n<p>Darker Side of the Moon is not just the hardest level of Super Mario Odyssey, it&rsquo;s a celebration of the game itself. It&rsquo;s a 10-minute long marathon that not only throws traditionally fun platforming challenges at you, but also is a sampling of all the best mechanics that are unique to Mario Odyssey. Like the part where you take control of a Podoboo and have to jump from lava pool to lava pool while trying to avoid getting hit b spiked balls, or the bit where you&rsquo;re a Pokio and have to fling yourself from one platform to the next with your nose; or who could ever forget the lead up to the finale where you control Bowser himself and go on a rampage, crashing through everything in your path. The best part, when you reach the end, you get a heartwarming &ldquo;thank you&rdquo; message for your dedication.</p>\r\n'),
(43, 9, 'The 10 Best Mario Levels of All Time Part 2', 1, 'the-10-best-mario-levels-of-all-time-part-2', '2021-03-14', 'p_img/mario_pt2.jpg', 'The last 4 levels we think are the most iconic mario levels of all time. Check out part 1 first!', '<h2>4. Freezeflame Galaxy - Super Mario Galaxy</h2>\r\n\r\n<p>If there are two types of levels that have been done to death in the Mario series, its lava and ice worlds &ndash; which is why it&rsquo;s a little surprising that a level that combines the two would be so enjoyable. The &ldquo;Freeze&rdquo; side of Freezeflame Galaxy is definitely the standout, as the Ice Flower allows Mario to gracefully skate along both water and lava surfaces, creating some fun races against the clock as you dash to safety before the power-up timer runs out and leaves you either in freezing cold water or insta-kill lava. It&rsquo;s a really mechanically interesting and visually spectacular level that does a great job of combining two very distinct themes into one.</p>\r\n\r\n<h2>3. World 1-1 - Super Mario Bros.</h2>\r\n\r\n<p>Aside from the fact that World 1-1 from Super Mario Bros. on NES is one of - if not the - most iconic Mario level of all time, it&rsquo;s also just about the perfect start to a Mario game there is. Everything about this stage is there to teach you how to play the game, from the first goomba teaching you how to smash and jump over enemies to figuring out how power ups work. There&rsquo;s even a secret 1-up revealing that this world is chock-full of hidden items, and of course the warp pipe that lets you skip the entire level makes you realize that this game isn&rsquo;t the linear platformer it appears to be. It&rsquo;s an absolute perfect start to the adventure before you, and for the Mario franchise as a whole.</p>\r\n\r\n<h2>2. Bowser in the Sky</h2>\r\n\r\n<p>Bowser in the Sky is the final stage in Super Mario 64, and I mean that in the truest sense of the word. It&rsquo;s more or less a collection of all of your past challenges you&rsquo;ve faced so far. It&rsquo;s got thwomps, spinnings platforms, fire-spitting piranhas -- all of the obstacles that Mario&rsquo;s faced so far are trying to take him down one last time. And while the stage also features some pretty tough platforming, a missed jump doesn&rsquo;t always mean instant death. Finally, this is also the final showdown with a new neon-drenched Bowser, and it doesn&rsquo;t take that challenge lightly. The music is different, he now takes three hits to go down, and he changes up the layout of the arena by smashing the stage to pieces &ndash; but when he finally goes down and the final star is yours to collect, it&rsquo;s always a very special feeling.</p>\r\n\r\n<h2>1. New Donk City - Super Mario Odyssey</h2>\r\n\r\n<p>Over the last decade, Nintendo has been vigilant in transforming Mario from mere jump-man mascot to a purposeful spreader of joy &ndash; and no single level in a Mario game better serves that purpose than New Donk City.</p>\r\n\r\n<p>While levels like Donut Plains or World 1-1 remain iconic to a generation of Mario veterans, Metro Kingdom&#39;s New Donk City embraces all that Mario was, is, and always will be. Though it&rsquo;s not devoid of platforming challenges for those who want them, it is first and foremost a playground -- a theme park stuffed with toys and rides that react and interact in surprising ways, from electrical wires that that can shock you to musicians to RC cars to even a sad man who cheers up if Mario sits on a bench with him. But it&#39;s also packed with references to Mario history, culminating in its show-stopping New Donk City Festival Power Moon -- the ultimate celebration of Mario&#39;s old feats and new, and his joyous spirit.</p>\r\n'),
(44, 7, 'Biden administration started outreach to North Korea last month, but country is unresponsive.', 1, 'biden-administration-started-outreach-to-north-korea-last-month-but-country-is-unresponsive', '2021-03-12', 'p_img/kim-jong-un.jpg', 'The Biden administration launched a behind-the-scenes push last month to reach out to North Korea through multiple channels, a senior administration official has told CNN, but thus far Pyongyang has been unresponsive.', '<p>&quot;To reduce the risks of escalation, we reached out to the North Korean government through several channels starting in mid-February, including in New York,&quot; the official said. &quot;To date, we have not received any response from Pyongyang. This follows over a year without active dialogue with North Korea, despite multiple attempts by the US to engage.&quot;</p>\r\n\r\n<p>The official did not provide further details of what the outreach entailed but noted the administration has been conducting its interagency review of the United States&#39; policy towards North Korea, &quot;including evaluation of all available options to address the increasing threat posed by North Korea to its neighbors and the broader international community.&quot;</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>During the review process, the administration has consulted with former government officials with experience in North Korea policy, including some officials from the Trump administration, the official said. The US has also been in touch with allies from Japan and South Korea.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>&quot;We look forward to completing our intensive, multi-stakeholder policy review in the coming weeks,&quot; the official said.</p>\r\n\r\n<p>Reuters first&nbsp;<a href=\"https://www.reuters.com/article/us-usa-northkorea/exclusive-north-korea-unresponsive-to-behind-the-scenes-biden-administration-outreach-u-s-official-idUSKBN2B50P1\" target=\"_blank\">reported</a>&nbsp;the outreach efforts on Saturday.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>News of the outreach comes as lawmakers and key US allies are&nbsp;<a href=\"https://amp.cnn.com/cnn/2021/03/02/politics/north-korea-satellite-images-yongdoktong-nuclear-site/index.html\" target=\"_blank\">eagerly awaiting details</a>&nbsp;about Biden&#39;s North Korea policy, which they expect will be announced publicly in the coming weeks when the administration has completed a policy review, according to multiple sources familiar with the internal discussions.</p>\r\n\r\n<p>Satellite imagery obtained by CNN reveals North Korea has recently taken steps to conceal a facility that US intelligence agencies believe is being used to store nuclear weapons.</p>\r\n'),
(45, 6, 'How wearable tech helped elite athletes through the pandemic', 1, 'how-wearable-tech-helped-elite-athletes-through-the-pandemic', '2021-03-13', 'p_img/athlete.jpg', 'From the English Premier League to the NFL, sport is a multibillion-dollar industry, and top teams are increasingly turning to technology to give them the edge.', '<p>Until recently, gathering athletes&#39; performance data was a laborious process. Coaches and sports scientists would spend hours compiling information from games and training sessions, pulling out the information relevant to their players&#39; development. But technology-based performance analytics has changed all that.</p>\r\n\r\n<p>These days, athletes can wear devices or vests with GPS-tracking capabilities that record the speed and distance they run, as well as the impacts on their body. The information helps coaches develop training plans to avoid athlete fatigue and maximize performance for match days.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>STATSports, a company based in Northern Ireland, is a leader in the performance analytics industry. Most teams in the English Premier League (EPL) use its technology, as do top rugby and American football teams.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>In 2018, the firm secured a five-year deal with the US Soccer Federation, reported to be worth&nbsp;<a href=\"https://www.irishtimes.com/business/technology/irish-sports-tech-firm-signs-1bn-us-soccer-deal-1.3444407\" target=\"_blank\">&pound;1 billion</a>&nbsp;($1.2 billion) which STATSports said would see&nbsp;<a href=\"https://statsports.com/u-s-soccer-turns-to-uks-statsports-to-discover-stars-of-the-future/\" target=\"_blank\">millions of US players</a>&nbsp;at all levels using its devices.</p>\r\n\r\n<p>&quot;When we started the company 12 years ago, this technology was in its infancy,&quot; STATSports co-founder Sean O&#39;Connor told CNN Business. &quot;Now, it&#39;s common throughout most sports at all levels and it&#39;s now about being able to get the maximum from it.&quot;</p>\r\n\r\n<p>The company&#39;s Sonra 3.0 software released in 2020 lets teams view data almost instantly from an iPad or&nbsp;Apple&nbsp;(<a href=\"https://money.cnn.com/quote/quote.html?symb=AAPL&amp;source=story_quote_link\">AAPL</a>)&nbsp;Watch, so that even during competition, players and coaches can get feedback and adjust tactics mid-game.</p>\r\n\r\n<h3><strong>Player performance</strong></h3>\r\n\r\n<p>Tom Allen has been Arsenal Football Club&#39;s lead sport scientist since 2017. He says players, as well as coaches, are now showing an interest in performance data.</p>\r\n\r\n<p>&quot;When I first started, no one [player] was really too bothered about these statistics,&quot; he said. &quot;Now, everyone is used to seeing information sent to the phones and they take a key interest in how they&#39;re improving.</p>\r\n\r\n<p>&quot;The elite athletes, they&#39;re always very competitive. They want to know, &#39;why is someone doing more than me? I should be doing more than that,&#39; and they&#39;re pushing each other.&quot;</p>\r\n\r\n<p>Over the past year, the technology has also been used to track performance away from the training ground. As the United Kingdom went into lockdown in March 2020, and the English Premier League was temporarily suspended, clubs used STATSports devices to keep track of their players as they trained remotely.</p>\r\n\r\n<p>&quot;We went through a very tough regime to try and get them ready for what was going to come along the line post-Covid,&quot; Allen explained. &quot;We had a leader board within the group and we teamed everyone up together and you saw the competition go through the roof.&quot;</p>\r\n\r\n<p>While the league was suspended, STATSports compiled a &quot;player proximity report&quot; that showed how much time during training sessions players spent within two meters of each other &mdash; the minimum distance recommended by the government&#39;s social distancing policy. The EPL presented the data to the government as part of its efforts to restart the league.</p>\r\n\r\n<h3><strong>Filtering down</strong></h3>\r\n\r\n<p>The sports analytics industry could be worth&nbsp;<a href=\"https://www.prnewswire.com/news-releases/sports-analytics-market-size-worth-4-6-billion-by-2025--cagr-31-2-grand-view-research-inc-300969722.html\" target=\"_blank\">$4.6 billion</a>&nbsp;by 2025, according to<strong>&nbsp;</strong>Grand View Research, with the technology starting to filter down to the amateur level.</p>\r\n\r\n<p>Companies such as Australia&#39;s Catapult &mdash; which also works with EPL teams &mdash; and STATSports have developed systems targeted at the amateur market, letting users compare their performance to their peers and to professionals.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>&quot;You can create a league with your friends, you can compare yourself to the elite pros as well, and gauge where you are in relation to that,&quot; says O&#39;Connor. &quot;There&#39;s a huge appetite for that and it&#39;s growing.</p>\r\n\r\n<p>&quot;That underbelly of kids and youth football players is where the next wave of technology advances will come.&quot;</p>\r\n'),
(46, 5, 'WEBSITE UPDATE', 0, 'website-update', '0000-00-00', 'p_img/test.png', 'You can search the blog posts now on the home page!', ''),
(47, 4, 'Sony’s PlayStation 5 is restocked at Best Buy', 1, 'sony-s-playstation-5-is-restocked-at-best-buy', '2021-03-14', 'p_img/ps5.jpg', 'Both PS5’s are in stock right now', '<p>If you missed Target&rsquo;s PS5 restocks Thursday, you may be in luck. Best Buy has the&nbsp;<a href=\"https://shop-links.co/1734053780700716864#donotlink?u1=%5B%5Dvg%5Bp%5D22092064%5Bt%5Dw%5Br%5Dtheverge.com%2Fgames%5Bd%5DD\" rel=\"sponsored nofollow noopener\" target=\"_blank\">PS5 Digital Edition</a>&nbsp;and&nbsp;<a href=\"https://shop-links.co/1734053639217049019#donotlink?u1=%5B%5Dvg%5Bp%5D22092064%5Bt%5Dw%5Br%5Dtheverge.com%2Fgames%5Bd%5DD\" rel=\"sponsored nofollow noopener\" target=\"_blank\">PS5</a>&nbsp;models up for purchase.</p>\r\n\r\n<p>According to the product listing, Best Buy will only allow you to pick up your newly purchased PS5 at a local Best Buy store. No home delivery is available for either model.</p>\r\n'),
(48, 3, 'Coronavirus: Number of Patients on Ventilators at All-Time High', 1, 'coronavirus-number-of-patients-on-ventilators-at-all-time-high', '2021-03-14', 'p_img/covid.jpg', 'Fully 162 patients, generally elderly with an underlying condition, died over the past 24 hours, and 8,863 new coronavirus infections were officially registered, while 1,319,266 people have received their first jab, koronavirus.gov.hu said on Sunday.', '<p>The number of registered infections has risen to 516,490, while the death toll has increased to 16,952. The number of recoveries stands at 351,891.</p>\r\n\r\n<p>There are 147,647 active infections, while hospitals are caring for 8,764 Covid patients, 1,005 of whom are on ventilators.</p>\r\n\r\n<p>Fully 48,329 people are in official home quarantine, while the number of tests carried out has increased to 4,076,943.</p>\r\n\r\n<p>Fully 1,319,266 people have received their first jab, and 392,703 have been fully inoculated, the website reported.</p>\r\n\r\n<p>Last Thursday, the government&nbsp;<a href=\"https://hungarytoday.hu/hungary-lockdown-measures-restrictions-details/\" rel=\"noopener noreferrer\" target=\"_blank\">announced further strict measures</a>.</p>\r\n'),
(49, 2, 'Liu Brothers Conquer Dordrecht Skating World Championship', 1, 'liu-brothers-conquer-dordrecht-skating-world-championship', '2021-03-12', 'p_img/liu.jpg', 'Olympic gold medalist Shaoang Liu won his first world title in speed skating at the men’s 500-meter final of the 2021 Short Track Speed Skating World Championships in Dordrecht, Netherlands on Saturday.', '<p>Representing Hungary, the 22-year-old Shaoang sped in first with a time of 40.524 seconds, followed by Semen Elistratov (40.524 seconds) from Russia and Pietro Sighel (40,673 seconds) from Italy.</p>\r\n\r\n<p>Starting in the first position after&nbsp;<a href=\"https://www.nemzetisport.hu/teli_sportok/rp-gyorskori-liu-shaoang-vilagbajnok-500-meteren-2813881?fbclid=IwAR1SsTVPv7erufnPHEXyl37GvvkLFte_6imSqHG_fRK38NvLsUoaLqNT5nQ\" rel=\"noopener noreferrer\" target=\"_blank\">achieving</a>&nbsp;the best time in the semi-finals, Liu was able to maintain the lead throughout the fast-paced race that brought him his first gold in 500 meter skating.</p>\r\n\r\n<p><a href=\"https://twitter.com/i/status/1368234365583384580\" target=\"_blank\">TWITTER VIDEO LINK</a></p>\r\n\r\n<p>In an interview with the Hungarian Skating Federation, Liu&nbsp;<a href=\"http://hunskate.hu/hirek/short-track/vitte-elore-a-reggeli-gondolat\" rel=\"noopener noreferrer\" target=\"_blank\">said</a>&nbsp;&ldquo;I woke up Saturday morning knowing that I am going to be a world champion.&rdquo;</p>\r\n\r\n<p>Regarding 500-meter skating, he said that the previous records in the tournament are particularly important, since they determine the skaters&rsquo; starting positions.</p>\r\n\r\n<p>Liu said that compared to his performance at the European championship in Gdansk, he felt that his skating was more relaxed.</p>\r\n\r\n<p>He knew that his Russian opponent had a worse starting position than he did, which he took advantage of by pushing for a strong lead at the beginning of the race which he could maintain until the finish line. Liu said his brother Shaolin&rsquo;s advice from the sidelines to stay relaxed also came as helpful aid.</p>\r\n\r\n<p>Shaoang Liu is Hungary&rsquo;s second world champion in short track skating. His older brother, 25-year-old Shaolin S&aacute;ndor Liu was first to the title in 2016,&nbsp;<a href=\"https://www.nemzetisport.hu/teli_sportok/rp-gyorskori-liu-shaoang-vilagbajnok-500-meteren-2813881?fbclid=IwAR1SsTVPv7erufnPHEXyl37GvvkLFte_6imSqHG_fRK38NvLsUoaLqNT5nQ\" rel=\"noopener noreferrer\" target=\"_blank\">winning</a>&nbsp;the 500m short track world championship in Seoul.</p>\r\n\r\n<p>The two brothers also made history in Hungarian speed skating by&nbsp;<a href=\"https://444.hu/2021/03/07/oriasi-magyar-dupla-liu-shaolin-sandor-vilagbajnok-az-occse-ezustermes?fbclid=IwAR2FHTR3yBVTONNV-AdWvwRIhJnkxYWtV9rYtymisLC2ZLVd4PjpB9vMXEI\" rel=\"noopener noreferrer\" target=\"_blank\">finishing</a>&nbsp;at the top of the men&rsquo;s 1000 meter the next day. Shaolin S&aacute;ndor came in first with a time of 1 minute 25.901 seconds, followed by Shaoang, who skated the distance in 1 minute 26 seconds.</p>\r\n\r\n<p>The win shows an exceptional recovery for Shaolin, who&nbsp;<a href=\"https://hungarytoday.hu/shaolin-liu-coronavirus-speed-skating/\" rel=\"noopener noreferrer\" target=\"_blank\">tested</a>&nbsp;positive for the coronavirus back in September. A minor setback, the illness clearly could not stop his success in Dordrecht.</p>\r\n'),
(50, 1, 'Hungarian and Swedish Scientists Discover New Particle ‘Odderon’', 1, 'hungarian-and-swedish-scientists-discover-new-particle-odderon', '2021-03-13', 'p_img/particle.jpg', 'After almost half a century of research, a team of Hungarian and Swedish scientists discovered the existence of the Odderon, an extremely fleeting particle.', '<p>Researchers from the Wigner Research Centre for Physics, the Hungarian University of Agriculture and Life Sciences, E&ouml;tv&ouml;s Lor&aacute;nd University, and the Swedish Lund University confirmed the existence of the Odderon particle using the European Council for Nuclear Research&rsquo;s Large Hadron Collider (CERN LHC). Their report was presented by the Hungarian University of Agriculture and Life Sciences (MATE) on Monday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"background-color:#f39c12\">The&nbsp;</span><a href=\"https://home.cern/science/accelerators/large-hadron-collider\" rel=\"noopener noreferrer\" target=\"_blank\"><span style=\"background-color:#f39c12\">Large Hadron Collider</span></a><span style=\"background-color:#f39c12\">&nbsp;(LHC) is the world&rsquo;s largest and most powerful particle accelerator. It is a 27-kilometer-long ring of superconducting magnets and accelerating structures which, when used, guide two high-energy particle beams travelling close to the speed of light to collide into each other. In order for the accelerator to function properly, its magnets must be kept at a temperature of negative 271.3 degrees Celsius, colder than outer space.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tam&aacute;s Cs&ouml;rgő, head of the Hungarian research group, said that the existence of the Odderon also confirms the existence of multiple similar, combined particles, which could lead to a new chapter in the study of strong interactions and particle theory.</p>\r\n\r\n<p>Cs&ouml;rgő brought up that the potential existence of Odderon was suggested in 1973, but the particle accelerators available at the time had not yet developed to the point where they could allow for its discovery.</p>\r\n\r\n<p>48 years later, Hungarian researchers created a new method of re-analyzing and screening previously reported experiments and data, facilitating experiments and ultimately the discovery of the particle through CERN&rsquo;s Large Hadron Collider in Sweden.</p>\r\n');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;