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
            <span class="mt-md-3">Arrays in C++</span>
        </h1>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="project-wrap" style="color: black;">
                <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">

<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span> <span class="entry-categories"><a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>An array is a collection of similar items stored in contiguous memory locations. In programming, sometimes a simple variable is not enough to hold all the data. For example, lets say we want to store the marks of 500 students, having 500 different variables for this task is not feasible, we can define an array with size 500 that can hold the marks of all students.<br>
<center><img decoding="async" class="aligncenter size-full wp-image-6658" src="../../images/array.jpg" alt="C++ arrays" width="600" height="300" srcset="../../images/array.jpg 300w, ../../images/array.jpg 150w" sizes="(max-width: 300px) 100vw, 300px"></p></center>
<h2>Declaring an array in C++</h2>
<p>There are couple of ways to declare an array.<br>
Method 1:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">];</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">30</span><span class="pun">;</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40</span><span class="pun">;</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">4</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">50</span><span class="pun">;</span></pre>
<p>Method 2:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln"> </span><span class="lit">40</span><span class="pun">,</span><span class="pln"> </span><span class="lit">50</span><span class="pun">};</span></pre>
<p>Method 3:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">5</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln"> </span><span class="lit">40</span><span class="pun">,</span><span class="pln"> </span><span class="lit">50</span><span class="pun">};</span></pre>
<h2>Accessing Array Elements</h2>
<p>Array index starts with 0, which means the first array element is at index 0, second is at index 1 and so on. We can use this information to display the array elements. See the code below:</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">11</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="lit">33</span><span class="pun">,</span><span class="pln"> </span><span class="lit">44</span><span class="pun">,</span><span class="pln"> </span><span class="lit">55</span><span class="pun">};</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="lit">3</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="lit">4</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">11</span><span class="pln">
</span><span class="lit">22</span><span class="pln">
</span><span class="lit">33</span><span class="pln">
</span><span class="lit">44</span><span class="pln">
</span><span class="lit">55</span></pre>
<p>Although this code worked fine, displaying all the elements of array like this is not recommended. When you want to access a particular array element then this is fine but if you want to display all the elements then you should use a loop like this:</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">11</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="lit">33</span><span class="pun">,</span><span class="pln"> </span><span class="lit">44</span><span class="pun">,</span><span class="pln"> </span><span class="lit">55</span><span class="pun">};</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln">
  
   </span><span class="kwd">while</span><span class="pun">(</span><span class="pln">n</span><span class="pun">&lt;=</span><span class="lit">4</span><span class="pun">){</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="pln">n</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
      n</span><span class="pun">++;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>


<!-- multidimensional array -->

<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">Multidimensional Arrays in C++</span>
        </h1>

 
<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span>  <span class="entry-categories"><a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>Multidimensional arrays are also known as <strong>array of arrays</strong>. The data in multidimensional array is stored in a tabular form as shown in the diagram below:<br>
<img decoding="async" class="aligncenter size-full wp-image-6826" src="https://beginnersbook.com/wp-content/uploads/2017/08/cpp_Multidimensional_Array.png" alt="Multidimensional Array in C++" width="500" height="250" srcset="https://beginnersbook.com/wp-content/uploads/2017/08/cpp_Multidimensional_Array.png 500w, https://beginnersbook.com/wp-content/uploads/2017/08/cpp_Multidimensional_Array-300x150.png 300w" sizes="(max-width: 500px) 100vw, 500px"></p>
<p><strong>A two dimensional array:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">];</span></pre>
<p>This array has total 2*3 = 6 elements.</p>
<p><strong>A three dimensional array:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">2</span><span class="pun">][</span><span class="lit">2</span><span class="pun">];</span></pre>
<p>This array has total 2*2*2 = 8 elements.</p>
<h2>Two dimensional array</h2>
<p>Lets see how to declare, initialize and access Two Dimensional Array elements.</p>
<p><strong>How to declare a two dimensional array?</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> myarray</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">];</span></pre>
<p><strong>Initialization:</strong><br>
We can initialize the array in many ways:<br>
<strong>Method 1:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">11</span><span class="pln"> </span><span class="pun">,</span><span class="lit">12</span><span class="pln"> </span><span class="pun">,</span><span class="lit">20</span><span class="pln"> </span><span class="pun">,</span><span class="lit">21</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">};</span></pre>
<p><strong>Method 2:</strong><br>
This way of initializing is preferred as you can visualize the rows and columns here.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{{</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">11</span><span class="pln"> </span><span class="pun">,</span><span class="lit">12</span><span class="pun">}</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="lit">20</span><span class="pln"> </span><span class="pun">,</span><span class="lit">21</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">}};</span></pre>
<p><strong>Accessing array elements:</strong><br>
arr[0][0] – first element<br>
arr[0][1] – second element<br>
arr[0][2] – third element<br>
arr[1][0] – fourth element<br>
arr[1][1] – fifth element<br>
arr[1][2] – sixth element</p>
<h3>Example: Two dimensional array in C++</h3>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{{</span><span class="lit">11</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="lit">33</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">44</span><span class="pun">,</span><span class="pln"> </span><span class="lit">55</span><span class="pun">,</span><span class="pln"> </span><span class="lit">66</span><span class="pun">}};</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="lit">2</span><span class="pun">;</span><span class="pln">i</span><span class="pun">++){</span><span class="pln">
      </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> j</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">&lt;</span><span class="lit">3</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">++){</span><span class="pln">
        cout</span><span class="pun">&lt;&lt;</span><span class="str">"arr["</span><span class="pun">&lt;&lt;</span><span class="pln">i</span><span class="pun">&lt;&lt;</span><span class="str">"]["</span><span class="pun">&lt;&lt;</span><span class="pln">j</span><span class="pun">&lt;&lt;</span><span class="str">"]: "</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="pln">i</span><span class="pun">][</span><span class="pln">j</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">11</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">22</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">0</span><span class="pun">][</span><span class="lit">2</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">33</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">44</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">55</span><span class="pln">
arr</span><span class="pun">[</span><span class="lit">1</span><span class="pun">][</span><span class="lit">2</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">66</span></pre>
<h2>Three dimensional array</h2>
<p>Lets see how to declare, initialize and access Three Dimensional Array elements.</p>
<p><strong>Declaring a three dimensional array:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> myarray</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">][</span><span class="lit">2</span><span class="pun">];</span></pre>
<p><strong>Initialization:</strong><br>
We can initialize the array in many ways:<br>
<strong>Method 1:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">][</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span><span class="pln"> </span><span class="pun">,</span><span class="lit">2</span><span class="pln"> </span><span class="pun">,-</span><span class="lit">2</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="lit">6</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">6</span><span class="pun">};</span></pre>
<p><strong>Method 2:</strong><br>
This way of initializing is preferred as you can visualize the rows and columns here.</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">][</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
     </span><span class="pun">{</span><span class="pln"> </span><span class="pun">{</span><span class="lit">1</span><span class="pun">,-</span><span class="lit">1</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">2</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">3</span><span class="pun">}},</span><span class="pln">
     </span><span class="pun">{</span><span class="pln"> </span><span class="pun">{</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">4</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">5</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">6</span><span class="pun">,</span><span class="pln"> </span><span class="pun">-</span><span class="lit">6</span><span class="pun">}}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h2>Three dimensional array example</h2>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">// initializing the array</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">][</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="pun">{</span><span class="pln"> </span><span class="pun">{</span><span class="lit">1</span><span class="pun">,-</span><span class="lit">1</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">2</span><span class="pun">,-</span><span class="lit">2</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">3</span><span class="pun">,-</span><span class="lit">3</span><span class="pun">}</span><span class="pln"> </span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln"> </span><span class="pun">{</span><span class="lit">4</span><span class="pun">,-</span><span class="lit">4</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">5</span><span class="pun">,-</span><span class="lit">5</span><span class="pun">},</span><span class="pln"> </span><span class="pun">{</span><span class="lit">6</span><span class="pun">,-</span><span class="lit">6</span><span class="pun">}</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">};</span><span class="pln">
   </span><span class="com">// displaying array values </span><span class="pln">
   </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> x </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> x </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln"> x</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
     </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> y </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> y </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">3</span><span class="pun">;</span><span class="pln"> y</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
       </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> z </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> z </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln"> z</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout</span><span class="pun">&lt;&lt;</span><span class="pln">arr</span><span class="pun">[</span><span class="pln">x</span><span class="pun">][</span><span class="pln">y</span><span class="pun">][</span><span class="pln">z</span><span class="pun">]&lt;&lt;</span><span class="str">" "</span><span class="pun">;</span><span class="pln">
       </span><span class="pun">}</span><span class="pln">
     </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">1</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">-</span><span class="lit">2</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">-</span><span class="lit">3</span><span class="pln"> </span><span class="lit">4</span><span class="pln"> </span><span class="pun">-</span><span class="lit">4</span><span class="pln"> </span><span class="lit">5</span><span class="pln"> </span><span class="pun">-</span><span class="lit">5</span><span class="pln"> </span><span class="lit">6</span><span class="pln"> </span><span class="pun">-</span><span class="lit">6</span></pre>
<br>
<!-- passing array to function -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">Passing Array to Function in C++</span>
        </h1>

<p class="entry-meta"> <span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span>  <span class="entry-categories"> <a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>You can pass array as an argument to a function just like you pass variables as arguments. In order to pass array to the function you just need to <strong>mention the array name during function call</strong> like this:</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">function_name</span><span class="pun">(</span><span class="pln">array_name</span><span class="pun">);</span></pre>
<h2>Example: Passing arrays to a function</h2>
<p>In this example, we are passing two arrays <code>a</code> &amp; <code>b</code> to the function <code>sum()</code>. This function adds the corresponding elements of both the arrays and display them.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">/* This function adds the corresponding
&nbsp;* elements of both the arrays and
&nbsp;* displays it.
&nbsp;*/</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> arr1</span><span class="pun">[],</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> arr2</span><span class="pun">[]){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> temp</span><span class="pun">[</span><span class="lit">5</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="lit">5</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++){</span><span class="pln">
      temp</span><span class="pun">[</span><span class="pln">i</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> arr1</span><span class="pun">[</span><span class="pln">i</span><span class="pun">]+</span><span class="pln">arr2</span><span class="pun">[</span><span class="pln">i</span><span class="pun">];</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="pln">temp</span><span class="pun">[</span><span class="pln">i</span><span class="pun">]&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">[</span><span class="lit">5</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln"> </span><span class="lit">40</span><span class="pln"> </span><span class="pun">,</span><span class="lit">50</span><span class="pun">};</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">[</span><span class="lit">5</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">};</span><span class="pln">
   </span><span class="com">//Passing arrays to function</span><span class="pln">
   sum</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">11</span><span class="pln">
</span><span class="lit">22</span><span class="pln">
</span><span class="lit">33</span><span class="pln">
</span><span class="lit">44</span><span class="pln">
</span><span class="lit">55</span></pre>
<h2>Example 2: Passing multidimensional array to function</h2>
<p>In this example we are passing a multidimensional array to the function <code>square</code> which displays the square of each element.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cmath&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">/* This method prints the square of each
&nbsp;* of the elements of multidimensional array
&nbsp;*/</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> square</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">]){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> temp</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="lit">2</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++){</span><span class="pln">
      </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> j</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">&lt;</span><span class="lit">3</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">++){</span><span class="pln">
        temp </span><span class="pun">=</span><span class="pln"> arr</span><span class="pun">[</span><span class="pln">i</span><span class="pun">][</span><span class="pln">j</span><span class="pun">];</span><span class="pln">
        cout</span><span class="pun">&lt;&lt;</span><span class="pln">pow</span><span class="pun">(</span><span class="pln">temp</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> arr</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
&nbsp; &nbsp; &nbsp; &nbsp;</span><span class="pun">{</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">},</span><span class="pln">
 &nbsp; &nbsp; &nbsp; </span><span class="pun">{</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="lit">6</span><span class="pun">}</span><span class="pln">
   </span><span class="pun">};</span><span class="pln">
   square</span><span class="pun">(</span><span class="pln">arr</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">1</span><span class="pln">
</span><span class="lit">4</span><span class="pln">
</span><span class="lit">9</span><span class="pln">
</span><span class="lit">16</span><span class="pln">
</span><span class="lit">25</span><span class="pln">
</span><span class="lit">36</span></pre>
<!-- Array of char(string) -->

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
		<center><a href="quiz.php?module=cpp_3">Start Quiz</a></center>
	</div></center>
</article>
<br>

<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
            <span class="mt-md-3">Strings in C++</span>
        </h1>

<p class="entry-meta"><span class="entry-author" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span class="entry-author-name" itemprop="name"> </span></span>  <span class="entry-categories"><a href="https://beginnersbook.com/category/learn-c/" rel="category tag"></a></span></p></header><div class="entry-content" itemprop="text"><p>Strings are words that are made up of characters, hence they are known as sequence of characters. In C++ we have two ways to create and use strings: 1) By creating char arrays and treat them as string 2) By creating <code>string</code> object</p>
<p>Lets discuss these two ways of creating string first and then we will see which method is better and why.</p>
<h2>1) Array of Characters – Also known as C Strings</h2>
<p><strong>Example 1:</strong><br>
A simple example where we have initialized the char array during declaration.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> book</span><span class="pun">[</span><span class="lit">50</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"A Song of Ice and Fire"</span><span class="pun">;</span><span class="pln">
 &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="pln">book</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">A </span><span class="typ">Song</span><span class="pln"> of </span><span class="typ">Ice</span><span class="pln"> </span><span class="kwd">and</span><span class="pln"> </span><span class="typ">Fire</span></pre>
<p><strong>Example 2: Getting user input as string</strong><br>
This can be considered as inefficient method of reading user input, why? Because when we read the user input string using <code>cin</code> then only the first word of the string is stored in char array and rest get ignored. The cin function considers the space in the string as delimiter and ignore the part after it.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> book</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Enter your favorite book name:"</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//reading user input</span><span class="pln">
   cin</span><span class="pun">&gt;&gt;</span><span class="pln">book</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"You entered: "</span><span class="pun">&lt;&lt;</span><span class="pln">book</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Enter</span><span class="pln"> your favorite book name</span><span class="pun">:</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Murder</span><span class="pln"> of </span><span class="typ">Roger</span><span class="pln"> </span><span class="typ">Ackroyd</span><span class="pln">
</span><span class="typ">You</span><span class="pln"> entered</span><span class="pun">:</span><span class="pln"> </span><span class="typ">The</span></pre>
<p>You can see that only the “The” got captured in the book and remaining part after space got ignored. How to deal with this then? Well, for this we can use <code>cin.get</code> function, which reads the complete line entered by user.</p>
<p><strong>Example 3: Correct way of capturing user input string using cin.get</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> book</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Enter your favorite book name:"</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">//reading user input</span><span class="pln">
   cin</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="pln">book</span><span class="pun">,</span><span class="pln"> </span><span class="lit">50</span><span class="pun">);</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"You entered: "</span><span class="pun">&lt;&lt;</span><span class="pln">book</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Enter</span><span class="pln"> your favorite book name</span><span class="pun">:</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Murder</span><span class="pln"> of </span><span class="typ">Roger</span><span class="pln"> </span><span class="typ">Ackroyd</span><span class="pln">
</span><span class="typ">You</span><span class="pln"> entered</span><span class="pun">:</span><span class="pln"> </span><span class="typ">The</span><span class="pln"> </span><span class="typ">Murder</span><span class="pln"> of </span><span class="typ">Roger</span><span class="pln"> </span><span class="typ">Ackroyd</span></pre>
<h3>Drawback of this method</h3>
<p>1) Size of the char array is fixed, which means the size of the string created through it is fixed in size, more memory cannot be allocated to it during runtime. For example, lets say you have created an array of character with the size 10 and user enters the string of size 15 then the last five characters would be truncated from the string.<br>
On the other hand if you create a larger array to accommodate user input then the memory is wasted if the user input is small and array is much larger then what is needed.</p>
<p>2) In this method, you can only use the in-built functions created for array which don’t help much in string manipulation.</p>
<p><strong>What is the solution of these problems?</strong><br>
We can create string using string object. Lets see how we can do it.</p>
<h2>String object in C++</h2>
<p>Till now we have seen how to handle strings in C++ using char arrays. Lets see another and better way of handling strings in C++ – string objects.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">// This is how we create string object</span><span class="pln">
   </span><span class="kwd">string</span><span class="pln"> str</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"Enter a String:"</span><span class="pun">;</span><span class="pln">
   </span><span class="com">/* This is used to get the user input
    * and store it into str
    */</span><span class="pln">
   getline</span><span class="pun">(</span><span class="pln">cin</span><span class="pun">,</span><span class="pln">str</span><span class="pun">);</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"You entered: "</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">str</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">/* This function adds a character at
    * the end of the string
    */</span><span class="pln"> str</span><span class="pun">.</span><span class="pln">push_back</span><span class="pun">(</span><span class="str">'A'</span><span class="pun">);</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"The string after push_back: "</span><span class="pun">&lt;&lt;</span><span class="pln">str</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="com">/* This function deletes a character from
    * the end of the string
    */</span><span class="pln">
   str</span><span class="pun">.</span><span class="pln">pop_back</span><span class="pun">();</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"The string after pop_back: "</span><span class="pun">&lt;&lt;</span><span class="pln">str</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Enter</span><span class="pln"> a </span><span class="typ">String</span><span class="pun">:</span><span class="pln">XYZ
</span><span class="typ">You</span><span class="pln"> entered</span><span class="pun">:</span><span class="pln"> XYZ
</span><span class="typ">The</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> after push_back</span><span class="pun">:</span><span class="pln"> XYZA
</span><span class="typ">The</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> after pop_back</span><span class="pun">:</span><span class="pln"> XYZ</span></pre>
<p>The advantage of using this method is that you need not to declare the size of the string, the size is determined at run time, so this is better memory management method. The memory is allocated dynamically at runtime so no memory is wasted.</p>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-passing-array-to-function/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-pointers/">Next ❯</a></div>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->

<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-default-arguments/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-arrays/">Next ❯</a></div>

</div><footer class="entry-footer"></footer></article>
                    </div>
                </div>
            </div>
        </div>
   

</body>

</html>