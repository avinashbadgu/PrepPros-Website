<!DOCTYPE html>
<html lang="en">

<head>
    <title>Java Course</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>

<body>


        <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">Why use function in Python?</span>
        </h1>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="project-wrap" style="color: black;">
                <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

                    <article class="post-8359 post type-post status-publish format-standard category-python-tutorial entry" aria-label="Python Functions" itemscope="" itemtype="https://schema.org/CreativeWork"><header class="entry-header"><h1 class="entry-title" itemprop="headline"></h1>
<p class="entry-meta"> <span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"></span></span> | <span class="entry-categories"> <a href="https://beginnersbook.com/category/python-tutorial/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p> <strong>functions in Python</strong>. A function is a block of code that contains one or more Python statements and used for performing a specific task.</p>

<p>As I mentioned above, a function is a block of code that performs a specific task. Lets discuss what we can achieve in Python by using functions in our code:<br>
1. <strong>Code re-usability</strong>: Lets say we are writing an application in Python where we need to perform a specific task in several places of our code, assume that we need to write 10 lines of code to do that specific task. It would be better to write those 10 lines of code in a function and just call the function wherever needed, because writing those 10 lines every time you perform that task is tedious, it would make your code lengthy, less-readable and increase the chances of human errors.</p>
<p>2. <strong>Improves Readability</strong>: By using functions for frequent tasks you make your code structured and readable. It would be easier for anyone to look at the code and be able to understand the flow and purpose of the code.</p>
<p>3. <strong>Avoid redundancy</strong>: When you no longer repeat the same lines of code throughout the code and use functions in places of those, you actually avoiding the redundancy that you may have created by not using functions.</p>
<h2>Syntax of functions in Python</h2>
<p><strong>Function declaration:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">def</span><span class="pln"> function_name</span><span class="pun">(</span><span class="pln">function_parameters</span><span class="pun">):</span><span class="pln">
	function_body </span><span class="com"># Set of Python statements</span><span class="pln">
        </span><span class="kwd">return</span><span class="pln"> </span><span class="com"># optional return statement</span></pre>
<p><strong>Calling the function:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com"># when function doesn't return anything</span><span class="pln">
function_name</span><span class="pun">(</span><span class="pln">parameters</span><span class="pun">)</span></pre>
<p>OR</p>
<pre class="prettyprint prettyprinted" style=""><span class="com"># when function returns something</span><span class="pln">
</span><span class="com"># variable is to store the returned value</span><span class="pln">
variable </span><span class="pun">=</span><span class="pln"> function_name</span><span class="pun">(</span><span class="pln">parameters</span><span class="pun">)</span></pre>
<h2>Python Function example</h2>
<p>Here we have a function <code>add()</code> that adds two numbers passed to it as parameters. Later after function declaration we are calling the function twice in our program to perform the addition.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">def</span><span class="pln"> add</span><span class="pun">(</span><span class="pln">num1</span><span class="pun">,</span><span class="pln"> num2</span><span class="pun">):</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> num1 </span><span class="pun">+</span><span class="pln"> num2


sum1 </span><span class="pun">=</span><span class="pln"> add</span><span class="pun">(</span><span class="lit">100</span><span class="pun">,</span><span class="pln"> </span><span class="lit">200</span><span class="pun">)</span><span class="pln">
sum2 </span><span class="pun">=</span><span class="pln"> add</span><span class="pun">(</span><span class="lit">8</span><span class="pun">,</span><span class="pln"> </span><span class="lit">9</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="pln">sum1</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="pln">sum2</span><span class="pun">)</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">300</span><span class="pln">
</span><span class="lit">17</span></pre>
<h2>Default arguments in Function</h2>
<p>Now that we know how to declare and call a function, lets see how can we use the <strong>default arguments</strong>. By using default arguments we can avoid the errors that may arise while calling a function without passing all the parameters. Lets take an example to understand this:</p>
<p>In this example we have provided the default argument for the second parameter, this default argument would be used when we do not provide the second parameter while calling this function.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com"># default argument for second parameter</span><span class="pln">
</span><span class="kwd">def</span><span class="pln"> add</span><span class="pun">(</span><span class="pln">num1</span><span class="pun">,</span><span class="pln"> num2</span><span class="pun">=</span><span class="lit">1</span><span class="pun">):</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> num1 </span><span class="pun">+</span><span class="pln"> num2


sum1 </span><span class="pun">=</span><span class="pln"> add</span><span class="pun">(</span><span class="lit">100</span><span class="pun">,</span><span class="pln"> </span><span class="lit">200</span><span class="pun">)</span><span class="pln">
sum2 </span><span class="pun">=</span><span class="pln"> add</span><span class="pun">(</span><span class="lit">8</span><span class="pun">)</span><span class="pln">  </span><span class="com"># used default argument for second param</span><span class="pln">
sum3 </span><span class="pun">=</span><span class="pln"> add</span><span class="pun">(</span><span class="lit">100</span><span class="pun">)</span><span class="pln">  </span><span class="com"># used default argument for second param</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="pln">sum1</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="pln">sum2</span><span class="pun">)</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="pln">sum3</span><span class="pun">)</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">300</span><span class="pln">
</span><span class="lit">9</span><span class="pln">
</span><span class="lit">101</span></pre>
<h2>Types of functions</h2>
<p>There are two types of functions in Python:<br>
1. <strong>Built-in functions</strong>: These functions are predefined in Python and we need not to declare these functions before calling them. We can freely invoke them as and when needed.<br>
2. <strong>User defined functions</strong>: The functions which we create in our code are user-defined functions. The add() function that we have created in above examples is a user-defined function.</p>
<p>We will cover more about these function types in the separate guides.</p>
<br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 5</h2>
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
<!-- YARPP List -->
<article class="post-8365 post type-post status-publish format-standard category-python-tutorial entry" aria-label="Python Recursion" itemscope="" itemtype="https://schema.org/CreativeWork"><header class="entry-header"><h1 class="entry-title" itemprop="headline"></h1>

<h2>Python example of Recursion</h2>
<p>In this example we are defining a <strong>user-defined function</strong> <code>factorial()</code>. This function finds the factorial of a number by calling itself repeatedly until the <strong>base case</strong>(We will discuss more about base case later, after this example) is reached.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com"># Example of recursion in Python to</span><span class="pln">
</span><span class="com"># find the factorial of a given number</span><span class="pln">

</span><span class="kwd">def</span><span class="pln"> factorial</span><span class="pun">(</span><span class="pln">num</span><span class="pun">):</span><span class="pln">
    </span><span class="str">"""This function calls itself to find
    the factorial of a number"""</span><span class="pln">

    </span><span class="kwd">if</span><span class="pln"> num </span><span class="pun">==</span><span class="pln"> </span><span class="lit">1</span><span class="pun">:</span><span class="pln">
        </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
    </span><span class="kwd">else</span><span class="pun">:</span><span class="pln">
        </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num </span><span class="pun">*</span><span class="pln"> factorial</span><span class="pun">(</span><span class="pln">num </span><span class="pun">-</span><span class="pln"> </span><span class="lit">1</span><span class="pun">))</span><span class="pln">


num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
</span><span class="kwd">print</span><span class="pun">(</span><span class="str">"Factorial of"</span><span class="pun">,</span><span class="pln"> num</span><span class="pun">,</span><span class="pln"> </span><span class="str">"is: "</span><span class="pun">,</span><span class="pln"> factorial</span><span class="pun">(</span><span class="pln">num</span><span class="pun">))</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Factorial</span><span class="pln"> of </span><span class="lit">5</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln">  </span><span class="lit">120</span></pre>
<p>Lets see what happens in the above example:</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">factorial</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> returns </span><span class="lit">5</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> factorial</span><span class="pun">(</span><span class="lit">5</span><span class="pun">-</span><span class="lit">1</span><span class="pun">)</span><span class="pln"> 
    i</span><span class="pun">.</span><span class="pln">e</span><span class="pun">.</span><span class="pln"> </span><span class="lit">5</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> factorial</span><span class="pun">(</span><span class="lit">4</span><span class="pun">)</span><span class="pln">
               </span><span class="pun">|</span><span class="pln">__5</span><span class="pun">*</span><span class="lit">4</span><span class="pun">*</span><span class="pln">factorial</span><span class="pun">(</span><span class="lit">3</span><span class="pun">)</span><span class="pln">
                      </span><span class="pun">|</span><span class="pln">__5</span><span class="pun">*</span><span class="lit">4</span><span class="pun">*</span><span class="lit">3</span><span class="pun">*</span><span class="pln">factorial</span><span class="pun">(</span><span class="lit">2</span><span class="pun">)</span><span class="pln">
                           </span><span class="pun">|</span><span class="pln">__5</span><span class="pun">*</span><span class="lit">4</span><span class="pun">*</span><span class="lit">3</span><span class="pun">*</span><span class="lit">2</span><span class="pun">*</span><span class="pln">factorial</span><span class="pun">(</span><span class="lit">1</span><span class="pun">)</span></pre>
<p><strong>Note:</strong> factorial(1) is a base case for which we already know the value of factorial. The base case is defined in the body of function with this code:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">if</span><span class="pln"> num </span><span class="pun">==</span><span class="pln"> </span><span class="lit">1</span><span class="pun">:</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span></pre>
<h2>What is a base case in recursion</h2>
<p>When working with recursion, we should define a base case for which we already know the answer. In the above example we are finding factorial of an integer number and we already know that the factorial of 1 is 1 so this is our base case.</p>
<p>Each <strong>successive recursive call</strong> to the function should bring it closer to the base case, which is exactly what we are doing in above example.</p>
<p>We use base case in recursive function so that the function stops calling itself when the base case is reached. Without the base case, the function would keep calling itself indefinitely.</p>
<h2>Why use recursion in programming?</h2>
<p>We use recursion to break a big problem in small problems and those small problems into further smaller problems and so on. At the end the solutions of all the smaller subproblems are collectively helps in finding the solution of the big main problem.</p>
<h3>Advantages of recursion</h3>
<p>Recursion makes our program:<br>
1. Easier to write.<br>
2. Readable – Code is easier to read and understand.<br>
3. Reduce the lines of code – It takes less lines of code to solve a problem using recursion.</p>
<h3>Disadvantages of recursion</h3>
<p>1. Not all problems can be solved using recursion.<br>
2. If you don’t define the base case then the code would run indefinitely.<br>
3. Debugging is difficult in recursive functions as the function is calling itself in a loop and it is hard to understand which call is causing the issue.<br>
4. Memory overhead – Call to the recursive function is not memory efficient.</p>


</div>


                        </div>
                </div>
            </div>
        </div>
   

</body>

</html>