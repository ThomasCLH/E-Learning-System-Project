<!DOCTYPE html>
<html>
<head>
    <title>Programming E-Learning - Courses</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .navbar {
            background-color: #f2f2f2;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        .navbar li {
            float: left;
        }
        
        .navbar li a {
            display: block;
            padding: 10px 20px;
            font-size: 18px;
            color: #333;
            text-decoration: none;
        }
        
        .navbar li a:hover {
            background-color: #ddd;
        }
        
        main {
            padding: 120px 40px;
            text-align: center;
        }
        
        h1 {
            font-size: 48px;
            margin: 0;
        }
        
        .course {
            margin-bottom: 40px;
        }
        
        .course img {
            width: 100%;
            max-width: 600px;
            height: auto;
            margin-bottom: 50px;
        }
        
        .course h2 {
            font-size: 24px;
            margin: 0;
        }
        
        .course p {
		font-size: 28px;
		line-height: 2;
		text-align: center; 
	}
    </style>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </div>

    <main>
        <h1>Available Courses</h1>

        <?php
        // Course data
        $courses = [
            [
                'image' => 'photo/php.jpeg',
                'title' => 'Course 1',
                'description' => 'PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.',
            ],
            [
                'image' => 'photo/java.png',
                'title' => 'Course 2',
                'description' => 'Java is a multi-platform, object-oriented, and network-centric language that can be used as a platform in itself. It is a fast, secure, reliable programming language for coding everything from mobile apps and enterprise software to big data applications and server-side technologies.',
            ],
            [
                'image' => 'photo/python.png',
                'title' => 'Course 3',
                'description' => 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. It was originally released in 1991. Designed to be easy as well as fun, the name "Python" is a nod to the British comedy group Monty Python.',
            ],
        ];

        // Display courses
        foreach ($courses as $course) {
            ?>
            <div class="course">
                <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>">
                <h2><?php echo $course['title']; ?></h2>
                <p><?php echo $course['description']; ?></p>
            </div>
            <?php
        }
        ?>
    </main>

  
</body>
</html>