
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Python Course-Module-2</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>

<body>
    <div class="container">
        <h1>Comments in Python Programming</h1>
        <p><h4>Although comments do not change the outcome of a program, they still play an important role in any programming and not just Python. Comments are the way to improve the readability of a code, by explaining what we have done in code in simple English. In this guide, we will learn about comments in Python and their types.</h4></p>

        <h2>Python comments</h2>
        <h4>
        <p>Before we go through an example of comments in Python. Let's first understand the need for comments in Python or in any programming language.</p>

        <p>A comment is text that doesn’t affect the outcome of a code, it is just a piece of text to let someone know what you have done in a program or what is being done in a block of code. This is especially helpful when someone else has written a code and you are analyzing it for bug fixing or making a change in logic, by reading a comment you can understand the purpose of code much faster than by just going through the actual code.</p>

        <p>Let's see how a comment looks like in Python.</p>
</h4>
        <pre><code># This is just a text, it won't be executed.</code></pre>
        <img class="hero-wrap" src="../../images/module2A.jpg">
        <p>Output:</p>
        <pre><code>Python comments example</code></pre>

        <h3>Types of Comments in Python</h3>
        <h5>
        <p>There are two types of comments in Python.</p>
        <ol>
            <li>Single line comment</li>
            <li>Multiple line comment</li>
        </ol>
        <br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 2</h2>
			<ul>
				<li>This quiz consists of 10 questions based on the content covered in the Python course.</li>
				<li>Each question has a 20-second time limit.</li>
				<li>Once an answer is submitted, you cannot revisit or change it.</li>
				<li>We wish you the best of luck with your quiz!</li>
			  </ul>
		<center><a href="quiz.php?module=cpp_1" >Start Quiz</a></center>
	</div></center>
</article>
<br>
</h5>

        <h4>Single line comment</h4>
        <p><h4>In Python, we use the <code>#</code> special character to start the comment. Let's take a few examples to understand the usage.</h4></p>
        <pre><code># This is just a comment. Anything written here is ignored by Python</code></pre>

        <h3>Multi-line comment:</h3>
        <p><h4></h4>To have a multi-line comment in Python, we use triple single quotes at the beginning and at the end of the comment, as shown below.<h4></p>
        <pre><code>'''
This is a 
multi-line
comment
'''</code></pre>

        <h3>Python Comments Example</h3>
        <p><h4>In this Python program, we are seeing three types of comments: single line comment, multi-line comment, and the comment that is starting in the same line after the code.<h4></p>
        <pre><code>'''
We are writing a simple program here
First print statement.
This is a multiple line comment.
'''
print("Hello Guys")

# Second print statement
print("How are You all?")

print("Welcome to BeginnersBook") # Third print statement</code></pre>

        <p>Output:</p>
        <img class="hero-wrap" src="../../images/module2B.jpg">
        <pre><code>Python single line and multiple line comments</code></pre>

        <p><code>#</code> character inside quotes</p>
        <p><h4>When <code>#</code> character is encountered inside quotes, it is not considered as comment. For example:<h4></p>
        <pre><code>print("#this is not a comment")</code></pre>
        <p>Output:</p>
        <pre><code>#this is not a comment</code></pre>

        <h2>Python Variables with examples</h2>
        <p><h4>Variables are used to store data, they take memory space based on the type of value we assigning to them. Creating variables in Python is simple, you just have write the variable name on the left side of = and the value on the right side, as shown below. You do not have to explicitly mention the type of the variable, Python infers the type based on the value we are assigning.</h4></p>

        <pre><code>num = 100      #num is of type int
str = "Chaitanya"      #str is of type string</code></pre>

        <h3>Variable name – Identifiers</h3>
        <p><h4>Variable name is known as identifier. There are few rules that you have to follow while naming the variables in Python.</h4></p>
        <ol>
            <li>The name of the variable must always start with either a letter or an underscore (_). For example: _str, str, num, _num are all valid names for the variables.</li>
            <li>The name of the variable cannot start with a number. For example: 9num is not a valid variable name.</li>
            <li>The name of the variable cannot have special characters such as %, $, # etc, they can only have alphanumeric characters and underscore (A to Z, a to z, 0-9 or _ ).</li>
            <li>Variable name is case sensitive in Python which means num and NUM are two different variables in Python.</li>
        </ol>

        <h3>Python Variable Example</h3>
        <pre><code>num = 100
str = "BeginnersBook"
print(num)
print(str)</code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/module2C.jpg">

        <h3>Python multiple assignment</h3>
        <p><h4>We can assign multiple variables in a single statement like this in Python.</h4></p>
        <pre><code>x = y = z = 99
print(x)
print(y)
print(z)</code></pre>
        <p>Output:</p>
        <pre><code>99
99
99</code></pre>
        <p>Another example of multiple assignment</p>
        <pre><code>a, b, c = 5, 6, 7
print(a)
print(b)
print(c)</code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/module2D.jpg">
        <pre><code>5
6
7</code></pre>

        <h3>Plus and concatenation operation on the variables</h3>
        <pre><code>x = 10
y = 20
print(x + y)

p = "Hello"
q = "World"
print(p + " " + q)</code

></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/module2E.jpg">

        <p><h4>However, if you try to use the + operator with variable x and p then you will get the following error.</h4></p>
        <pre><code>unsupported operand type(s) for +: 'int' and 'str'</code></pre>
    </div>
</body>

</html>
```
