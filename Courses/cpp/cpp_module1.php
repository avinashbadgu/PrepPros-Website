<html>

<head>
    <title>cpp Course</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>


    <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">C++ Data Types</span>
    </h1>
    <div class="col-md-12 d-flex align-items-stretch">
        <div class="project-wrap" style="color: black;">
            <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
                    <p>Data types define the type of data a
                        variable can hold, for example an integer variable can hold integer data, a character type variable can hold character data etc.</p>
                        <img style="width: 90%; height: 70%;" class="hero-wrap" src="../../images/c-datatypes.webp">

                        <h2>Built in data types</h2>
<p><strong>char</strong>: For characters. Size 1 byte.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">char</span><span class="pln"> ch </span><span class="pun">=</span><span class="pln"> </span><span class="str">'A'</span><span class="pun">;</span></pre>
<p><strong>int</strong>: For integers. Size 2 bytes.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span></pre>
<p><strong>float</strong>: For single precision floating point. Size 4 bytes.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">float</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">123.78987</span><span class="pun">;</span></pre>
<p><strong>double</strong>: For double precision floating point. Size 8 bytes.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">double</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10098.98899</span><span class="pun">;</span></pre>
<p><strong>bool</strong>: For booleans, true or false.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">bool</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span></pre>
<p><strong>wchar_t</strong>: Wide Character. This should be avoided because its size is implementation defined and not reliable.</p>
<h2>User-defined data types</h2>
<p>We have three types of user-defined data types in C++<br>
1. struct<br>
2. union<br>
3. enum</p>
<p>I have covered them in detail in separate tutorials. For now just remember that these comes under user-defined data types.</p>
<h2>Derived data types in C++</h2>
<p>We have three types of derived-defined data types in C++<br>
1. Array<br>
2. Function<br>
3. Pointer</p>


<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Operators in C++</span>
    </h1>
<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"></span></span> <span class="entry-categories"><a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>Operator represents an action. For example + is an operator that represents addition. An operator works on two or more operands and produce an output. For example 3+4+5 here + operator works on three operands and produce 12 as output.</p>
<h2>Types of Operators in C++</h2>
<p><img decoding="async" class="aligncenter size-full wp-image-6659" src="https://beginnersbook.com/wp-content/uploads/2017/08/Cpp_operator_types.jpg" alt="C++ Operator Types" width="1000" height="450" srcset="https://beginnersbook.com/wp-content/uploads/2017/08/Cpp_operator_types.jpg 650w, https://beginnersbook.com/wp-content/uploads/2017/08/Cpp_operator_types-300x115.jpg 300w" sizes="(max-width: 650px) 100vw, 650px"></p>
<p>1) Basic Arithmetic Operators<br>
2) Assignment Operators<br>
3) Auto-increment and Auto-decrement Operators<br>
4) Logical Operators<br>
5) Comparison (relational) operators<br>
6) Bitwise Operators<br>
7) Ternary Operator</p>
<h2>1) Basic Arithmetic Operators</h2>
<p>Basic arithmetic operators are: +, -, *, /, %<br>
<strong>+</strong> is for addition.</p>
<p><strong>–</strong> is for subtraction.</p>
<p><strong>*</strong> is for multiplication.</p>
<p><strong>/</strong> is for division.</p>
<p><strong>%</strong> is for modulo.<br>
<strong>Note</strong>: Modulo operator returns remainder, for example 20 % 5 would return 0</p>
<h3>Example of Arithmetic Operators</h3>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">240</span><span class="pun">;</span><span class="pln">
 &nbsp;</span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 + num2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">num1 </span><span class="pun">+</span><span class="pln"> num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 - num2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">num1 </span><span class="pun">-</span><span class="pln"> num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 * num2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">num1 </span><span class="pun">*</span><span class="pln"> num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 / num2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">num1 </span><span class="pun">/</span><span class="pln"> num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 % num2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">num1 </span><span class="pun">%</span><span class="pln"> num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">num1 </span><span class="pun">+</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">280</span><span class="pln">
num1 </span><span class="pun">-</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
num1 </span><span class="pun">*</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">9600</span><span class="pln">
num1 </span><span class="pun">/</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
num1 </span><span class="pun">%</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span></pre>
<h2>2) Assignment Operators</h2>
<p>Assignments operators in C++ are: =, +=, -=, *=, /=, %=</p>
<p><strong>num2 = num1</strong> would assign value of variable num1 to the variable.</p>
<p><strong>num2+=num1</strong> is equal to num2 = num2+num1</p>
<p><strong>num2-=num1</strong> is equal to num2 = num2-num1</p>
<p><strong>num2*=num1</strong> is equal to num2 = num2*num1</p>
<p><strong>num2/=num1</strong> is equal to num2 = num2/num1</p>
<p><strong>num2%=num1</strong> is equal to num2 = num2%num1</p>
<h3>Example of Assignment Operators</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
 </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">240</span><span class="pun">;</span><span class="pln">
 </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln">
 cout</span><span class="pun">&lt;&lt;</span><span class="str">"= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">+=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln">
 cout</span><span class="pun">&lt;&lt;</span><span class="str">"+= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">-=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln">
&nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"-= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">*=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln"> &nbsp; &nbsp; &nbsp;
 cout</span><span class="pun">&lt;&lt;</span><span class="str">"*= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">/=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln"> &nbsp; &nbsp; &nbsp;
 cout</span><span class="pun">&lt;&lt;</span><span class="str">"/= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 num2 </span><span class="pun">%=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln"> &nbsp; &nbsp; &nbsp;
 cout</span><span class="pun">&lt;&lt;</span><span class="str">"%= Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pun">=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">240</span><span class="pln">
</span><span class="pun">+=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">480</span><span class="pln">
</span><span class="pun">-=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">240</span><span class="pln">
</span><span class="pun">*=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">57600</span><span class="pln">
</span><span class="pun">/=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">240</span><span class="pln">
</span><span class="pun">%=</span><span class="pln"> </span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span></pre>
<h2>3) Auto-increment and Auto-decrement Operators</h2>
<p>++ and —<br>
num++ is equivalent to num=num+1;</p>
<p>num–- is equivalent to num=num-1;</p>
<h3>Example of Auto-increment and Auto-decrement Operators</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">240</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40</span><span class="pun">;</span><span class="pln">
  num1</span><span class="pun">++;</span><span class="pln"> num2</span><span class="pun">--;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1++ is: "</span><span class="pun">&lt;&lt;</span><span class="pln">num1</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num2-- is: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">num1</span><span class="pun">++</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">241</span><span class="pln">
num2</span><span class="pun">--</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">39</span></pre>
<h2>4) Logical Operators</h2>
<p>Logical Operators are used with binary variables. They are mainly used in conditional statements and loops for evaluating a condition.</p>
<p>Logical operators in C++ are: &amp;&amp;, ||, !</p>
<p>Let’s say we have two boolean variables b1 and b2.</p>
<p><strong>b1&amp;&amp;b2</strong> will return true if both b1 and b2 are true else it would return false.</p>
<p><strong>b1||b2</strong> will return false if both b1 and b2 are false else it would return true.</p>
<p><strong>!b1</strong> would return the opposite of b1, that means it would be true if b1 is false and it would return false if b1 is true.</p>
<h3>Example of Logical Operators</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">bool</span><span class="pln"> b1 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">bool</span><span class="pln"> b2 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"b1 &amp;&amp; b2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">b1</span><span class="pun">&amp;&amp;</span><span class="pln">b2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp;&nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"b1 || b2: "</span><span class="pun">&lt;&lt;(</span><span class="pln">b1</span><span class="pun">||</span><span class="pln">b2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"!(b1 &amp;&amp; b2): "</span><span class="pun">&lt;&lt;!(</span><span class="pln">b1</span><span class="pun">&amp;&amp;</span><span class="pln">b2</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">b1 </span><span class="pun">&amp;&amp;</span><span class="pln"> b2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
b1 </span><span class="pun">||</span><span class="pln"> b2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
</span><span class="pun">!(</span><span class="pln">b1 </span><span class="pun">&amp;&amp;</span><span class="pln"> b2</span><span class="pun">):</span><span class="pln"> </span><span class="lit">1</span></pre>
<h2>5) Relational operators</h2>
<p>We have six relational operators in C++: ==, !=, &gt;, &lt;, &gt;=, &lt;=</p>
<p><strong>==</strong> returns true if both the left side and right side are equal</p>
<p><strong>!=</strong> returns true if left side is not equal to the right side of operator.</p>
<p><strong>&gt;</strong> returns true if left side is greater than right.</p>
<p><strong>&lt;</strong> returns true if left side is less than right side.</p>
<p><strong>&gt;=</strong> returns true if left side is greater than or equal to right side.</p>
<p><strong>&lt;=</strong> returns true if left side is less than or equal to right side.</p>
<h3>Example of Relational operators</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">240</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="lit">40</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num1</span><span class="pun">==</span><span class="pln">num2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 and num2 are equal"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="pun">}</span><span class="pln">
 &nbsp; </span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 and num2 are not equal"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp;&nbsp;</span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> num1 </span><span class="pun">!=</span><span class="pln"> num2 </span><span class="pun">){</span><span class="pln">
 &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 and num2 are not equal"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  &nbsp;</span><span class="pun">}</span><span class="pln">
  &nbsp;</span><span class="kwd">else</span><span class="pun">{</span><span class="pln"> 
 &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 and num2 are equal"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> num1 </span><span class="pun">&gt;</span><span class="pln"> num2 </span><span class="pun">){</span><span class="pln">
 &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is greater than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
 &nbsp; </span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
 &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is not greater than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> num1 </span><span class="pun">&gt;=</span><span class="pln"> num2 </span><span class="pun">){</span><span class="pln"> 
&nbsp; &nbsp; &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is greater than or equal to num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
 &nbsp; </span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
 &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is less than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> num1 </span><span class="pun">&lt;</span><span class="pln"> num2 </span><span class="pun">){</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is less than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
 &nbsp; </span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is not less than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> num1 </span><span class="pun">&lt;=</span><span class="pln"> num2</span><span class="pun">){</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is less than or equal to num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
 &nbsp; </span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 is greater than num2"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
 &nbsp; </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">num1 </span><span class="kwd">and</span><span class="pln"> num2 are </span><span class="kwd">not</span><span class="pln"> equal
num1 </span><span class="kwd">and</span><span class="pln"> num2 are </span><span class="kwd">not</span><span class="pln"> equal
num1 </span><span class="kwd">is</span><span class="pln"> greater than num2
num1 </span><span class="kwd">is</span><span class="pln"> greater than </span><span class="kwd">or</span><span class="pln"> equal to num2
num1 </span><span class="kwd">is</span><span class="pln"> </span><span class="kwd">not</span><span class="pln"> less than num2
num1 </span><span class="kwd">is</span><span class="pln"> greater than num2</span></pre>
<br>
<!-- quiz  -->
<article class="cta" style="	justify-content: center;
	align-items: center;">
	<!-- <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'> -->
	<center?><div class="cta__text-column" >
		<h2>
			Take Quiz on Module 1</h2>
			<ul>
				<li>This quiz consists of 10 questions based on the content covered in the C++ course.</li>
				<li>Each question has a 20-second time limit.</li>
				<li>Once an answer is submitted, you cannot revisit or change it.</li>
				<li>We wish you the best of luck with your quiz!</li>
			  </ul>
		<center><a href="quiz.php?module=cpp_1" >Start Quiz</a></center>
	</div></center>
</article>
<br>

<h2>6) Bitwise Operators</h2>
<p>There are six bitwise Operators: &amp;, |, ^, ~, &lt;&lt;, &gt;&gt;</p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">11</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* equal to 00001011*/</span><span class="pln">
num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">22</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* equal to 00010110 */</span></pre>
<p>Bitwise operator performs bit by bit processing.<br>
<strong>num1 &amp; num2</strong> compares corresponding bits of num1 and num2 and generates 1 if both bits are equal, else it returns 0. In our case it would return: 2 which is 00000010 because in the binary form of num1 and num2 only second last bits are matching.</p>
<p><strong>num1 | num2</strong> compares corresponding bits of num1 and num2 and generates 1 if either bit is 1, else it returns 0. In our case it would return 31 which is 00011111</p>
<p><strong>num1 ^ num2</strong> compares corresponding bits of num1 and num2 and generates 1 if they are not equal, else it returns 0. In our example it would return 29 which is equivalent to 00011101</p>
<p><strong>~num1</strong> is a complement operator that just changes the bit from 0 to 1 and 1 to 0. In our example it would return -12 which is signed 8 bit equivalent to 11110100</p>
<p><strong>num1 &lt;&lt; 2</strong> is left shift operator that moves the bits to the left, discards the far left bit, and assigns the rightmost bit a value of 0. In our case output is 44 which is equivalent to 00101100</p>
<p>Note: In the example below we are providing 2 at the right side of this shift operator that is the reason bits are moving two places to the left side. We can change this number and bits would be moved by the number of bits specified on the right side of the operator. Same applies to the right side operator.</p>
<p><strong>num1 &gt;&gt; 2</strong> is right shift operator that moves the bits to the right, discards the far right bit, and assigns the leftmost bit a value of 0. In our case output is 2 which is equivalent to 00000010</p>
<h3>Example of Bitwise Operators</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">11</span><span class="pun">;</span><span class="pln"> &nbsp;</span><span class="com">/* 11 = 00001011 */</span><span class="pln">
 &nbsp; </span><span class="kwd">int</span><span class="pln"> num2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">22</span><span class="pun">;</span><span class="pln"> &nbsp;</span><span class="com">/* 22 = 00010110 */</span><span class="pln"> 
&nbsp;  </span><span class="kwd">int</span><span class="pln"> result </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> num1 </span><span class="pun">&amp;</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
 &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 &amp; num2: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> num1 </span><span class="pun">|</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
  &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 | num2: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> num1 </span><span class="pun">^</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
 &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 ^ num2: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">~</span><span class="pln">num1</span><span class="pun">;</span><span class="pln">
  &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"~num1: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> num1 </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">
  &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 &lt;&lt; 2: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   result </span><span class="pun">=</span><span class="pln"> num1 </span><span class="pun">&gt;&gt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">
 &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"num1 &gt;&gt; 2: "</span><span class="pun">&lt;&lt;</span><span class="pln">result</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">num1 </span><span class="pun">&amp;</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
num1 </span><span class="pun">|</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">31</span><span class="pln">
num1 </span><span class="pun">^</span><span class="pln"> num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">29</span><span class="pln">
</span><span class="pun">~</span><span class="pln">num1</span><span class="pun">:</span><span class="pln"> </span><span class="pun">-</span><span class="lit">12</span><span class="pln">
num1 </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">44</span><span class="pln"> num1 </span><span class="pun">&gt;&gt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2</span></pre>
<h2>7) Ternary Operator</h2>
<p>This operator evaluates a boolean expression and assign the value based on the result.<br>
Syntax:</p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">variable num1 </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">expression</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> value </span><span class="kwd">if</span><span class="pln"> </span><span class="kwd">true</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> value </span><span class="kwd">if</span><span class="pln"> </span><span class="kwd">false</span></pre>
<p>If the expression results true then the first value before the colon (:) is assigned to the variable num1 else the second value is assigned to the num1.</p>
<h3>Example of Ternary Operator</h3>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln"> num1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">99</span><span class="pun">;</span><span class="pln">
  </span><span class="com">/* num1 is not equal to 10 that's why
   * the second value after colon is assigned
   * to the variable num2
   */</span><span class="pln">
  num2 </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num1 </span><span class="pun">==</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="lit">100</span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num2: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="com">/* num1 is equal to 99 that's why
   * the first value is assigned
   * to the variable num2
   */</span><span class="pln">
  num2 </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num1 </span><span class="pun">==</span><span class="pln"> </span><span class="lit">99</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="lit">100</span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"num2: "</span><span class="pun">&lt;&lt;</span><span class="pln">num2</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style="background-color: #e0e0e0;"><span class="pln">num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
num2</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span></pre>
<h2>Miscellaneous Operators</h2>
<p>There are few other operators in C++ such as <strong>Comma operator</strong> and <strong>sizeof operator</strong>. We will cover them in detail in a separate tutorial.</p>
<h2>Operator Precedence in C++</h2>
<p>This determines which operator needs to be evaluated first if an expression has more than one operator. Operator with higher precedence at the top and lower precedence at the bottom.</p>
<p><strong>Unary Operators</strong><br>
++ – – ! ~</p>
<p><strong>Multiplicative</strong><br>
* / %</p>
<p><strong>Additive</strong><br>
+ –</p>
<p><strong>Shift</strong><br>
&lt;&lt; &gt;&gt; &gt;&gt;&gt;</p>
<p><strong>Relational</strong><br>
&gt; &gt;= &lt; &lt;=</p>
<p><strong>Equality</strong><br>
== !=<br>
<strong><br>
Bitwise AND</strong><br>
&amp;<br>
<strong>Bitwise XOR</strong><br>
^<br>
<strong><br>
Bitwise OR</strong><br>
|</p>
<p><strong>Logical AND</strong><br>
&amp;&amp;</p>
<p><strong>Logical OR</strong><br>
||</p>
<p><strong>Ternary</strong><br>
?:</p>
<p><strong>Assignment</strong><br>
= += -= *= /= %= &gt; &gt;= &lt; &lt;= &amp;= ^= |=</p>



<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-data-types/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-if-else-statement/">Next ❯</a></div>

                </div>
            </div>
        </div>
    </div>


</html>