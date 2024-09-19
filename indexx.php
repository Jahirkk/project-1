<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies in Our Pocket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&family=Sofadi+One&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #09a3b1;
        }

        /* Navbar */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: rgb(10, 236, 236);
            font-size: 1.7rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1rem;
            margin-right: 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #00d9ff;
        }

        /* Hero Section */
        .hero-section {
            background: url('https://c7.alamy.com/comp/2E3KME1/hobby-typography-banner-template-people-enjoying-their-hobbies-flat-vector-illustration-2E3KME1.jpg') no-repeat center center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(66, 3, 3);
            text-align: center;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            padding: 10px 20px;
            border: none;
            font-size: 1.2rem;
        }

        .btn-secondary {
            background-color: #28a745;
            padding: 10px 20px;
            border: none;
            font-size: 1.2rem;
        }

        /* About Section */
        .about-section {
            padding: 70px 0;
            background-color: #fff;
            text-align: center;
        }

        .about-section h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .about-section p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Recommended Courses Section */
        .recommended-courses {
            padding: 50px 0;
            background-color: #f5f5f5;
        }

        .recommended-courses h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }

        .btn-course {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-course:hover {
            background-color: #0056b3;
            color: white;
        }

        /* Chat Button */
        .chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Chat Popup Box */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            border: 1px solid #007bff;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .chat-popup-header {
            font-family: "Sofadi One", system-ui;
            font-size: 2em;
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-weight: bold;
        }

        .chat-popup-body {
            padding: 10px;
            height: 200px;
            overflow-y: auto;
        }

        .chat-popup-footer {
            padding: 10px;
            border-top: 1px solid #ddd;
            display: flex;
        }

        .chat-popup-footer input {
            width: 80%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .chat-popup-footer button {
            width: 20%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 5px;
        }

        /* Social Icons */
        .social-icons {
            margin-bottom: 10px;
            text-align: center;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #00d9ff;
            /* Change color on hover */
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hobbies in Our Pocket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex" action="indexx.php" method="GET">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search Results Section -->
    <!-- <div class="container mt-5">
        
    </div> -->

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Welcome to Hobbies in Our Pocket</h1>
            <p>Learn and explore new hobbies for free</p>
            <a href="#" class="btn btn-primary"> Learn More</a>
            <a href="form.php" class="btn btn-secondary">Sign Up</a>

        </div>
    </div>


    <!-- Chat Button -->
    <button class="chat-btn" onclick="toggleChat()">💬</button>

    <!-- Chat Popup -->
    <div class="chat-popup" id="chatPopup">
        <div class="chat-popup-header"><b>M i l i</b></div>
        <div class="chat-popup-body" id="chatBody">
            <!-- Messages will appear here -->
            <p>Welcome to Live Chat! How can we help you?</p>
        </div>
        <div class="chat-popup-footer">
            <input type="text" id="chatMessage" placeholder="Type a message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function toggleChat() {
            var chatPopup = document.getElementById("chatPopup");
            if (chatPopup.style.display === "none" || chatPopup.style.display === "") {
                chatPopup.style.display = "block";
            } else {
                chatPopup.style.display = "none";
            }
        }

        // function reply(chatMessage) {
        //     chatMessage = chatMessage.toLowerCase();
        //     if (chatMessage == "hi") {
        //         return "Welcome to our application, how can i help you?";
        //     } else if(chatMessage == "suggest some hobbies"){
        //         return "can you be specific about yourself?";
        //     } else if(chatMessage == "i love dancing and drawing"){
        //         return "Currently we have more than 1000 courses on our platform regarding dancing and drawing, here are some links which you can check out";
        //     }
        //     return null;
        // }

        function reply(chatMessage) {
            chatMessage = chatMessage.toLowerCase();

            // Regex patterns for different question types
            const hiPattern = /\bhi\b/;
            const suggestHobbiesPattern = /\bsuggest.*hobbies\b/;
            const dancingDrawingPattern = /\blove.*dancing.*drawing\b/;
            const questionPattern = /\b(what|how|why|when|who)\b.*\?/;

            // Matching with regular expressions
            if (hiPattern.test(chatMessage)) {
                return "Welcome to our application, how can I help you?";
            } else if (suggestHobbiesPattern.test(chatMessage)) {
                return "Can you be specific about yourself?";
            } else if (dancingDrawingPattern.test(chatMessage)) {
                return "Currently we have more than 1000 courses on our platform regarding dancing and drawing, here are some links which you can check out";
            } else if (questionPattern.test(chatMessage)) {
                return "It seems like you're asking a question. Could you provide more details?";
            }

            return null;
        }


        function sendMessage() {
            var chatBody = document.getElementById("chatBody");
            var chatMessage = document.getElementById("chatMessage");
            var message = chatMessage.value.trim();
            var actualMsg = message;

            if (message !== "") {
                var newMessageReply = document.createElement("p");
                var newMessageQuery = document.createElement("p");
                if (reply(message) != null) {
                    message = reply(message);
                }
                newMessageQuery.textContent = "You: " + actualMsg;
                chatBody.appendChild(newMessageQuery);
                newMessageReply.textContent = "Mili: " + message;
                chatBody.appendChild(newMessageReply);
                chatMessage.value = ""; // Clear the input field

                // Scroll to the bottom of the chat
                chatBody.scrollTop = chatBody.scrollHeight;
            }
        }
    </script>

    <!-- Recommended Courses Section -->
    <div class="recommended-courses">
        <div class="container">
            <h2>Recommended Hobby Courses</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/209948/pexels-photo-209948.jpeg?auto=compress&cs=tinysrgb&w=600"
                            class="card-img-top" alt="Course 1">
                        <div class="card-body">
                            <h5 class="card-title">Course 1: Dancing</h5>
                            <p class="card-text">Dance is a language beyond words, expressing that for which we have no
                                words.</p>
                            <a href="#" class="btn-course">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://naturephotographeroftheyear.com/wp-content/uploads/2021/07/Webp.net-resizeimage-scaled.jpg"
                            class="card-img-top" alt="Course 2">
                        <div class="card-body">
                            <h5 class="card-title">Course 2: Photography Basics</h5>
                            <p class="card-text">Capture beautiful moments and hone your photography skills in this
                                beginner course.</p>
                            <a href="#" class="btn-course">Enroll Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/woman-chef-cooking-vegetables-pan_1303-22287.jpg?w=1380&t=st=1726501287~exp=1726501887~hmac=6fc66eee5f98ed5d6eb4ee50656803b7c5207787b9f9236c50e189ab434f300f"
                            class="card-img-top" alt="Course 3">
                        <div class="card-body">
                            <h5 class="card-title">Course 3: Cooking for Beginners</h5>
                            <p class="card-text">Learn the essentials of cooking with step-by-step instructions and
                                delicious recipes.</p>
                            <a href="#" class="btn-course">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-section">
        <div class="container">
            <h2>About Hobbies in Our Pocket</h2>
            <p>
                "Hobbies in Our Pocket" is a platform that offers free tutorials and resources for people who want to
                learn new hobbies. From coding to crafting, we provide valuable content to help you explore your
                passions and discover something new.
            </p>
        </div>


        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="social-icons">
                    <a href="https://www.facebook.com/jahir700k/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <p>&copy; 2024 Hobbies in Our Pocket. All Rights Reserved.</p>
            </div>
        </footer>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>