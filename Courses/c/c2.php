<!DOCTYPE html>
<html lang="en">

<head>
    <title>Java Course</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>


        <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">Variables in C</span>
        </h1>
        <p class="entry-meta"> <span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"></span></span>  <span class="entry-categories"><a href="https://beginnersbook.com/category/c-programming/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p><strong>A variable represents a memory location that stores the data.</strong> For example: an int variable num has a value 10 (int num = 10), here the variable name is <code>"num"</code> that represents the location in the memory where this value <code>10</code> is stored. As the name suggests, the <strong>value of a variable can be changed any number of times</strong>.</p>
<h2>Syntax – Declaring a variable</h2>
<pre class="prettyprint prettyprinted" style=""><code><span class="pln">data_type variable name</span><span class="pun">;</span><span class="pln"> </span></code></pre>
<p><strong>For example:</strong></p>
<pre class="prettyprint prettyprinted" style=""><code><span class="com">//a variable num of int type</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln"> 

</span><span class="com">//two variable ch1 and ch2 of char type</span><span class="pln">
</span><span class="kwd">char</span><span class="pln"> ch1</span><span class="pun">,</span><span class="pln"> ch2</span><span class="pun">;</span><span class="pln"> 

</span><span class="com">//three variable x, y and z of float type where y has been</span><span class="pln">
</span><span class="com">// initialized with a value and other variables x &amp; z are </span><span class="pln">
</span><span class="com">// un-initialized.</span><span class="pln">
</span><span class="typ">Float</span><span class="pln"> x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">=</span><span class="lit">10.5</span><span class="pun">,</span><span class="pln"> z</span><span class="pun">;</span></code></pre>
<h2>Example: Variables in C</h2>
<pre class="prettyprint prettyprinted" style=""><code><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">50</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">char</span><span class="pln"> ch </span><span class="pun">=</span><span class="pln"> </span><span class="str">'A'</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">float</span><span class="pln"> x </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10.5</span><span class="pun">,</span><span class="pln"> y </span><span class="pun">=</span><span class="pln"> </span><span class="lit">13.5</span><span class="pun">;</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"Variable 'ch' value: %c\n"</span><span class="pun">,</span><span class="pln"> ch</span><span class="pun">);</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"Variable num1 and num2 values: %d\t%d\n"</span><span class="pun">,</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> num2</span><span class="pun">);</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"Variable x and y values: %f\t%f\n"</span><span class="pun">,</span><span class="pln"> x</span><span class="pun">,</span><span class="pln"> y</span><span class="pun">);</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></code></pre>
<p><strong>Output:</strong><br>
<img decoding="async" class="aligncenter size-full wp-image-11736" src="https://beginnersbook.com/wp-content/uploads/2022/07/C-variables.jpg" alt="Variables in C" width="706" height="238" srcset="https://beginnersbook.com/wp-content/uploads/2022/07/C-variables.jpg 706w, https://beginnersbook.com/wp-content/uploads/2022/07/C-variables-300x101.jpg 300w" sizes="(max-width: 706px) 100vw, 706px"></p>
<h2>Rules for defining a variable</h2>
<p>1. A variable name can has alphabets, digits and underscore.<br>
2. <strong>Variable name cannot start with the digit</strong>, it can start with alphabets and underscore only. For example, <code>_num</code> and <code>num_1</code> are valid variable names, however <code>9num</code> &amp; <code>99_num</code> are not valid variable names.<br>
3. Variable name <strong>cannot contain whitespaces</strong>. For example: <code>num 1</code>, <code>num 2</code>, <code>my var</code> are not valid names as they contain whitespaces.<br>
4. A variable name <strong>cannot be a keyword or reserved words</strong>. For example, “if”, “else”, “int” are invalid names as these are the keywords.</p>
<h2>Types of variable in C</h2>
<h3>1. Local variable</h3>
<p>A variable that is declared inside a function or a block is called a local variable as the scope of this variable is limited. A variable declared inside a function can only be accessed inside that function, its <strong>scope is limited to that function and cannot be accessed outside that function.</strong></p>
<p>Similarly a variable declared inside a block cannot be accessed outside that block.</p>
<p><strong>Note:</strong> Local variable must be initialized before it can be used.</p>
<p><strong>Local Variable Example:</strong></p>
<pre class="prettyprint prettyprinted" style=""><code><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> myfunction</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="com">// This is a local variable</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">99</span><span class="pun">;</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"Local variable num value: %d"</span><span class="pun">,</span><span class="pln"> num</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></code></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Local</span><span class="pln"> variable num value</span><span class="pun">:</span><span class="pln"> </span><span class="lit">99</span></pre>
<h3>2. Global variable</h3>
<p>A variable is called global variable, if it can be accessed by all the functions and blocks of the program. The scope of the global variable is not limited to the particular function or block, its scope is limited to the program. Which means a global variable can be accessed inside a program but cannot be accessed outside the program.<br>
<strong>Note: It is declared at the start of the program</strong></p>
<p><strong>Global Variable Example:</strong></p>
<pre class="prettyprint prettyprinted" style=""><code><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">//This is a global variable</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">99</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> myfunction</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"%d\n"</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> num</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> myfunction2</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"%d\n"</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> num</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
  myfunction2</span><span class="pun">();</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></code></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">99</span><span class="pln">
</span><span class="lit">99</span></pre>
<h3>3. Static variable</h3>
<p>A static variable is declared with the <strong>static</strong> keyword. It retains its value during multiple function calls. <strong>Static variables are initialized only once</strong>. The compiler retains their values till the end of the program. Static variables can be declared inside or outside a function. <strong>The default value of static variables is zero</strong>.</p>
<p><strong>Static Variable Example:</strong><br>
In the following example, we have a local variable and a static variable declared inside a function. In the main() method, we are calling the function repeatedly, since there is a print statement in the function, the value of num and num2 gets printed on each function call. As you can see in the output that the local variable value is same for each function call, while <strong>static variable retained its value from previous function call</strong>.</p>
<pre class="prettyprint prettyprinted" style=""><code><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> myfunction</span><span class="pun">(){</span><span class="pln">
  </span><span class="com">//This is a local variable</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">

  </span><span class="com">//This is a static variable</span><span class="pln">
  </span><span class="kwd">static</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
  num </span><span class="pun">=</span><span class="pln"> num </span><span class="pun">+</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">
  num2 </span><span class="pun">=</span><span class="pln"> num2 </span><span class="pun">+</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">
  printf</span><span class="pun">(</span><span class="str">"\n Value of num: %d, value of num2: %d"</span><span class="pun">,</span><span class="pln">num</span><span class="pun">,</span><span class="pln">num2</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="com">//Calling myfunction() repeatedly to print num and num2</span><span class="pln">
  </span><span class="com">//values for each repeating function calls.</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
  myfunction</span><span class="pun">();</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></code></pre>
<p><strong>Output:</strong><br>
<img decoding="async" class="aligncenter size-full wp-image-11738" src="https://beginnersbook.com/wp-content/uploads/2022/07/Variables-in-C.jpg" alt="Variables in C" width="694" height="304" srcset="https://beginnersbook.com/wp-content/uploads/2022/07/Variables-in-C.jpg 694w, https://beginnersbook.com/wp-content/uploads/2022/07/Variables-in-C-300x131.jpg 300w" sizes="(max-width: 694px) 100vw, 694px"></p>
<h3>4. Automatic variable</h3>
<p>Automatic variables are similar to the local variables, their scope is limited to the particular function or block. The local variables inside function or block are <strong>automatic variables by default</strong>. We can explicitly mark a variable automatic by using <strong>auto</strong> keyword.</p>
<p><strong>Automatic Variable Example:</strong></p>
<pre class="prettyprint prettyprinted" style=""><code><span class="kwd">void</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
  </span><span class="com">//This is also an automatic variable by default</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">

  </span><span class="com">//This is how you can explicitly declare variable as automatic</span><span class="pln">
  </span><span class="kwd">auto</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">150</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></code></pre>
<h3>5. External variable</h3>
<p>External variables have wider scope than global variable. The scope of a global variable is limited to the particular c file, which means it cannot be accessed by another c file. However external variables can be accessed by other C files, these variables are shared between multiple c files. We can declare an external variable using <strong>extern keyword</strong>.</p>
<p><strong>External Variable Example:</strong><br>
This is how you can declare a variable as external, using <strong>extern keyword</strong>. Since the scope of extern is greater than the scope of global variable, the extern variable can be accessed by all functions and blocks of the same C file, just like global variables. Unlike global variable, external variables can be accessed outside the C file. An extern variable declared in a C file can be accessed by other C file.</p>


</body>

</html>