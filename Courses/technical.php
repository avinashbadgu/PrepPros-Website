<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  dirname(__DIR__) . '/includes/head1.php';
    include  dirname(__DIR__) . '/includes/head.php';
    ?>

    <style>
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
            position: fixed;
            margin-top: 100px;
        }

        #sidebar {
            min-width: 315px;
            max-width: 315px;
            background: rgb(0 123 255 / 22%);
            color: #fff;
            transition: all 0.3s;
            height: calc(100vh - 80px); /* Adjusted height */
            overflow-y: auto; /* Enable scrolling if content exceeds sidebar height */
            position: relative;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 5px;
            background: #ce4be814; /* Updated background color */
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 20px;
            font-size: 1.5em;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #dfe1ec08;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #955db4 !important;
            color: #c97c7c !important;
        }

        #content {
            width: 100%;
            padding-bottom: 80px;
            min-height: 100vh;
            transition: all 0.3s;
            overflow-y: auto; /* Enable vertical scrolling for content */
            height: 100vh; /* Adjust this value as needed */
        }

        #content::-webkit-scrollbar {
            display: none;
        }

        #column2 {
            flex: 4;
            background-color: rgb(250, 246, 255);
            overflow: auto;
            /* Allow for scrolling if content exceeds column height */
            padding: 0px;
            width: 100%;
            height: 100%;
            /* Full height of the viewport */
            border: none;
        }

        .navigation-buttons {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center; /* Center the buttons */
        }

        .navigation-buttons button {
            margin: 0 5px;
        }

        /* Styling for the question in the sidebar */
        .question-container {
            padding: 20px;
            background-color: #ce4be814;
            color: #fff;
            border-bottom: 1px solid #47748b;
        }
    </style>
</head>

<body>
    <?php
    include  dirname(__DIR__) . '/includes/header.php';

    // Fetch questions from the database
    $sql = "SELECT * FROM coding_questions ORDER BY id";
    $result = $conn->query($sql);

    $questions = array();

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($questions, $row);
        }
    } else {
        echo "0 results";
    }

    // Handle next and previous button clicks
    if (isset($_POST['next'])) {
        if (isset($_POST['current_question_index'])) {
            $current_question_index = $_POST['current_question_index'];
            if ($current_question_index < count($questions) - 1) {
                $_POST['current_question_index'] = ++$current_question_index;
            }
        }
    }

    if (isset($_POST['previous'])) {
        if (isset($_POST['current_question_index'])) {
            $current_question_index = $_POST['current_question_index'];
            if ($current_question_index > 0) {
                $_POST['current_question_index'] = --$current_question_index;
            }
        }
    }

    // Retrieve the current question index
    $current_question_index = isset($_POST['current_question_index']) ? $_POST['current_question_index'] : 0;
    ?>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Aptitude Questions</h3>
                <hr><hr>
            </div>
            <!-- Display the current question, example, and constraints -->
            <div class="question-container">
                <h4>Question:</h4>
                <?php echo $questions[$current_question_index]['question']; ?>
                <h4>Example:</h4>
                <?php echo $questions[$current_question_index]['example']; ?>
                <h4>Constraints:</h4>
                <?php echo $questions[$current_question_index]['constraints']; ?>
            </div>
            <div class="navigation-buttons">
                <!-- Your form for next and previous buttons -->
                <form method="post" action="">
                    <input type="hidden" name="current_question_index" value="<?php echo $current_question_index; ?>">
                    <button type="submit" name="previous">Previous</button>
                    <button type="submit" name="next">Next</button>
                </form>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <iframe id="column2" name="iframe" frameborder="0" src="<?php echo $base_url; ?>ide/index.html" target="iframe"></iframe>
        </div>
    </div>

    <!-- partial -->
    <script src="js/script.js"></script>
    <script>
        function loadContent(url) {
            $('.loadhere').load(url);
        }
    </script>
    <script src="<?php echo $base_url; ?>/js/profile_pic_dd.js"></script>
</body>

</html>
