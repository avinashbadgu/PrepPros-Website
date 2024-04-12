<html>

<head>
    <title>cpp Course</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/quiz_instruction.css">
</head>


    <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">OOPs Concepts in C++</span>
    </h1>
    <div class="col-md-12 d-flex align-items-stretch">
        <div class="project-wrap" style="color: black;">
            <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">

<p class="entry-meta"> </p></header><div class="entry-content" itemprop="text"><p>Object oriented programming is a way of solving complex problems by breaking them into smaller problems using objects. Before Object Oriented Programming (commonly referred as OOP), programs were written in procedural language, they were nothing but a long list of instructions. On the other hand, the OOP is all about creating objects that can interact with each other, this makes it easier to develop programs in OOP as we can understand the relationship between them.</p>
<h2>Object Oriented Programming(OOP)</h2>
<p>In Object oriented programming we write programs using classes and objects utilising features of OOPs such as <strong>abstraction</strong>, <strong>encapsulation</strong>, <strong>inheritance</strong> and <strong>polymorphism</strong></p>
<h3>Class and Objects</h3>
<p>A class is like a blueprint of data member and functions and object is an instance of class. For example, lets say we have a class <strong>Car</strong> which has data members (variables) such as speed, weight, price and functions such as gearChange(), slowDown(), brake() etc. Now lets say I create a object of this class named FordFigo which uses these data members and functions and give them its own values. Similarly we can create as many objects as we want using the blueprint(class).</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">//Class name is Car</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Car</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
    </span><span class="com">//Data members</span><span class="pln">
    </span><span class="kwd">char</span><span class="pln"> name</span><span class="pun">[</span><span class="lit">20</span><span class="pun">];</span><span class="pln">
    </span><span class="kwd">int</span><span class="pln"> speed</span><span class="pun">;</span><span class="pln">
    </span><span class="kwd">int</span><span class="pln"> weight</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
    </span><span class="com">//Functions</span><span class="pln">
    </span><span class="kwd">void</span><span class="pln"> brake</span><span class="pun">(){</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
    </span><span class="kwd">void</span><span class="pln"> slowDown</span><span class="pun">(){</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="com">//ford is an object</span><span class="pln">
   </span><span class="typ">Car</span><span class="pln"> ford</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span></pre>
<h3>Abstraction</h3>
<p><a href="https://beginnersbook.com/2017/09/abstraction-in-c-with-example/">Abstraction</a> is a process of hiding irrelevant details from user. For example, When you send an sms you just type the message, select the contact and click send, the phone shows you that the message has been sent, what actually happens in background when you click send is hidden from you as it is not relevant to you.</p>
<h3>Encapsulation</h3>
<p><a href="https://beginnersbook.com/2017/09/cpp-encapsulation/">Encapsulation</a> is a process of combining data and function into a single unit like capsule. This is to avoid the access of private data members from outside the class. To achieve encapsulation, we make all data members of class private and create public functions, using them we can get the values from these data members or set the value to these data members.</p>
<h3>Inheritance</h3>
<p><a href="https://beginnersbook.com/2017/08/cpp-inheritance/">Inheritance</a> is a feature using which an object of child class acquires the properties of parent class.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ParentClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="com">//data member</span><span class="pln">
  </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
    </span><span class="kwd">int</span><span class="pln"> var1 </span><span class="pun">=</span><span class="lit">100</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ChildClass</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">ParentClass</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> var2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">500</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="typ">ChildClass</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Now this object obj can use the properties (such as variable var1) of ParentClass.</p>
<h3>Polymorphism</h3>
<p><a href="https://beginnersbook.com/2017/08/cpp-function-overloading/">Function overloading</a> and Operator overloading are examples of polymorphism. Polymorphism is a feature using which an object behaves differently in different situation.<br>
In function overloading we can have more than one function with same name but different numbers, type or sequence of arguments.</p>
<h4>Polymorphism Example</h4>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Sum</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
    </span><span class="kwd">int</span><span class="pln"> add</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">){</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> num1 </span><span class="pun">+</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
    </span><span class="kwd">int</span><span class="pln"> add</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num3</span><span class="pun">){</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> num1 </span><span class="pun">+</span><span class="pln"> num2 </span><span class="pun">+</span><span class="pln"> num3</span><span class="pun">;</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">//Object of class Sum</span><span class="pln">
   </span><span class="typ">Sum</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">

   </span><span class="com">//This will call the second add function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">add</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">//This will call the first add function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">add</span><span class="pun">(</span><span class="lit">11</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">60</span><span class="pln">
</span><span class="lit">33</span></pre>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-this-pointer/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-constructors/">Next ❯</a></div>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->
<!-- constructors in c++  -->

<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Constructors in C++</span>
    </h1>

<p class="entry-meta"></p></header><div class="entry-content" itemprop="text"><p>Constructor is a special member function of a class that initializes the object of the class. Constructor name is same as class name and it doesn’t have a return type. Lets take a simple example to understand the working of constructor.</p>
<h2>Simple Example: How to use constructor in C++</h2>
<p>Read the comments in the following program to understand each part of the program.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> constructorDemo</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">;</span><span class="pln">
   </span><span class="com">/* This is a default constructor of the
    * class, do note that it's name is same as
    * class name and it doesn't have return type.
    */</span><span class="pln">
   constructorDemo</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln"> ch </span><span class="pun">=</span><span class="pln"> </span><span class="str">'A'</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">/* This is how we create the object of class,
    * I have given the object name as obj, you can
    * give any name, just remember the syntax:
    * class_name object_name;
    */</span><span class="pln">
   constructorDemo obj</span><span class="pun">;</span><span class="pln">

   </span><span class="com">/* This is how we access data members using object
    * we are just checking that the value we have
    * initialized in constructor are reflecting or not.
    */</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"num: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">num</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="str">"ch: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">ch</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">num</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
ch</span><span class="pun">:</span><span class="pln"> A</span></pre>
<h2>Constructor vs Member function</h2>
<p>Now that we know what is constructor, lets discuss how a constructor is different from member function of the class.<br>
1) Constructor doesn’t have a return type. Member function has a return type.<br>
2) Constructor is automatically called when we create the object of the class. Member function needs to be called explicitly using object of class.<br>
3) When we do not create any constructor in our class, C++ compiler generates a default constructor and insert it into our code. The same does not apply to member functions.<br>
This is how a compiler generated default constructor looks:</p>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">class</span><span class="pln"> XYZ
</span><span class="pun">{</span><span class="pln"> 
    </span><span class="pun">....</span><span class="pln">
    XYZ</span><span class="pun">()</span><span class="pln">
    </span><span class="pun">{</span><span class="pln">
        </span><span class="com">//Empty no code</span><span class="pln">
    </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span></pre>
<h2>Types of Constructor in C++</h2>
<p>There are two types of constructor in C++. 1) Default constructor 2) Parameterized constructor</p>
<h3>1) Default Constructor</h3>
<p>A default constructor doesn’t have any arguments (or parameters)</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Website</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="com">//Default constructor</span><span class="pln">
   </span><span class="typ">Website</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"Welcome to BeginnersBook"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">){</span><span class="pln">
   </span><span class="com">/*creating two objects of class Website.
    * This means that the default constructor
    * should have been invoked twice.
    */</span><span class="pln">
   </span><span class="typ">Website</span><span class="pln"> obj1</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Website</span><span class="pln"> obj2</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Welcome</span><span class="pln"> to </span><span class="typ">BeginnersBook</span><span class="pln">
</span><span class="typ">Welcome</span><span class="pln"> to </span><span class="typ">BeginnersBook</span></pre>
<blockquote><p>When you don’t specify any constructor in the class, a default constructor with no code (empty body) would be inserted into your code by compiler.</p></blockquote>
<h3>2) Parameterized Constructor</h3>
<p>Constructors with parameters are known as Parameterized constructors. These type of constructor allows us to pass arguments while object creation. Lets see how they look:</p>
<p>Lets say class name is XYZ<br>
<strong>Default constructor:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">XYZ</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

</span><span class="pun">}</span><span class="pln">
</span><span class="pun">....</span><span class="pln">
XYZ obj</span><span class="pun">;</span><span class="pln">
</span><span class="pun">....</span></pre>
<p><strong>Parameterized Constructor:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">XYZ</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

</span><span class="pun">}</span><span class="pln">
</span><span class="pun">...</span><span class="pln">
XYZ obj</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">);</span></pre>
<h4>Example:</h4>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Add</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="com">//Parameterized constructor</span><span class="pln">
   </span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;(</span><span class="pln">num1</span><span class="pun">+</span><span class="pln">num2</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">){</span><span class="pln">
   </span><span class="com">/* One way of creating object. Also
    * known as implicit call to the
    * constructor
    */</span><span class="pln">
   </span><span class="typ">Add</span><span class="pln"> obj1</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">);</span><span class="pln">
   </span><span class="com">/* Another way of creating object. This
    * is known as explicit calling the
    * constructor.
    */</span><span class="pln">
   </span><span class="typ">Add</span><span class="pln"> obj2 </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Add</span><span class="pun">(</span><span class="lit">50</span><span class="pun">,</span><span class="pln"> </span><span class="lit">60</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">30</span><span class="pln">
</span><span class="lit">110</span></pre>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->
<!-- destructors  -->

<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Destructors in C++</span>
    </h1>


<p class="entry-meta"></p></header><div class="entry-content" itemprop="text"><p>A destructor is a special member function that works just opposite to constructor, unlike <a href="https://beginnersbook.com/2017/08/cpp-constructors/">constructors</a> that are used for initializing an object, destructors destroy (or delete) the object.</p>
<p><strong>Syntax of Destructor</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="pun">~</span><span class="pln">class_name</span><span class="pun">()</span><span class="pln">    
</span><span class="pun">{</span><span class="pln">   
   </span><span class="com">//Some code   </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Similar to constructor, the destructor name should exactly match with the class name. A destructor declaration should always begin with the tilde(~) symbol as shown in the syntax above.</p>
<h2>When does the destructor get called?</h2>
<p>A destructor is <strong>automatically called</strong> when:<br>
1) The program finished execution.<br>
2) When a scope (the { } parenthesis) containing <a href="https://beginnersbook.com/2017/08/cpp-variables/">local variable</a> ends.<br>
3) When you call the delete operator.</p>
<h2>Destructor Example</h2>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">HelloWorld</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="com">//Constructor</span><span class="pln">
  </span><span class="typ">HelloWorld</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor is called"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="com">//Destructor</span><span class="pln">
  </span><span class="pun">~</span><span class="typ">HelloWorld</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="str">"Destructor is called"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="com">//Member function</span><span class="pln">
   </span><span class="kwd">void</span><span class="pln"> display</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Hello World!"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//Object created</span><span class="pln">
   </span><span class="typ">HelloWorld</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//Member function called</span><span class="pln">
   obj</span><span class="pun">.</span><span class="pln">display</span><span class="pun">();</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Constructor</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> called
</span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span><span class="pun">!</span><span class="pln">
</span><span class="typ">Destructor</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> called</span></pre>
<h2>Destructor rules</h2>
<p>1) Name should begin with tilde sign(~) and must match class name.<br>
2) There cannot be more than one destructor in a class.<br>
3) Unlike constructors that can have parameters, destructors do not allow any parameter.<br>
4) They do not have any return type, just like constructors.<br>
5) When you do not specify any destructor in a class, compiler generates a default destructor and inserts it into your code.</p>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->

<!-- inheritance   -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Inheritance in C++</span>
    </h1>
<p class="entry-meta"></header><div class="entry-content" itemprop="text"><p>Inheritance is one of the feature of <a href="https://beginnersbook.com/2017/08/cpp-oops-concepts/">Object Oriented Programming System(OOPs)</a>, it allows the child class to acquire the properties (the data members) and functionality (the member functions) of parent class.</p>
<p><strong>What is child class?</strong><br>
A class that inherits another class is known as child class, it is also known as derived class or subclass.<br>
<strong>What is parent class?</strong><br>
The class that is being inherited by other class is known as parent class, super class or base class.</p>
<h4>Syntax of Inheritance</h4>
<pre class="prettyprint prettyprinted" style=""><span class="kwd">class</span><span class="pln"> parent_class
</span><span class="pun">{</span><span class="pln">
    </span><span class="com">//Body of parent class</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> child_class </span><span class="pun">:</span><span class="pln"> access_modifier parent_class
</span><span class="pun">{</span><span class="pln">
   </span><span class="com">//Body of child class</span><span class="pln">
</span><span class="pun">};</span></pre>
<h2>What are the advantages of using inheritance in C++ Programming</h2>
<p>The main advantages of inheritance are <strong>code reusability</strong> and <strong>readability</strong>. When child class inherits the properties and functionality of parent class, we need not to write the same code again in child class. This makes it easier to reuse the code, makes us write the less code and the code becomes much more readable.</p>
<p>Lets take a <strong>real life example</strong> to understand this: Lets assume that <code>Human</code> is a class that has properties such as height, weight, colour etc and functionality such as eating(), sleeping(), dreaming(), working() etc.<br>
Now we want to create <code>Male</code> and <code>Female</code> class, these classes are different but since both Male and Female are humans they share some common properties and behaviours (functionality) so they can inherit those properties and functionality from Human class and rest can be written in their class separately.<br>
This approach makes us write less code as both the classes inherited several properties and functions from base class thus we didn’t need to re-write them. Also, this makes it easier to read the code.</p>
<h2>Inheritance Example</h2>
<p>Before we discuss the types of inheritance, lets take an example:<br>
Here we have two classes <code>Teacher</code> and <code>MathTeacher</code>, the MathTeacher class inherits the Teacher class which means <code>Teacher</code> is a parent class and <code>MathTeacher</code> is a child class. The child class can use the property <code>collegeName</code> of parent class.</p>
<blockquote><p>Another important point to note is that when we create the object of child class it calls the constructor of child class and child class constructor automatically calls the constructor of base class.</p></blockquote>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Teacher</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="typ">Teacher</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="str">"Hey Guys, I am a teacher"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="kwd">string</span><span class="pln"> collegeName </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Beginnersbook"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="com">//This class inherits Teacher class</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">MathTeacher</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Teacher</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="typ">MathTeacher</span><span class="pun">(){</span><span class="pln">
    cout</span><span class="pun">&lt;&lt;</span><span class="str">"I am a Math Teacher"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="kwd">string</span><span class="pln"> mainSub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Math"</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">string</span><span class="pln"> name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Negan"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="typ">MathTeacher</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"Name: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">name</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"College Name: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">collegeName</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"Main Subject: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">mainSub</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Hey</span><span class="pln"> </span><span class="typ">Guys</span><span class="pun">,</span><span class="pln"> I am a teacher
I am a </span><span class="typ">Math</span><span class="pln"> </span><span class="typ">Teacher</span><span class="pln">
</span><span class="typ">Name</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Negan</span><span class="pln">
</span><span class="typ">College</span><span class="pln"> </span><span class="typ">Name</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Beginnersbook</span><span class="pln">
</span><span class="typ">Main</span><span class="pln"> </span><span class="typ">Subject</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Math</span></pre>
<h2>Types of Inheritance in C++</h2>
<p>1) Single inheritance<br>
2) Multilevel inheritance<br>
3) Multiple inheritance<br>
4) Hierarchical inheritance<br>
5) Hybrid inheritance</p>
<h3>Single inheritance</h3>
<p>In Single inheritance one class inherits one class exactly.<br>
For example: Lets say we have class A and B</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">B inherits A</span></pre>
<p><strong>Example of Single inheritance:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  A</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of A class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  B</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of B class"</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">//Creating object of class B</span><span class="pln">
   B obj</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Constructor</span><span class="pln"> of A </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of B </span><span class="kwd">class</span></pre>
<h3>2)Multilevel Inheritance</h3>
<p>In this type of inheritance one class inherits another child class.</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">C inherits B </span><span class="kwd">and</span><span class="pln"> B inherits A</span></pre>
<p><strong>Example of Multilevel inheritance:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  A</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of A class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  B</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of B class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> C</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> B </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  C</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of C class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="com">//Creating object of class C</span><span class="pln">
  C obj</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Constructor</span><span class="pln"> of A </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of B </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of C </span><span class="kwd">class</span></pre>
<h3>Multiple Inheritance</h3>
<p>In multiple inheritance, a class can inherit more than one class. This means that in this type of inheritance a single child class can have multiple parent classes.<br>
For example:</p>
<pre class="prettyprint prettyprinted" style=""><span class="pln">C inherits A </span><span class="kwd">and</span><span class="pln"> B both</span></pre>
<p><strong>Example of Multiple Inheritance:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  A</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of A class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  B</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of B class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> C</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> B </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  C</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of C class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">//Creating object of class C</span><span class="pln">
   C obj</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Constructor</span><span class="pln"> of A </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of B </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of C </span><span class="kwd">class</span></pre>
<h3>4)Hierarchical Inheritance</h3>
<p>In this type of inheritance, one parent class has more than one child class. For example:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Class</span><span class="pln"> B </span><span class="kwd">and</span><span class="pln"> C inherits </span><span class="kwd">class</span><span class="pln"> A</span></pre>
<p><strong>Example of Hierarchical inheritance:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  A</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of A class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  B</span><span class="pun">(){</span><span class="pln"> 
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of B class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> C</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  C</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Constructor of C class"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">//Creating object of class C</span><span class="pln">
   C obj</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Constructor</span><span class="pln"> of A </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Constructor</span><span class="pln"> of C </span><span class="kwd">class</span></pre>
<h3>5) Hybrid Inheritance</h3>
<p>Hybrid inheritance is a combination of more than one type of inheritance. For example, A child and parent class relationship that follows multiple and hierarchical inheritance both can be called hybrid inheritance.</p>
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
		<center><a href="quiz.php?module=cpp_5">Start Quiz</a></center>
	</div></center>
</article>
<br>
<!-- Polymorphism  -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Polymorphism in C++</span>
    </h1>
<p class="entry-meta"></header><div class="entry-content" itemprop="text"><p>Polymorphism is a feature of <a href="https://beginnersbook.com/2017/08/cpp-oops-concepts/">OOPs</a> that allows the object to behave differently in different conditions. In C++ we have two types of polymorphism:<br>
1) Compile time Polymorphism – This is also known as static (or early) binding.<br>
2) Runtime Polymorphism – This is also known as dynamic (or late) binding.</p>
<h2>1) Compile time Polymorphism</h2>
<p>Function overloading and Operator overloading are perfect example of Compile time polymorphism.</p>
<h3>Compile time Polymorphism Example</h3>
<p>In this example, we have two functions with same name but different number of arguments. Based on how many parameters we pass during function call determines which function is to be called, this is why it is considered as an example of polymorphism because in different conditions the output is different. Since, the call is determined during compile time thats why it is called compile time polymorphism.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Add</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">){</span><span class="pln">
     </span><span class="kwd">return</span><span class="pln"> num1</span><span class="pun">+</span><span class="pln">num2</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num3</span><span class="pun">){</span><span class="pln">
     </span><span class="kwd">return</span><span class="pln"> num1</span><span class="pun">+</span><span class="pln">num2</span><span class="pun">+</span><span class="pln">num3</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="typ">Add</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
  </span><span class="com">//This will call the first function</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="com">//This will call the second function</span><span class="pln">
  cout</span><span class="pun">&lt;&lt;</span><span class="str">"Output: "</span><span class="pun">&lt;&lt;</span><span class="pln">obj</span><span class="pun">.</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">11</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="lit">33</span><span class="pun">);</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><strong><span class="typ">Output</span><span class="pun">:</span></strong></pre>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">30</span><span class="pln">
</span><span class="typ">Output</span><span class="pun">:</span><span class="pln"> </span><span class="lit">66</span></pre>
<h2>2) Runtime Polymorphism</h2>
<p>Function overriding is an example of Runtime polymorphism.<br>
<strong>Function Overriding</strong>: When child class declares a method, which is already present in the parent class then this is called function overriding, here child class overrides the parent class.</p>
<p>In case of function overriding we have two definitions of the same function, one is parent class and one in child class. The call to the function is determined at <strong>runtime </strong>to decide which definition of the function is to be called, thats the reason it is called runtime polymorphism.</p>
<h3>Example of Runtime Polymorphism</h3>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">void</span><span class="pln"> disp</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Super Class Function"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
  </span><span class="kwd">void</span><span class="pln"> disp</span><span class="pun">(){</span><span class="pln">
     cout</span><span class="pun">&lt;&lt;</span><span class="str">"Sub Class Function"</span><span class="pun">;</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  </span><span class="com">//Parent class object</span><span class="pln">
  A obj</span><span class="pun">;</span><span class="pln">
  obj</span><span class="pun">.</span><span class="pln">disp</span><span class="pun">();</span><span class="pln">
  </span><span class="com">//Child class object</span><span class="pln">
  B obj2</span><span class="pun">;</span><span class="pln">
  obj2</span><span class="pun">.</span><span class="pln">disp</span><span class="pun">();</span><span class="pln">
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Super</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
</span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Function</span></pre>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->
<!-- Abstraction  -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Abstraction in C++ with example</span>
    </h1>
<p class="entry-meta"></p></header><div class="entry-content" itemprop="text"><p>Abstraction is one of the feature of <a href="https://beginnersbook.com/2017/08/cpp-oops-concepts/">Object Oriented Programming</a>, where you show only relevant details to the user and hide irrelevant details. For example, when you send an email to someone you just click send and you get the success message, what actually happens when you click send, how data is transmitted over network to the recipient is hidden from you (because it is irrelevant to you).</p>
<p>Let’s see how this can be achieved in a C++ program using access specifiers:</p>
<h2>Abstraction Example</h2>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">AbstractionExample</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">private</span><span class="pun">:</span><span class="pln">
   </span><span class="com">/* By making these data members private, I have
    * hidden them from outside world.
    * These data members are not accessible outside
    * the class. The only way to set and get their
    * values is through the public functions.
    */</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">char</span><span class="pln"> ch</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
   </span><span class="kwd">void</span><span class="pln"> setMyValues</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">char</span><span class="pln"> c</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      num </span><span class="pun">=</span><span class="pln"> n</span><span class="pun">;</span><span class="pln"> ch </span><span class="pun">=</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">void</span><span class="pln"> getMyValues</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"Numbers is: "</span><span class="pun">&lt;&lt;</span><span class="pln">num</span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      cout</span><span class="pun">&lt;&lt;</span><span class="str">"Char is: "</span><span class="pun">&lt;&lt;</span><span class="pln">ch</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="typ">AbstractionExample</span><span class="pln"> obj</span><span class="pun">;</span><span class="pln">
   obj</span><span class="pun">.</span><span class="pln">setMyValues</span><span class="pun">(</span><span class="lit">100</span><span class="pun">,</span><span class="pln"> </span><span class="str">'X'</span><span class="pun">);</span><span class="pln">
   obj</span><span class="pun">.</span><span class="pln">getMyValues</span><span class="pun">();</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><strong>Output:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Numbers</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
</span><span class="typ">Char</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> X</span></pre>
<h2>Advantage of data abstraction</h2>
<p>The major advantage of using this feature is that when the code evolves and you need to make some adjustments in the code then you only need to modify the high level class where you have declared the members as private. Since none class is accessing these data members directly, you do not need to change the low level(user level) class code.<br>
Imagine if you had made these data members public, if at some point you want to change the code, you would have to make the necessary adjustments to all the classes that are accessing the members directly.</p>
<p><strong>Other advantages of data abstraction are:</strong><br>
1) Makes the application secure by making data private and avoiding the user level error that may corrupt the data.<br>
2) This avoids code duplication and increases the code reusability.</p>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->
<!-- function overloading & function overriding  -->
<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Difference between Function Overloading and Function overriding in C++</span>
    </h1>

<p class="entry-meta"></p></header><div class="entry-content" itemprop="text"><p>Function overloading and Function overriding both are examples of <a href="https://beginnersbook.com/2017/08/cpp-polymorphism/">polymorphism</a> but they are completely different. Before we discuss the difference between them, lets discuss a little bit about them first.</p>
<h2>Function Overloading</h2>
<p><a href="https://beginnersbook.com/2017/08/cpp-function-overloading/">Function overloading</a> is a feature that allows us to have same function more than once in a program. Overloaded functions have same name but their signature must be different.<br>
<strong>Example:</strong><br>
Here we have the same function <strong>sum</strong> declared four times with different signatures. Based on the parameters we pass, while calling function sum, decides which method is to be called. This happens during compilation, which is why it is also known as compile time polymorphism. If you are wondering why I have suffixed each floating point value with “f” letter in the example below, during function call then refer this: <a href="https://beginnersbook.com/2017/08/function-overloading-error-with-floats/">function overloading float issue</a>.</p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">// overloaded functions</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">float</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">float</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">float</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">float</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
   </span><span class="com">//This will call the second function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">15.7f</span><span class="pun">,</span><span class="pln"> </span><span class="lit">12.7f</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">//This will call the first function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">200</span><span class="pun">,</span><span class="pln"> </span><span class="lit">100</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">//This will call the third function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">100</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20.7f</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">//This will call the fourth function</span><span class="pln">
   cout</span><span class="pun">&lt;&lt;</span><span class="pln">sum</span><span class="pun">(</span><span class="lit">90.8f</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">)&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">){</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">return</span><span class="pln"> a</span><span class="pun">+</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">float</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">float</span><span class="pln"> b</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> a</span><span class="pun">+</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">float</span><span class="pln"> b</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> a</span><span class="pun">+</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">float</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> a</span><span class="pun">+</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="lit">28.4</span><span class="pln">
</span><span class="lit">300</span><span class="pln">
</span><span class="lit">120.7</span><span class="pln">
</span><span class="lit">120.8</span></pre>
<h2>Function Overriding</h2>
<p><a href="https://beginnersbook.com/2017/09/cpp-function-overriding/">Function overriding</a> is a feature of <a href="https://beginnersbook.com/2017/08/cpp-oops-concepts/">OOPs Programming</a> that allows us to override a function of parent class in child class.<br>
<strong>Example:</strong></p>
<pre class="prettyprint prettyprinted" style=""><span class="com">#include</span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
</span><span class="com">//Parent class or super class or base class</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> A</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">void</span><span class="pln"> disp</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
&nbsp; &nbsp; &nbsp; &nbsp;cout</span><span class="pun">&lt;&lt;</span><span class="str">"Parent Class disp() function"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="pun">}</span><span class="pln">
&nbsp; &nbsp;</span><span class="kwd">void</span><span class="pln"> xyz</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">&nbsp; 
 &nbsp; &nbsp; &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"xyz() function of parent class"</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp;</span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="com">//child class or sub class or derived class</span><span class="pln">
</span><span class="kwd">class</span><span class="pln"> B </span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> A</span><span class="pun">{</span><span class="pln">
</span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
&nbsp; &nbsp; </span><span class="com">/* Overriding disp() function of parent class
&nbsp; &nbsp; &nbsp;* and giving a different definition to it.
&nbsp; &nbsp; &nbsp;*/</span><span class="pln">
&nbsp; &nbsp; </span><span class="kwd">void</span><span class="pln"> disp</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">&nbsp; 
 &nbsp; &nbsp; &nbsp; cout</span><span class="pun">&lt;&lt;</span><span class="str">"Child class disp() function"</span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp; </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(){</span><span class="pln">
    </span><span class="com">//Creating object of child class B</span><span class="pln">
&nbsp; &nbsp; B obj</span><span class="pun">;</span><span class="pln">
&nbsp; &nbsp; obj</span><span class="pun">.</span><span class="pln">disp</span><span class="pun">();</span><span class="pln">
    </span><span class="com">/* If you want to call the overridden function
&nbsp; &nbsp; &nbsp;* (the same function which is present in parent class)
&nbsp; &nbsp; &nbsp;* from the child class then assign the reference of
&nbsp; &nbsp; &nbsp;* parent class to the child class object.
&nbsp; &nbsp; &nbsp;*/</span><span class="pln">&nbsp;
  &nbsp; A obj2 </span><span class="pun">=</span><span class="pln"> B</span><span class="pun">();</span><span class="pln">
&nbsp; &nbsp; obj2</span><span class="pun">.</span><span class="pln">disp</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Output:</p>
<pre class="prettyprint prettyprinted" style=""><span class="typ">Child</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> disp</span><span class="pun">()</span><span class="pln"> </span><span class="kwd">function</span><span class="pln">
</span><span class="typ">Parent</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> disp</span><span class="pun">()</span><span class="pln"> </span><span class="kwd">function</span></pre>
<h2>Difference between function overloading and function overriding</h2>
<p>Now that we understand what is function overloading and overriding in <a href="https://beginnersbook.com/2017/08/c-plus-plus-tutorial-for-beginners/">C++ programming</a>, lets see the difference between them:</p>
<p>1) Function Overloading happens in the same class when we declare same functions with different arguments in the same class. Function Overriding is happens in the child class when child class overrides parent class function.<br>
2) In function overloading function signature should be different for all the overloaded functions. In function overriding the signature of both the functions (overriding function and overridden function) should be same.<br>
3) Overloading happens at the compile time thats why it is also known as compile time polymorphism while overriding happens at run time which is why it is known as run time polymorphism.<br>
4) In function overloading we can have any number of overloaded functions. In function overriding we can have only one overriding function in the child class.</p>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/09/cpp-function-overriding/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/09/cpp-virtual-functions-runtime-polymorphism/">Next ❯</a></div>
<div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
<!-- YARPP List -->

</div><footer class="entry-footer"></footer></article>
<div class="bb-nav"><a class="pretut" href="https://beginnersbook.com/2017/08/cpp-data-types/">❮ Previous</a><a class="nexttut" href="https://beginnersbook.com/2017/08/cpp-if-else-statement/">Next ❯</a></div>

                </div>
            </div>
        </div>
    </div>


</html>