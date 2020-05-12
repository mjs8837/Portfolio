<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="titleBar">
        <header id="main">
            <h1>Michael Santos</h1>
        </header>
        <nav id="navigation">
            <ul id="navigationList">
                <li class="nav"><a href="#aboutMe">About Me</a></li>
                <li class="nav"><a href="#portfolio">Portfolio</a></li>
                <li class="nav"><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <div id="wrapper">

            <div id="aboutMe">
                <div id="myself">
                    <img src="images/portfolioPic.png" alt="portfolio picture" class="profilePic">
                    <p class="tagLine">Game Design and Development student looking for internship opportunities</p>
                </div>

                <div id="info">
                    <header id="about">
                        <h2>About Me</h2>
                    </header>
                    <p>Hi I'm Michael Santos and I'm a Game Design and Development major at Rochester Institute of
                        Technology.
                        I am looking for a co-op/internship opportunity during the summer of 2020. My main programming
                        language
                        is C# and I am very comfortable using the Unity game engine. I am always open and willing to
                        learn about
                        other languages and game engines that come with working in the industry. Along with that I have
                        a strong
                        understanding of HTML and CSS, and have a solid understanding of JavaScript. Outside of making
                        video games,
                        I am generally playing them. The main game I play is Rocket League and I captain the Division 1
                        RIT Esports
                        Rocket League team when I am not working on coding related assignments and projects.
                    </p>
                </div>
            </div>

            <div id="portfolio">
                <header id="portfolioHeader">
                    <h2>Portfolio</h2>
                </header>
                <div class="portfolioGame">
                    <div id=dogScreenshot>
                        <img src="images/dogApi.png" alt="Dog API Screenshot">
                    </div>

                    <div class="innerPortfolio">
                        <header class="gameTitle">
                            <h2>Dog API</h2>
                        </header>
                        <p>Here is the dog breed finder website! I created this website with a partner using JavaScript.
                        It uses a dog api (linked below) to find specific breeds of dogs based on the search options
                        chosen. The options include choosing the breed of the dog, the sub-breed (if one exists), and the
                        number of results you would like displayed. My main roles in the project included setting up the base HTML
                        for the page, creating a color scheme and styling the majority of the page, and implementing local storage
                        to store the last search and its results on the screen.
                            The website can be reached <a href="https://people.rit.edu/mjs8837/235/project2"
                                target="_blank">here.</a>
                        </p>

                        <header class="skillTitle">
                            <h3>Skills Used</h3>
                        </header>

                        <ul class="skills">
                            <li>JavaScript - The website's functionality was made using JavaScript</li>
                            <li>HTML & CSS - The page was designed using HTML and styled with CSS</li>
                            <li>API - Made use of the dog api <a href="https://dog.ceo/dog-api/"
                                    target="_blank">here</a></li>
                        </ul>
                    </div>
                </div>

                <div class="portfolioGame">
                    <div id="asteroidsScreenshot">
                        <img src="images/spaceCrashers.png" alt="Space Crashers Screenshot">
                    </div>

                    <div class="innerPortfolio">
                        <header class="gameTitle">
                            <h2>Space Crashers</h2>
                        </header>
                        <p>Here is Space Crashers! The game where you get to fly around and shoot asteroids while also being
                            able to use abilities. I programmed this game using JavaScript and making use of the pixijs library
                            (linked below). I utilized ES6 classes to create certain objects from sprites and used those classes 
                            to give each object things such as a position, a rotation, an is alive boolean, etc. Space Crashers
                            includes two abilities as of right now. These include invincibility and the ability to regain a life.
                            The abilites are exactly what they sound like, and cost a certain amount of score to use during gameplay.
                            The game also includes different game states, which include the start screen, the controls menu, the game
                            itself, the pause menu, and the game over screen. These game states all work together to make the game function in the 
                            proper way and make sure everything resets when the game ends. Also local storage is utilized to indicate the
                            highest score made while playing on that browser. Overall, the goal of the game is to keep trying to achieve
                            a new high score, but also making sure to use your abilities to stay alive.
                            The link to the game can be found <a href="https://people.rit.edu/mjs8837/235/project3"
                                target="_blank">here.</a>
                        </p>

                        <header class="skillTitle">
                            <h3>Skills Used</h3>
                        </header>

                        <ul class="skills">
                            <li>JavaScript - The game was programmed entirely using JavaScript with the Pixijs library while utilizing
                                object oriented programming.
                            </li>
                            <li>Pixijs - A JavaScript rendering library used to render and move game sprites. The pixi
                                website
                                can be found <a href="https://www.pixijs.com/" target="_blank">here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <h1 id="contact">Contact Me</h1>

            <p id="linked">If you would like to contact me, the link to my LinkedIn is <a
                    href="https://www.linkedin.com/in/michael-santos-293984176/" target="_blank">here</a>
                or get in touch with me using the contact form below.
                <a href="ResumeMs.pdf" id="resume" target="_blank">Also click here to see my resume</a>
            </p>

            <form method="post" action="/~mjs8837/235/portfolio/index.php">

                <label>Name</label>
                <input name="name" placeholder="Type Here">

                <label>Email</label>
                <input name="email" type="email" placeholder="person@sample.com">

                <label>Message</label>
                <textarea name="message" placeholder="Type Here"></textarea>
                <label>Signature</label>
                <input name="signature" placeholder="Sincerely,">

                <label>*What is 2+2? (Anti-spam)</label>
                <input name="human" placeholder="Type Here">

                <input id="submit" name="submit" type="submit" value="Submit">

            </form>
    </div>
    </main>
</body>

</html>