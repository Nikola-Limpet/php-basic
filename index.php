<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: #2c3e50;
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        nav {
            background: #34495e;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #3498db;
        }

        section {
            padding: 60px 0;
        }

        .about {
            background: #fff;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .avatar {
            width: 150px;
            height: 150px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #fff;
            flex-shrink: 0;
        }

        .about-text {
            max-width: 600px;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .projects {
            background: #f5f5f5;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .project-card {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .project-card h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .project-card p {
            color: #666;
            margin-bottom: 15px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: #3498db;
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        .skills {
            background: #fff;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .skill-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .skill-item h4 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .skill-bar {
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-fill {
            height: 100%;
            background: #3498db;
            border-radius: 4px;
            transition: width 1s ease-out;
        }

        .contact {
            background: #2c3e50;
            color: #fff;
            text-align: center;
        }

        .contact h2 {
            color: #fff;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .contact-links a {
            display: inline-block;
            padding: 12px 30px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .contact-links a:hover {
            background: #2980b9;
        }

        footer {
            background: #1a252f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php echo "John Doe"; ?></h1>
            <p>Web Developer & Designer</p>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="avatar">JD</div>
                <div class="about-text">
                    <h2>About Me</h2>
                    <p>
                        <?php
                        $bio = "Hello! I'm a passionate web developer with a love for creating beautiful and functional websites. I enjoy turning complex problems into simple, elegant solutions. When I'm not coding, you can find me exploring new technologies or contributing to open-source projects.";
                        echo $bio;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="project-grid">
                <?php
                $projects = [
                    [
                        "title" => "E-Commerce Website",
                        "description" => "A fully responsive online store built with modern web technologies.",
                        "tags" => ["HTML", "CSS", "JavaScript", "PHP"]
                    ],
                    [
                        "title" => "Task Management App",
                        "description" => "A productivity application for organizing daily tasks and projects.",
                        "tags" => ["React", "Node.js", "MongoDB"]
                    ],
                    [
                        "title" => "Portfolio CMS",
                        "description" => "A custom content management system for creative professionals.",
                        "tags" => ["PHP", "MySQL", "jQuery"]
                    ]
                ];

                foreach ($projects as $project) {
                    echo '<div class="project-card">';
                    echo '<h3>' . $project["title"] . '</h3>';
                    echo '<p>' . $project["description"] . '</p>';
                    echo '<div class="tags">';
                    foreach ($project["tags"] as $tag) {
                        echo '<span class="tag">' . $tag . '</span>';
                    }
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2>Skills</h2>
            <div class="skills-grid">
                <?php
                $skills = [
                    ["name" => "HTML/CSS", "level" => 90],
                    ["name" => "JavaScript", "level" => 85],
                    ["name" => "PHP", "level" => 80],
                    ["name" => "MySQL", "level" => 75],
                    ["name" => "React", "level" => 70],
                    ["name" => "Git", "level" => 80]
                ];

                foreach ($skills as $skill) {
                    echo '<div class="skill-item">';
                    echo '<h4>' . $skill["name"] . '</h4>';
                    echo '<div class="skill-bar">';
                    echo '<div class="skill-fill" style="width: ' . $skill["level"] . '%"></div>';
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Get In Touch</h2>
            <p>I'm always open to discussing new projects and opportunities.</p>
            <div class="contact-links">
                <a href="mailto:hello@example.com">Email Me</a>
                <a href="#" target="_blank">GitHub</a>
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </div>
    </section>

    <!-- let try to do some magic things -->
     <section id="magic" class="magic">
        <div class="container">
            <h2>Magic Section</h2>
            <p>This section demonstrates the power of PHP to generate dynamic content.</p>
            <?php
                $currentDate = date("F j, Y");
                echo "<p>Today's date is: <strong>$currentDate</strong></p>";

                $randomNumber = rand(1, 100);
                echo "<p>Your random number for today is: <strong>$randomNumber</strong></p>";
            ?>
        </div>
    <section style="justify-content: center; margin-right: auto; align-items: center;">
     <?php 
      // let do soem static variables
      $name = "Nick";
        $age = 30;
        $profession = "Web Developer";

       echo "<p style='font-weight: bold; justify-content: center; align-items: center;'>My name is $name, I am $age years old and I work as a $profession.</p>";
    ?>
    </section>

    <!-- // hello  let do some type  -->
    <?php 
    $stringVar = "Hello, World!";
    $intVar = 42;
    $floatVar = 3.14;
    $boolVar = true;


    //  array 
    $fruits = ["Apple", "Banana", "Cherry"];

    foreach ($fruits as $fruit) {
        echo "<p>Fruit: $fruit</p>";
    }

    // associative array
    $person = [
        [
            "name" => "Alice",
            "age" => 25,
            "city" => "New York"
        ],
        [
            "name" => "Bob",
            "age" => 30,
            "city" => "Los Angeles"
        ]
    ];

    foreach ($person as $p) {
        echo "<ul>";
        echo "<li>Name: " . $p["name"] . "</li>";
        echo "<li>Age: " . $p["age"] . "</li>";
        echo "<li>City: " . $p["city"] . "</li>";
        echo "</ul>";
    }

    // Objects
    class Car {
        public $make;
        public $model;
        public function __construct($make, $model) {
            $this->make = $make;
            $this->model = $model;
        }
        public function getCarInfo() {
            return "Car: $this->make $this->model";
        }
    }

    $car = new Car("", "");
    $cars = $car->getCarInfo();
    $car->getCarInfo();

    echo "<p>" . $car->getCarInfo() . "</p>";





    function pluralize($string, $int, $float, $bool) {
        $result = "String: $string\n";
        $result .= "Integer: $int\n";
        $result .= "Float: $float\n";
        $result .= "Boolean: " . ($bool ? 'true' : 'false') . "\n";
        return $result;
    }

    echo pluralize($stringVar, $intVar, $floatVar, $boolVar);
    ?>

    <!-- global  variables-->


    <?php
    echo "<p>Accessing global variables:</p> <hr>";
    $cars = $car->getCarInfo();




    ?>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> John Doe. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
