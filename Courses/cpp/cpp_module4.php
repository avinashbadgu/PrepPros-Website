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
            <span class="mt-md-3">Pointers in C++</span>
        </h1>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="project-wrap" style="color: black;">
                <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"></span></span>  <span class="entry-categories"><a href="../Courses/cpp/cpp_module1.php" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>Pointer is a variable in C++ that holds the address of another variable. They have <a href="../cpp/cpp_module1.php">data type</a> just like variables, for example an integer type pointer can hold the address of an integer variable and an character type pointer can hold the address of char variable.</p>
<h4>Syntax of pointer</h4>
<pre class="prettyprint prettyprinted" style=""><span class="pln">data_type </span><span class="pun">*</span><span class="pln">pointer_name</span><span class="pun">;</span></pre>
<p><strong>How to declare a pointer?</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">/* This pointer p can hold the address of an integer 
 * variable, here p is a pointer and var is just a
 * simple integer variable
 */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> </span><span class="pun">*</span><span class="pln">p</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">var</span></pre>
<p><strong>Assignment</strong><br>
As I mentioned above, an integer type pointer can hold the address of another int variable. Here we have an integer variable var and pointer p holds the address of var. To assign the address of variable to pointer we use <strong>ampersand symbol</strong> (&amp;).</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">/* This is how you assign the address of another variable
 * to the pointer
 */</span><span class="pln">
p </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="kwd">var</span><span class="pun">;</span></pre>
<p><strong>How to use it?</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">// This will print the address of variable var</span><span class="pln">
cout</span><span class="pun">&lt;&lt;&amp;</span><span class="kwd">var</span><span class="pun">;</span><span class="pln">    

</span><span class="com">/* This will also print the address of variable
 * var because the pointer p holds the address of var
 */</span><span class="pln">
cout</span><span class="pun">&lt;&lt;</span><span class="pln">p</span><span class="pun">;</span><span class="pln">    

</span><span class="com">/* This will print the value of var, This is 
 * important, this is how we access the value of
 * variable through pointer
*/</span><span class="pln">
cout</span><span class="pun">&lt;&lt;*</span><span class="pln">p</span><span class="pun">;</span><span class="pln"> </span></pre>
<h2>Example of Pointer</h2>
<p>Lets take a simple example to understand what we discussed above.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//Pointer declaration</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> </span><span class="pun">*</span><span class="pln">p</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">var</span><span class="pun">=</span><span class="lit">101</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">//Assignment</span><span class="pln">
   p </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="kwd">var</span><span class="pun">;</span><span class="pln">

   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Address of var: "</span><span class="pun">&lt;&lt;&amp;</span><span class="kwd">var</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Address of var: "</span><span class="pun">&lt;&lt;</span><span class="pln">p</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Address of p: "</span><span class="pun">&lt;&lt;&amp;</span><span class="pln">p</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Value of var: "</span><span class="pun">&lt;&lt;*</span><span class="pln">p</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Address</span><span class="pln"> of </span><span class="kwd">var</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0x7fff5dfffc0c</span><span class="pln">
</span><span class="typ">Address</span><span class="pln"> of </span><span class="kwd">var</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0x7fff5dfffc0c</span><span class="pln">
</span><span class="typ">Address</span><span class="pln"> of p</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0x7fff5dfffc10</span><span class="pln">
</span><span class="typ">Value</span><span class="pln"> of </span><span class="kwd">var</span><span class="pun">:</span><span class="pln"> </span><span class="lit">101</span></pre>
<h2>Pointer and arrays</h2>
<p>While handling <a href="https://beginnersbook.com/2017/08/cpp-arrays/">arrays</a> with pointers you need to take care few things. First and very important point to note regarding arrays is that the array name alone represents the base address of array so while assigning the address of array to pointer don’t use ampersand sign(&amp;). Do it like this:<br>
<strong>Correct:</strong> Because arr represent the address of array.</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">p </span><span class="pun">=</span><span class="pln"> arr</span><span class="pun">;</span></pre>
<p><strong>Incorrect:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">p </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">arr</span><span class="pun">;</span></pre>
<h3>Example: Traversing the array using Pointers</h3>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//Pointer declaration</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> </span><span class="pun">*</span><span class="pln">p</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//Array declaration</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[]={</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="lit">6</span><span class="pun">};</span><span class="pln">
   </span><span class="com">//Assignment</span><span class="pln">
   p </span><span class="pun">=</span><span class="pln"> arr</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="lit">6</span><span class="pun">;</span><span class="pln">i</span><span class="pun">++){</span><span class="pln">
 &nbsp; &nbsp; cout</span><span class="pun">&lt;&lt;*</span><span class="pln">p</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
     </span><span class="com">//++ moves the pointer to next int position</span><span class="pln">
 &nbsp; &nbsp; p</span><span class="pun">++;</span><span class="pln">
&nbsp; &nbsp;</span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">1</span><span class="pln">
</span><span class="lit">2</span><span class="pln">
</span><span class="lit">3</span><span class="pln">
</span><span class="lit">4</span><span class="pln">
</span><span class="lit">5</span><span class="pln">
</span><span class="lit">6</span></pre>
<h2>How to increment pointer address and pointer’s value?</h2>
<p>When we are accessing the value of a variable through pointer, sometimes we just need to increment or decrement the value of variable though it or we may need to move the pointer to next int position(just like we did above while working with arrays). The <a href="https://beginnersbook.com/2017/08/cpp-operators/">++ operator</a> is used for this purpose. One of the example of ++ operator we have seen above where we traversed the array using pointer by incrementing the pointer value using ++ operator. Lets see few more cases.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">// Pointer moves to the next int position (as if it was an array)</span><span class="pln">
p</span><span class="pun">++;</span><span class="pln"> 
</span><span class="com">// Pointer moves to the next int position (as if it was an array)   </span><span class="pln">
</span><span class="pun">++</span><span class="pln">p</span><span class="pun">;</span><span class="pln">   

</span><span class="com">/* All the following three cases are same they increment the value 
 * of variable that the pointer p points.
 */</span><span class="pln">
</span><span class="pun">++*</span><span class="pln">p</span><span class="pun">;</span><span class="pln">   
</span><span class="pun">++(*</span><span class="pln">p</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">++*(</span><span class="pln">p</span><span class="pun">);</span><span class="pln"> </span></pre>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/strings-in-c/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-this-pointer/">Next ❯</a></div>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->

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
		<center><a href="quiz.php?module=cpp_4">Start Quiz</a></center>
	</div></center>
</article>
<br>
<!-- this pointer  -->

<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">C++ ‘this’ Pointer</span>
        </h1>

<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span>  <span class="entry-categories"><a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>The <strong>this</strong> pointer holds the address of current object, in simple words you can say that this <a href="https://beginnersbook.com/2017/08/cpp-pointers/">pointer</a> points to the current object of the class. Let’s take an example to understand this concept.</p>
<h2>C++ Example: this pointer</h2>
<p>Here you can see that we have two data members num and ch. In member function setMyValues() we have two local variables having same name as data members name. In such case if you want to assign the local variable value to the data members then you won’t be able to do until unless you use this pointer, because the compiler won’t know that you are referring to object’s data members unless you use this pointer. This is one of the example where you must use <strong>this</strong> pointer.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Demo</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">void</span><span class="pln"> setMyValues</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">){</span><span class="pln">
    </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">num </span><span class="pun">=</span><span class="pln">num</span><span class="pun">;</span><span class="pln">
    </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">ch</span><span class="pun">=</span><span class="pln">ch</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="kwd">void</span><span class="pln"> displayMyValues</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="pln">num</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="pln">ch</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
  </span><span class="typ">Demo</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
  obj</span><span class="pun">.</span><span class="pln">setMyValues</span><span class="pun">(</span><span class="lit">100</span><span class="pun">,</span><span class="pln"> </span><span class="str">'A'</span><span class="pun">);</span><span class="pln">
&nbsp; obj</span><span class="pun">.</span><span class="pln">displayMyValues</span><span class="pun">();</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">100</span><span class="pln">
A</span></pre>
<h2>Example 2: function chaining calls using this pointer</h2>
<p>Another example of using this pointer is to return the reference of current object so that you can chain function calls, this way you can call all the functions for the current object in one go. Another important point to note in this program is that I have incremented the value of object’s num in the second function and you can see in the output that it actually incremented the value that we have set in the first function call. This shows that the chaining is sequential and the changes made to the object’s data members retains for further chaining calls.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Demo</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="typ">Demo</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">setNum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">){</span><span class="pln">
    </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">num </span><span class="pun">=</span><span class="pln">num</span><span class="pun">;</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">*</span><span class="kwd">this</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="typ">Demo</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">setCh</span><span class="pun">(</span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">){</span><span class="pln">
    </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">num</span><span class="pun">++;</span><span class="pln">
    </span><span class="kwd">this</span><span class="pun">-&gt;</span><span class="pln">ch </span><span class="pun">=</span><span class="pln">ch</span><span class="pun">;</span><span class="pln">
    </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">*</span><span class="kwd">this</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="kwd">void</span><span class="pln"> displayMyValues</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="pln">num</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="pln">ch</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
  </span><span class="typ">Demo</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
  </span><span class="com">//Chaining calls</span><span class="pln">
  obj</span><span class="pun">.</span><span class="pln">setNum</span><span class="pun">(</span><span class="lit">100</span><span class="pun">).</span><span class="pln">setCh</span><span class="pun">(</span><span class="str">'A'</span><span class="pun">);</span><span class="pln">
  obj</span><span class="pun">.</span><span class="pln">displayMyValues</span><span class="pun">();</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">101</span><span class="pln">
A</span></pre>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-pointers/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-oops-concepts/">Next ❯</a></div>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->

</div><footer class="entry-footer"></footer></article>
                    </div>
                </div>
            </div>
        </div>
   

</body>

</html>