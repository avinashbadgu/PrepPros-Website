<!DOCTYPE html>
<html lang="en">

<head>
    <title>Python Data Types</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>

<body>
    <div class="container">
        <h1>Python Data Types</h1>
        <h3>
        <p><strong>Data type</strong> defines the type of the variable, whether it is an integer variable, string variable, tuple, dictionary, list etc. In this guide, you will learn about the data types and their usage in Python.</p>
        <h3>
        <h2>Python data types</h2>
        <h4>
        <p>Python data types are divided into two categories, mutable data types and immutable data types.</p>
        </h4>
        <h3>Immutable Data types in Python</h3>
        <ol>
            <li>Numeric</li>
            <li>String</li>
            <li>Tuple</li>
        </ol>

        <h3>Mutable Data types in Python</h3>
        <ol>
            <li>List</li>
            <li>Dictionary</li>
            <li>Set</li>
        </ol>

        <h3>1. Numeric Data Type in Python</h3>
        <p><strong>Integer</strong> – In Python 3, there is no upper bound on the integer number which means we can have the value as large as our system memory allows.</p>
        <pre><code># Integer number
num = 100
print(num)
print("Data Type of variable num is", type(num))
        </code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/data1.jpg">

        <h3>Long</h3>
        <h4>
        <p>Long data type is deprecated in Python 3 because there is no need for it, since the integer has no upper limit, there is no point in having a data type that allows larger upper limit than integers.</p>
</h4>
        <h3>Float</h3>
        <h4>
        <p>Values with decimal points are the float values, there is no need to specify the data type in Python. It is automatically inferred based on the value we are assigning to a variable. For example, here fnum is a float data type.</p>
        <h4>
        <pre><code># float number
fnum = 34.45
print(fnum)
print("Data Type of variable fnum is", type(fnum))
        </code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/data2.jpg">

        <h3>Complex Number</h3>
        <h4>
        <p>Numbers with real and imaginary parts are known as complex numbers. Unlike other programming languages such as Java, Python is able to identify these complex numbers with the values. In the following example, when we print the type of the variable cnum, it prints as complex number.</p>
        </h4>
        <pre><code># complex number
cnum = 3 + 4j
print(cnum)
print("Data Type of variable cnum is", type(cnum))
        </code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/data3.jpg">

        <h3>Binary, Octal and Hexadecimal numbers</h3>
        <h4>
        <p>In Python, we can print the decimal equivalent of binary, octal, and hexadecimal numbers using the prefixes.</p>
        </h4>
        <pre><code># integer equivalent of binary number 101
num = 0b101
print(num)

# integer equivalent of Octal number 32
num2 = 0o32
print(num2)

# integer equivalent of Hexadecimal number FF
num3 = 0xFF
print(num3)
        </code></pre>
        <p>Output:</p>
        <img class="hero-wrap" src="../../images/data4.jpg">

        <h3>2. Python Data Type – String</h3>
        <h4>
<p>String is a sequence of characters in Python. The data type of String in Python is called “str”.</p>
</h4>
<pre><code># Python program to print strings and type

s = "This is a String"
s2 = 'This is also a String'

# displaying string s and its type
print(s)
print(type(s))

# displaying string s2 and its type
print(s2)
print(type(s2))
</code></pre>
<p>Output:</p>
<img class="hero-wrap" src="../../images/data5.jpg">
<br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 3</h2>
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
<h3>3. Python Data Type – Tuple</h3>
<h4>
<p>Tuple is an immutable data type in Python, which means it cannot be changed. It is an ordered collection of elements enclosed in round brackets and separated by commas.</p>
</h4>
<pre><code># tuple of integers
t1 = (1, 2, 3, 4, 5)
# prints entire tuple
print(t1)

# tuple of strings
t2 = ("hi", "hello", "bye")
# loop through tuple elements
for s in t2:
    print(s)

# tuple of mixed type elements
t3 = (2, "Lucy", 45, "Steve")
'''
Print a specific element
indexes start with zero
'''
print(t3[2])
</code></pre>
<p>Output:</p>
<img class="hero-wrap" src="../../images/data6.jpg">

<h3>4. Python Data Type – List</h3>
<h4>
<p>List is similar to a tuple, it is also an ordered collection of elements; however, a list is a mutable data type which means it can be changed, unlike a tuple which is an immutable data type.</p>
</h4>
<pre><code># list of integers
lis1 = [1, 2, 3, 4, 5]
# prints entire list
print(lis1)

# list of strings
lis2 = ["Apple", "Orange", "Banana"]
# loop through list elements
for x in lis2:
    print (x)

# List of mixed type elements
lis3 = [20, "Chaitanya", 15, "BeginnersBook"]
'''
Print a specific element in list
indexes start with zero
'''
print("Element at index 3 is:",lis3[3])
</code></pre>
<p>Output:</p>
<img class="hero-wrap" src="../../images/data7.jpg">

<h3>5. Python Data Type – Dictionary</h3>
<h4?>
<p>Dictionary is a collection of key and value pairs. A dictionary doesn’t allow duplicate keys but the values can be duplicate. It is an ordered, indexed, and mutable collection of elements.</p>
</h4>
<pre><code># Dictionary example

dict = {1:"Chaitanya","lastname":"Singh", "age":31}

# prints the value where key value is 1
print(dict[1])
# prints the value where key value is "lastname"
print(dict["lastname"])
# prints the value where key value is "age"
print(dict["age"])
</code></pre>
<p>Output:</p>
<img class="hero-wrap" src="../../images/data8.jpg">

<h3>6. Python Data Type – Set</h3>
<h4>
<p>A set is an unordered and unindexed collection of items. This means when we print the elements of a set they will appear in random order, and we cannot access the elements of a set based on indexes because it is unindexed.</p>
</h4>
<pre><code># Set Example
myset = {"hi", 2, "bye", "Hello World"}

# loop through set
for a in myset:
    print(a)

# checking whether 2 exists in myset
print(2 in myset)

# adding a new element
myset.add(99)
print(myset)
</code></pre>
<p>Output:</p>
<img class="hero-wrap" src="../../images/data9.jpg">


    </div>
</body>

</html>
