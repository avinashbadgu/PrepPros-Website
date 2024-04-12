<!DOCTYPE html>
<html lang="en">

<head>
    <title>Python If Statement explained with examples</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>

<body>
    <div class="container">
        <h1>Python If Statement explained with examples</h1>
        <h4>If statements are control flow statements which helps us to run a particular code only when a certain condition is satisfied. For example, you want to print a message on the screen only when a condition is true then you can use if statement to accomplish this in programming. In this guide, we will learn how to use if statements in Python programming with the help of examples.</h4>

        <h4>There are other control flow statements available in Python such as if..else, if..elif..else, nested if etc. However in this guide, we will only cover the if statements, other control statements are covered in separate tutorials.</h4>

        <h2>Syntax of If statement in Python</h2>
        <h4>The syntax of if statement in Python is pretty simple.</h4>
        <pre><code>if condition:
    block_of_code
        </code></pre>
        <h4><strong>If statement flow diagram:</strong></h4>
        <img class="hero-wrap" src="../../images/if_satements.jpg" alt="If statement flow diagram">

        <h2>Python – If statement Example</h2>
        <pre><code>flag = True
if flag==True:
    print("Welcome")
    print("To")
    print("BeginnersBook.com")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>Welcome
To
BeginnersBook.com
        </code></pre>

        <h4>In the above example we are checking the value of flag variable and if the value is True then we are executing few print statements. The important point to note here is that even if we do not compare the value of flag with the ‘True’ and simply put ‘flag’ in place of condition, the code would run just fine so the better way to write the above code would be:</h4>
        <pre><code>flag = True
if flag:
    print("Welcome")
    print("To")
    print("BeginnersBook.com")
        </code></pre>

        <h4>By seeing this we can understand how if statement works. The output of the condition would either be true or false. If the outcome of the condition is true then the statements inside the body of ‘if’ executes, however if the outcome of the condition is false then the statements inside ‘if’ are skipped.</h4>

        <h2>Python if example without boolean variables</h2>
        <h4>In the above examples, we have used the boolean variables in place of conditions. However, we can use any variables in our conditions. For example:</h4>
        <pre><code>num = 100
if num < 200:
    print("num is less than 200")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>num is less than 200
        </code></pre>
    </div>
    <div class="container">
        <h1>Python If else Statement Example</h1>
        <h4>In the last tutorial we learned how to use if statements in Python. In this guide, we will learn another control statement ‘if..else’.</h4>

        <h4>We use if statements when we need to execute a certain block of Python code when a particular condition is true. If..else statements are like extension of ‘if’ statements, with the help of if..else we can execute certain statements if condition is true and a different set of statements if condition is false. For example, you want to print ‘even number’ if the number is even and ‘odd number’ if the number is not even, we can accomplish this with the help of if..else statement.</h4>

        <h2>Python – Syntax of if..else statement</h2>
        <pre><code>if condition:
    block_of_code_1
else:
    block_of_code_2
        </code></pre>
        <h4><strong>block_of_code_1:</strong> This would execute if the given condition is true</h4>
        <h4><strong>block_of_code_2:</strong> This would execute if the given condition is false</h4>

        <h4><strong>If..else flow control:</strong></h4>
        <img class="hero-wrap" src="../../images/If_else_flow_diagram-1.jpg " alt="If else flow diagram">

        <h2>If-else example in Python</h2>
        <pre><code>num = 22
if num % 2 == 0:
    print("Even Number")
else:
    print("Odd Number")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>Even Number
        </code></pre>
    </div>
    <div class="container">
        <h1>Python If elif else Statement Example</h1>
        <h4>In the previous tutorials we have seen if statement and if..else statement. In this tutorial, we will learn if elif else statement in Python. The if..elif..else statement is used when we need to check multiple conditions.</h4>

        <h2>Syntax of if elif else statement in Python</h2>
        <pre><code>if condition:
    block_of_code_1
elif condition_2:
    block_of_code_2
elif condition_3:
    block_of_code_3
...
else:
    block_of_code_n
        </code></pre>
        <h4><strong>Notes:</strong></h4>
        <ol>
            <li>There can be multiple ‘elif’ blocks, however there is only ‘else’ block is allowed.</li>
            <li>Out of all these blocks only one block_of_code gets executed. If the condition is true then the code inside ‘if’ gets executed, if condition is false then the next condition(associated with elif) is evaluated and so on. If none of the conditions is true then the code inside ‘else’ gets executed.</li>
        </ol>

        <h2>Python – if..elif..else statement example</h2>
        <h4>In this example, we are checking multiple conditions using if..elif..else statement.</h4>
        <pre><code>num = 1122
if 9 < num < 99:
    print("Two digit number")
elif 99 < num < 999:
    print("Three digit number")
elif 999 < num < 9999:
    print("Four digit number")
else:
    print("number is <= 9 or >= 9999")
        </code></pre>
    </div>
    <div class="container">
        <h1>Python Nested If else Statement</h1>
        <h4>In the previous tutorials, we have covered the if statement, if..else statement and if..elif..else statement. In this tutorial, we will learn the nesting of these control statements.</h4>

        <h4>Nested if..else statement example</h4>
        <h4>Here we have a if statement inside another if..else statement block. Nesting control statements makes us to check multiple conditions.</h4>
        <pre><code>num = -99
if num > 0:
    print("Positive Number")
else:
    print("Negative Number")
    #nested if
    if -99 &lt;= num:
        print("Two digit Negative Number")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>Negative Number
Two digit Negative Number
        </code></pre>
    </div>
    <div class="container">
        <h1>Python For Loop Explained with Examples</h1>
        <h4>A loop is a used for iterating over a set of statements repeatedly. In Python we have three types of loops for, while and do-while. In this guide, we will learn for loop and the other two loops are covered in the separate tutorials.</h4>

        <h2>Syntax of For loop in Python</h2>
        <pre><code>for &lt;variable&gt; in &lt;sequence&gt;:  
   # body_of_loop that has set of statements
   # which requires repeated execution
        </code></pre>
        <h4>Here &lt;variable&gt; is a variable that is used for iterating over a &lt;sequence&gt;. On every iteration it takes the next value from &lt;sequence&gt; until the end of sequence is reached.</h4>

        <h2>Python – For loop example</h2>
        <h4>The following example shows the use of for loop to iterate over a list of numbers. In the body of for loop we are calculating the square of each number present in list and displaying the same.</h4>
        <pre><code># Program to print squares of all numbers present in a list

# List of integer numbers
numbers = [1, 2, 4, 6, 11, 20]

# variable to store the square of each num temporary
sq = 0

# iterating over the given list
for val in numbers:
    # calculating square of each number
    sq = val * val
    # displaying the squares
    print(sq)
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>1
4
16
36
121
400
        </code></pre>

        <h2>Function range()</h2>
        <h4>In the above example, we have iterated over a list using for loop. However we can also use a range() function in for loop to iterate over numbers defined by range().</h4>
        <h4>range(n): generates a set of whole numbers starting from 0 to (n-1).</h4>
        <h4>range(start, stop): generates a set of whole numbers starting from start to stop-1.</h4>
        <h4>range(start, stop, step_size): generates numbers having the difference of step_size.</h4>
        <h4>Lets use the range() function in for loop:</h4>
        <pre><code># Program to print the sum of first 5 natural numbers

# variable to store the sum
sum = 0

# iterating over natural numbers using range()
for val in range(1, 6):
    # calculating sum
    sum = sum + val

# displaying sum of first 5 natural numbers
print(sum)
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>15
        </code></pre>

        <h2>For loop with else block</h2>
        <h4>Unlike Java, In Python we can have an optional ‘else’ block associated with the loop. The ‘else’ block executes only when the loop has completed all the iterations. Lets take an example:</h4>
        <pre><code>for val in range(5):
    print(val)
else:
    print("The loop has completed execution")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>0
1
2
3
4
The loop has completed execution
        </code></pre>

        <h2>Nested For loop in Python</h2>
        <h4>When a for loop is present inside another for loop then it is called a nested for loop. Lets take an example of nested for loop.</h4>
        <pre><code>for num1 in range(3):
    for num2 in range(10, 14):
        print(num1, ",", num2)
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>0 , 10
0 , 11
0 , 12
0 , 13
1 , 10
1 , 11
1 , 12
1 , 13
2 , 10
2 , 11
2 , 12
2 , 13
        </code></pre>
    </div>
    <br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 4</h2>
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
    <div class="container">
        <h1>Python While Loop</h1>
        <h4>While loop is used to iterate over a block of code repeatedly until a given condition returns false. In the last tutorial, we have seen for loop in Python, which is also used for the same purpose. The main difference is that we use while loop when we are not certain of the number of times the loop requires execution, on the other hand when we exactly know how many times we need to run the loop, we use for loop.</h4>

        <h2>Syntax of while loop</h2>
        <pre><code>while condition:
    #body_of_while
        </code></pre>
        <h4>The body_of_while is a set of Python statements which requires repeated execution. These set of statements execute repeatedly until the given condition returns false.</h4>

        <h2>Python while loop example</h2>
        <h4>The following example shows the usage of while loop in Python.</h4>
        <pre><code># Program to print first 5 natural numbers using while loop

# variable to keep track of natural numbers
num = 1

# iterating over natural numbers using while loop
while num &lt;= 5:
    print(num)
    # incrementing the value of num
    num = num + 1
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>1
2
3
4
5
        </code></pre>

        <h4>Here the loop starts with 1 and the value of num keeps on incrementing by 1 on each iteration. When the value of num becomes 6 the condition num &lt;= 5 becomes false and the loop terminates.</h4>

        <h2>While loop with else block</h2>
        <h4>Similar to the for loop, while loop also can have an optional ‘else’ block. The ‘else’ block executes only when the loop condition returns false. Lets take an example:</h4>
        <pre><code>num = 1
while num &lt;= 5:
    print(num)
    num = num + 1
else:
    print("The loop has completed execution")
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>1
2
3
4
5
The loop has completed execution
        </code></pre>
    </div>
    <div class="container">
        <h1>Python Break Statement Example</h1>
        <h4>Break statement is used to exit from the loop prematurely. The break statement in Python terminates the current loop and resumes execution at the next statement. The break statement can be used in both while and for loops.</h4>

        <h2>Syntax of Break statement in Python</h2>
        <pre><code>break
        <img class="hero-wrap" src="../../images/break_statement.jpg " alt="If else flow diagram">
        </code></pre>
        <h4>Here break is the Python keyword to exit from loop.</h4>

        <h2>Python Break Statement Example</h2>
        <h4>The following example shows the use of break statement in while loop.</h4>
        <pre><code># Program to demonstrate the use of break statement
i = 1
while i &lt;= 5:
    print(i)
    if i == 3:
        break
    i = i + 1
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>1
2
3
        </code></pre>
        <h4>Here we have initialized a variable ‘i’ to 1 and then entered into while loop. Inside while loop we are printing the value of ‘i’ and checking if the value of ‘i’ is equal to 3, if it’s true then we are using break statement to exit from loop. Hence only numbers 1, 2, 3 are printed on the console.</h4>

        <h2>Python Continue Statement Example</h2>
        <h4>Continue statement is used to skip the current iteration of the loop and the control flow of the program goes to the next iteration of the loop. The continue statement can be used in both while and for loops.</h4>

        <h2>Syntax of Continue statement in Python</h2>
        <pre><code>continue
        <img class="hero-wrap" src="../../images/Continue_Statement.jpg " alt="If else flow diagram">
        </code></pre>
        <h4>Here continue is the Python keyword to skip the current iteration of loop.</h4>

        <h2>Python Continue Statement Example</h2>
        <h4>The following example shows the use of continue statement in while loop.</h4>
        <pre><code># Program to demonstrate the use of continue statement
i = 0
while i &lt;= 5:
    i = i + 1
    if i == 3:
        continue
    print(i)
        </code></pre>
        <h4><strong>Output:</strong></h4>
        <pre><code>1
2
4
5
6
        </code></pre>
        <h4>Here we have initialized a variable ‘i’ to 0 and then entered into while loop. Inside while loop, we are incrementing the value of ‘i’ by 1 and checking if the value of ‘i’ is equal to 3, if it’s true then we are using continue statement to skip the current iteration. Hence the number 3 is skipped in the output.</h4>
    </div>
    <div class="container">
        <h1>Python Pass Statement Example</h1>
        <h4>Pass statement is a null operation; nothing happens when it executes. The pass statement is used as a placeholder for future code. When the pass statement is executed, nothing happens, but you avoid getting an error when empty code is not allowed. Empty code is not allowed in loops, function definitions, class definitions, or in if statements.</h4>

        <h2>Syntax of Pass statement in Python</h2>
        <pre><code>pass
        </code></pre>
        <h4>Here pass is the Python keyword.</h4>

        <h2>Python Pass Statement Example</h2>
        <h4>The following example shows the use of pass statement.</h4>
        <pre><code># Program to demonstrate the use of pass statement
num = 3
if num > 0:
    pass
else:
    print("The number is negative")
        </code></pre>
        <h4>Here we have a variable num and we are checking whether the number is greater than 0 or not. If the number is greater than 0 then we are using pass statement, it means we are not doing anything. However if the number is not greater than 0 then we are printing the number is negative.</h4>
    </div>
</body>

</html>
