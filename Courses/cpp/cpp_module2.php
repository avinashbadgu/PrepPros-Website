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
            <span class="mt-md-3">Functions in C++ with example</span>
        </h1>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="project-wrap" style="color: black;">
                <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

            
<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"></span></span>  <span class="entry-categories"> <a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>A function is block of code which is used to perform a particular task, for example let’s say you are writing a large C++ program and in that program you want to do a particular task several number of times, like displaying value from 1 to 10, in order to do that you have to write few lines of code and you need to repeat these lines every time you display values. Another way of doing this is that you write these lines inside a function and call that function every time you want to display values. This would make you code simple, readable and reusable.</p>
<h4>Syntax of Function</h4>
<pre class="prettyprint prettyprinted" style=""><span class="pln">return_type function_name </span><span class="pun">(</span><span class="pln">parameter_list</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="com">//C++ Statements</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Let’s take a simple example to understand this concept.</p>
<h2>A simple function example</h2>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">/* This function adds two integer values
 * and returns the result
 */</span><span class="kwd">int</span><span class="pln">
sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num3 </span><span class="pun">=</span><span class="pln"> num1</span><span class="pun">+</span><span class="pln">num2</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">return</span><span class="pln"> num3</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//Calling the function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span class="lit">99</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">100</span></pre>
<p><strong>The same program can be written like this:</strong> Well, I am writing this program to let you understand an important term regarding functions, which is function declaration. Lets see the program first and then at the end of it we will discuss function declaration, definition and calling of function.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">//Function declaration</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">,</span><span class="kwd">int</span><span class="pun">);</span><span class="pln">

</span><span class="com">//Main function</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//Calling the function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span class="lit">99</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">/* Function is defined after the main method&nbsp;
 */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num3 </span><span class="pun">=</span><span class="pln"> num1</span><span class="pun">+</span><span class="pln">num2</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> num3</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Function Declaration:</strong> You have seen that I have written the same program in two ways, in the first program I didn’t have any function declaration and in the second program I have function declaration at the beginning of the program. The thing is that when you define the function before the main() function in your program then you don’t need to do function declaration but if you are writing your function after the main() function like we did in the second program then you need to declare the function first, else you will get compilation error.</p>
<p><strong>syntax of function declaration:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">return_type function_name</span><span class="pun">(</span><span class="pln">parameter_list</span><span class="pun">);</span></pre>
<p><strong>Note:</strong> While providing parameter_list you can avoid the parameter names, just like I did in the above example. I have given <code>int sum(int,int);</code> instead of <code>int sum(int num1,int num2);</code>.</p>
<p><strong>Function definition:</strong> Writing the full body of function is known as defining a function.<br>
<strong>syntax of function definition:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">return_type function_name</span><span class="pun">(</span><span class="pln">parameter_list</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="com">//Statements inside function</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Calling function:</strong> We can call the function like this:</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">function_name</span><span class="pun">(</span><span class="pln">parameters</span><span class="pun">);</span></pre>
<p>Now that we understood the <strong>working of function</strong>, lets see the types of function in C++</p>
<h2>Types of function</h2>
<p>We have two types of function in C++:<br>
<center><img style="width: 50%; height: 50%;" class="hero-wrap" src="../../images/Types-of-functions.png"></center>

<p>1) Built-in functions<br>
2) User-defined functions</p>
<h1>1) Built-in functions</h1>
<p>Built-in functions are also known as library functions. We need not to declare and define these functions as they are already written in the C++ libraries such as iostream, cmath etc. We can directly call them when we need.</p>
<h4>Example: C++ built-in function example</h4>
<p>Here we are using built-in function pow(x,y) which is x to the power y. This function is declared in <code>cmath</code> header file so we have included the file in our program using <code>#include</code> directive.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cmath&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
    </span><span class="com">/* Calling the built-in function 
     * pow(x, y) which is x to the power y
     * We are directly calling this function
     */</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="pln">pow</span><span class="pun">(</span><span class="lit">2</span><span class="pun">,</span><span class="lit">5</span><span class="pun">);</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong><br>
Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">32</span></pre>
<h1>2) User-defined functions</h1>
<p><center><img style="width: 70%; height: 50%;" class="hero-wrap" src="../../images/function.jpg"></center>
We have already seen user-defined functions, the example we have given at the beginning of this tutorial is an example of user-defined function. The functions that we declare and write in our programs are user-defined functions. Lets see another example of user-defined functions.</p>
<h4>User-defined functions</h4>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cmath&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">//Declaring the function sum</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">,</span><span class="kwd">int</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"enter first number: "</span><span class="pun">;</span><span class="pln">
   cin</span><span class="pun">&gt;&gt;</span><span class="pln"> x</span><span class="pun">;</span><span class="pln">

   cout</span><span class="pun">&lt;&lt;</span><span class="str">"enter second number: "</span><span class="pun">;</span><span class="pln">
   cin</span><span class="pun">&gt;&gt;</span><span class="pln">y</span><span class="pun">;</span><span class="pln">

   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Sum of these two :"</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="pln">x</span><span class="pun">,</span><span class="pln">y</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">//Defining the function sum</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">+</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">enter first number</span><span class="pun">:</span><span class="pln"> </span><span class="lit">22</span><span class="pln">
enter second number</span><span class="pun">:</span><span class="pln"> </span><span class="lit">19</span><span class="pln">
</span><span class="typ">Sum</span><span class="pln"> of these two </span><span class="pun">:</span><span class="lit">41</span></pre>

<br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 2</h2>
			<ul>
				<li>This quiz consists of 10 questions based on the content covered in the C++ course.</li>
				<li>Each question has a 20-second time limit.</li>
				<li>Once an answer is submitted, you cannot revisit or change it.</li>
				<li>We wish you the best of luck with your quiz!</li>
			  </ul>
		<center><a href="quiz.php?module=cpp_2">Start Quiz</a></center>
	</div></center>
</article>
<br>



<!-- YARPP List -->
<!-- C++ Recursion with example -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">C++ Recursion with example</span>
        </h1>
<p class="entry-meta"> <span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span>  <span class="entry-categories"> <a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>The process in which a function calls itself is known as recursion and the corresponding function is called the <strong>recursive function</strong>. The popular example to understand the recursion is factorial function.</p>
<p><strong>Factorial function:</strong> f(n) = n*f(n-1), base condition: if n&lt;=1 then f(n) = 1. Don’t worry we wil discuss what is base condition and why it is important.</p>
<p>In the following diagram. I have shown that how the factorial function is calling itself until the function reaches to the base condition.</p>
<p><img decoding="async" class="aligncenter size-full wp-image-6667" src="https://beginnersbook.com/wp-content/uploads/2017/08/Recursion_in_Cpp.jpg" alt="C++ recursion" width="600" height="400" srcset="https://beginnersbook.com/wp-content/uploads/2017/08/Recursion_in_Cpp.jpg 600w, https://beginnersbook.com/wp-content/uploads/2017/08/Recursion_in_Cpp-300x200.jpg 300w" sizes="(max-width: 600px) 100vw, 600px"></p>
<p>Lets solve the problem using C++ program.</p>
<h2>C++ recursion example: Factorial</h2>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">//Factorial function</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> f</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">){</span><span class="pln">
   </span><span class="com">/* This is called the base condition, it is
    * very important to specify the base condition
    * in recursion, otherwise your program will throw
    * stack overflow error.
    */</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">n </span><span class="pun">&lt;=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">)</span><span class="pln">
&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">else</span><span class="pln">&nbsp;
 &nbsp; &nbsp; &nbsp; </span><span class="kwd">return</span><span class="pln"> n</span><span class="pun">*</span><span class="pln">f</span><span class="pun">(</span><span class="pln">n</span><span class="pun">-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln">
 &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"Enter a number: "</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;cin</span><span class="pun">&gt;&gt;</span><span class="pln">num</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"Factorial of entered number: "</span><span class="pun">&lt;&lt;</span><span class="pln">f</span><span class="pun">(</span><span class="pln">num</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Enter</span><span class="pln"> a number</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
</span><span class="typ">Factorial</span><span class="pln"> of entered number</span><span class="pun">:</span><span class="pln"> </span><span class="lit">120</span></pre>
<h3>Base condition</h3>
<p>In the above program, you can see that I have provided a base condition in the recursive function. The condition is:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">n </span><span class="pun">&lt;=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">)</span><span class="pln">
&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span></pre>
<p>The purpose of recursion is to divide the problem into smaller problems till the base condition is reached. For example in the above factorial program I am solving the factorial function f(n) by calling a smaller factorial function f(n-1), this happens repeatedly until the n value reaches base condition(f(1)=1). If you do not define the base condition in the recursive function then you will get stack overflow error.</p>
<h2>Direct recursion vs indirect recursion</h2>
<p><strong>Direct recursion:</strong> When function calls itself, it is called direct recursion, the example we have seen above is a direct recursion example.</p>
<p><strong>Indirect recursion:</strong> When function calls another function and that function calls the calling function, then this is called indirect recursion. For example: function A calls function B and Function B calls function A.</p>
<h3>Indirect Recursion Example in C++</h3>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> fa</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> fb</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> fa</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">n</span><span class="pun">&lt;=</span><span class="lit">1</span><span class="pun">)</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> n</span><span class="pun">*</span><span class="pln">fb</span><span class="pun">(</span><span class="pln">n</span><span class="pun">-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> fb</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">n</span><span class="pun">&lt;=</span><span class="lit">1</span><span class="pun">)</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> n</span><span class="pun">*</span><span class="pln">fa</span><span class="pun">(</span><span class="pln">n</span><span class="pun">-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">=</span><span class="lit">5</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="pln">fa</span><span class="pun">(</span><span class="pln">num</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">120</span></pre>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-default-arguments/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-arrays/">Next ❯</a></div>

</div><footer class="entry-footer"></footer></article>

                    </div>
                </div>
            </div>
        </div>
   

</body>

</html>