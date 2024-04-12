<!DOCTYPE html>
<html lang="en">

<head>
	<title>Java Course</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<style>
		nav a {
			list-style: none;
			/* padding: 40px; */
			color: gray;
			font-size: 1.1em;
			display: block;
			transition: all 0.3s ease-in-out;
		}

		.noshow {
			opacity: 0;
		}

		nav a:hover {
			color: purple;
			transform: scale(1.2);
			cursor: pointer;
		}

		.container {
			display: block;
			background: #FFFFFF;
			position: relative;
			box-shadow: 2px 5px 20px rgba(119, 119, 119, 0.5);
		}

		nav a:first-child {
			margin-top: 17px;
		}

		.rightbox {
			float: right;
			width: 100%;
			height: 100%;
		}

		.active {
			color: gold;
		}

		.about,
		.module1,
		.module2,
		.module3,
		.module4 {
			transition: opacity 0.5s ease-in;
			position: absolute;
			width: 100%;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg ftco-navbar-light1" id="ftco-navbar">
		<a class="navbar-brand img d-flex justify-content-center" href="index.html"
			style="background-image: url('images/logo.png'); height: 90x; width: 90px;"></a>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="profile.html" class="nav-link">My Profile</a></li>
			</ul>
		</div>
	</nav>
	<!-- END nav -->

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="sidebar1">
				<nav>
					<div class="sidebar-box bg-white p-4 ftco-animate">
						<div class="form-group">
							<h3 class="heading-sidebar text-center">Java Course</h3>
						</div>
						<a id="about" class="active">About the course</a>
						<a id="help">Help and Support</a>
					</div>
					<div class="sidebar-box bg-white p-4 ftco-animate">
						<div class="form-group">
							<h3 class="heading-sidebar text-center">Index</h3>
						</div>
						<a id="module1">Module 1</a>
						<a id="module2">Module 2</a>
						<a id="module3">Module 3</a>
						<a id="module4">Module 4</a>
					</div>
				</nav>
			</div>

			<!-- about the course -->
			<div class="rightbox">
				<div class="about">
					<div class="col-lg-9-1">
						<h1 class="mt-md-3" style="text-align: center; color: #fff; font-weight: bold;">
							<span class="mt-md-3">Java</span>
						</h1>
						<p style="color: #C41E3A; background-color: #fff; font-weight: bold; border-radius: 100px;">
							4 Modules</p>

						<div class="w-100 mb-4 mb-md-0">
							<h2 class="mb-4">About the course</h2>
							<p>
								Welcome to the Advanced course of Java for placement!</p>

							<p>During this course, you will learn the algorithms and
								object-oriented
								programming
								through the Java programming language. The course includes
								comprehensive
								materials and plenty of programming exercises - all of which are
								tested
								using
								our automatic testing service of MCQs and codes.</p>

							Anyone can join - but previous basic java programming knowledge is
							required.

							<p>Unlike many programming courses found online, ours is completely
								unabridged;
								the
								course’s scope and material are identical to our CS1
								Introduction to
								Programming
								and Advanced Programming courses.</p>

							<p>This is the first course in our computer science learning track,
								and we
								use
								industry-grade tooling from day one. As such, the course is
								about
								programming in
								a real integrated development environment (IDE) instead of a
								browser or
								an
								educational IDE.</p>

							<p>The course does not require separate registration. You can simply
								dive
								into
								the
								first part of the course found over here.</p>

							Course Contents
							The course is split up into 4 modules: Java Programming I and Java
							Programming
							II.
							Each course consists of seven parts, each with its own exercise set.
							Completing
							a
							single part takes approximately 5-20 hours, and we recommend
							reserving at
							least
							10
							hours per part, depending on prior skills with computers.
							</p>
						</div>
					</div>
				</div>

				<!-- module 1 -->
				<div class="module1 noshow">
					<div class="col-lg-9-1">
						<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
							<span class="mt-md-3">Servlets</span>
						</h1>
						<p> Servlets are the Java programs that run on the
							Java-enabled web server or application server.
							They are used to handle the request obtained from the web server, process the
							request, produce
							the response, and then send a response back to the web server.</p>

						The properties of Servlets are as follows:
						<ul>

							<li> Servlets work on the server side.</li>
							<li>Servlets are capable of handling complex requests obtained from the web server.</li>
						</ul>
						Servlet Architecture can be depicted from the image itself as provided below as
						follows:
						<img class="hero-wrap" src="images/servlet.webp">

						Servlet Architecture

						<p>Execution of Servlets basically involves six basic steps:</p>
						<ul>

							<li> clients send the request to the webserver.</li>
							<li>The web server receives the request.</li>
							<li>The web server passes the request to the corresponding servlet.</li>
							<li>The servlet processes the request and generates the response in the form of
								output.</li>
							<li>The servlet sends the response back to the webserver.</li>
							<li>The web server sends the response back to the client and the client browser
								displays it on the screen.</li>
						</ul>

						<p>Now let us do discuss eccentric point that why do we need For Server-Side
							extensions?</p>

						<p>The <strong> server-side extensions </strong> are nothing but the technologies that are used
							to
							create dynamic Web
							pages. Actually, to provide the facility of dynamic Web pages, Web pages need a
							container or Web
							server. To meet this requirement, independent Web server providers offer some
							proprietary
							solutions in the form of <strong> APIs </strong> (Application Programming Interface).</p>

						<p>These <b>APIs</b> allow us to build programs that can run with a Web server. In this
							case, Java Servlet
							is also one of the component APIs of <b>Java Platform Enterprise Edition (nowadays
								known as –
								‘Jakarta EE’)</b> which sets standards for creating dynamic Web applications in
							Java.</p>

						<p>Before learning about something, it’s important to know the need for that
							something, it’s not
							like that this is the only technology available for creating dynamic Web pages.
							The Servlet
							technology is similar to other Web server extensions such as Common Gateway
							Interface (CGI)
							scripts and Hypertext Preprocessor (PHP). However, Java Servlets are more
							acceptable since they
							solve the limitations of CGI such as low performance and low degree scalability.</p>

						<b>What is CGI?</b><br>

						<p>CGI is actually an external application that is written by using any of the
							programming
							languages like C or C++ and this is responsible for processing client requests
							and generating
							dynamic content.
							In CGI application, when a client makes a request to access dynamic Web pages,
							the Web server
							performs the following operations:</p>
						<ul>
							<li>It first locates the requested web page i.e the required CGI application using
								URL.</li>
							<li>It then creates a new process to service the client’s request.</li>
							<li>Invokes the CGI application within the process and passes the request
								information to the
								application.</li>
							<li>Collects the response from the CGI application.</li>
							<li>Destroys the process, prepares the HTTP response, and sends it to the client.</li>
							<li>Common Gateway Interface Processing</li>
						</ul>

						<p>So, in CGI server has to create and destroy the process for every request. It’s
							easy to
							understand that this approach is applicable for handling few clients but as the
							number of
							clients increases, the workload on the server increases and so the time is taken
							to process
							requests increases.</p>

						<p>Difference between Servlet and CGI</p>
						<img class="hero-wrap" src="images/difference.png"><br><br>

						<p><b>Servlets API’s:</b></p>

						<p> Servlets are built from two packages:</p>
						<ul>
							<li>javax.servlet(Basic)</li>
							<li>javax.servlet.http(Advance)</li>
						</ul>

						<b> Various classes and interfaces present in these packages are: </b><br><br>
						<img class="hero-wrap" src="images/java-1.png"><br><br>

						<p>Advantages of a Java Servlet</p>
						<ul>

							<li> Servlet is faster than CGI as it doesn’t involve the creation of a new process
								for every new request received.</li>
							<li>Servlets, as written in Java, are platform independent.</li>
							<li>Removes the overhead of creating a <b>new process</b> for each request as Servlet
								doesn’t run in a separate process. There is only a single instance that handles all
								requests
								concurrently. This also saves the memory and allows a Servlet to easily manage the
								client
								state.</li>
							<li>It is a server-side component, so Servlet inherits the security provided by the
								Web server.</li>
							<li>The <b> API</b> designed for Java Servlet automatically acquires the advantages of the
								Java platform such as platform-independent and portability. In addition, it obviously
								can
								use
								the wide range of APIs created on Java platforms such as <b>JDBC</b> to access the
								database.
							</li>
							<li>Many Web servers that are suitable for personal use or low-traffic websites are
								offered for free or at extremely cheap costs eg. Java servlet. However, the majority of
								commercial-grade Webservers are rather expensive, with the notable exception of Apache,
								which is free.</li>
						</ul>

						<p><b>The Servlet Container</b></p>
						<p>Servlet container, also known as Servlet engine, is an integrated set of objects
							that provide a run time environment for Java Servlet components. In simple words, it is a
							system that manages Java Servlet components on top of the Web server to handle the Web
							client
							requests.</p>

						<b>Services provided by the Servlet container:</b>
						<ul>

							<li><b>Network Services:</b> Loads a Servlet class. The loading may be from a local file
								system, a remote file system or other network services. The Servlet container provides
								thenetwork services over
								which the request and response are sent.</li>
							<li> <b>Decode and Encode MIME-based messages:</b> Provides the service of decoding and
								encoding MIME-based
								messages.</li>
							<li><b>Manage Servlet container:</b> Manages the lifecycle of a Servlet.
								Resource management Manages the static and dynamic resources, such as HTML
								files, Servlets, and
								JSP pages.</li>
							<li> <b>Security Service:</b> Handles authorization and authentication of resource access.
							</li>
							<li><b>Session Management:</b> Maintains a session by appending a session ID to the URL
								path.</li>
						</ul>

						<h3><b>Conclusion</b></h3>
						<b>Java Servlets</b> are crucial components for defining business logic and handling
						complex web
						requests. These components promote the dynamic development of a web site and has
						a lot of
						potential to change the application dynamics. Here are some of the key features
						we learn in this
						article:
						<ul>

							<li>Java Servlets aids in the development of server-side application development and
								provide a way
								to deal with dynamic content to build robust and interactive websites.</li>
							<li>As soon as the request reaches the web server, a servlet instance is initialized
								using init()
								method, and the HTTP request depending on its type can be handled by doGet() or
								doPost()
								methods.</li>
							<li>Servlets make our web application more responsive and efficient as it doesn’t
								create and destroy
								a process every time a request is received.</li>
						</ul>
					</div>
				</div>

				<!-- module 2 -->
				<div class="module2 noshow">
					<div class="col-lg-9-1">
						<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
							<span class="mt-md-3">Java Multithreading Tutorial</span>
						</h1>
						<p>Threads are the backbone of multithreading. In the real world, surrounded by numerous
							applications, achieving the required speed to run them simultaneously is not possible unless
							we introduce the concept of multitasking efficiently. It is achieved by the concept of a
							thread.</p>

						<h2>Real-life Example</h2>

						<p>Suppose you are using two tasks at a time on the computer, such as using Microsoft Word and
							listening to music. These two tasks are called processes. Multitasking occurs when you start
							typing in Word and simultaneously start the music app. If an exception occurs in Word,
							indicating a mistake, it means Word is a process broken down into sub-processes. If the
							machine is dual-core, each core handles one process or task.</p>

						<p>In this example, both multiprocessing and multithreading are indirectly used to achieve
							multitasking. In this way, the mechanism of dividing the tasks is called multithreading,
							where every process or task is called by a thread, and a thread is responsible for when to
							execute, when to stop, and how long to be in a waiting state. Hence, a thread is the
							smallest unit of processing, whereas multitasking is a process of executing multiple tasks
							at a time.</p>

						<h2>Multitasking</h2>

						<p>Multitasking is achieved in two ways:</p>

						<ul>
							<li><strong>Multiprocessing:</strong> Process-based multitasking is a heavyweight process
								and occupies different address spaces in memory. Switching from one process to another
								requires some time, causing a lag.</li>
							<li><strong>Multithreading:</strong> Thread-based multitasking is a lightweight process and
								occupies the same address space. Switching cost is very low.</li>
						</ul>

						<h2>Thread Lifecycle</h2>

						<p>The lifecycle of a thread is illustrated as follows:</p>

						<ul>
							<li><strong>New:</strong> When a thread is just created.</li>
							<li><strong>Runnable:</strong> When the start() method is called, processed by the thread
								scheduler.</li>
							<ul>
								<li>Case A: Can be a running thread</li>
								<li>Case B: Cannot be a running thread</li>
							</ul>
							<li><strong>Running:</strong> When it hits case 1 means the scheduler has selected it to run
								the thread from the runnable state to the run state.</li>
							<li><strong>Blocked:</strong> When it hits case 2 meaning the scheduler has selected not to
								allow a thread to change state from runnable to run.</li>
							<li><strong>Terminated:</strong> When the run() method exits or stop() method is called over
								a thread.</li>
						</ul>

						<img class="hero-wrap" src="images/java-2.png">
						<h2>Process Scheduling Algorithms</h2>

						<p>If we incorporate threads in operating systems, process scheduling algorithms in operating
							systems work on the same concept, incorporating threads in Gantt charts. Some popular
							scheduling algorithms are:</p>

						<ul>
							<li>First In First Out</li>
							<li>Last In First Out</li>
							<li>Round Robin Scheduling</li>
						</ul>

						<p>Imagine the concept of Deadlock in operating systems with threads – how the switching is
							computed internally if one only has an overview of them.</p>

						<h2>Advantages of Multithreading</h2>

						<ul>
							<li>The user is not blocked as threads are independent. Even if there is an issue with one
								thread, only the corresponding process will be stopped, and the rest of the operations
								will be computed successfully.</li>
							<li>Saves time as too many operations are carried out at the same time, causing work to get
								finished faster. Without using threads, only one process will be handled by the
								processor.</li>
							<li>Threads are independent though sharing the same address space.</li>
						</ul>

						<h2>Why Do We Need Multithreading?</h2>

						<p>Now, let's discuss scenarios where multithreading is needed and where it is implemented:</p>

						<ol>
							<li><strong>Thread Class</strong></li>
							<li><strong>Mobile applications</strong></li>
							<li><strong>Asynchronous thread</strong></li>
							<li><strong>Web applications</strong></li>
							<li><strong>Game Development</strong></li>
						</ol>

						<p>Note: By default, we only have one main thread, which is responsible for the main thread
							exception even without prior knowledge of multithreading.</p>

						<h2>Two Ways to Implement Multithreading</h2>

						<p>There are two ways to implement multithreading:</p>

						<ol>
							<li><strong>Using Thread Class</strong></li>
							<li><strong>Using Runnable Interface</strong></li>
						</ol>

						<h2>Method 1: Using Thread Class</h2>

						<p>Java provides the Thread class to achieve programming invoking threads. Some major methods of
							the Thread class are shown below in a tabular format with the actions performed by them:</p>

						<table border="1" style="width: 100%; margin: 15px; margin-top: 20px;">
							<tr class="table">
								<th>Methods</th>
								<th>Action Performed</th>
							</tr>
							<tr class="table">
								<td>isDaemon()</td>
								<td>Checks whether the current thread is daemon or not</td>
							</tr>
							<tr class="table">
								<td>start()</td>
								<td>Starts the execution of the thread</td>
							</tr>
							<tr class="table">
								<td>run()</td>
								<td>Executes the operations statements in the body of this method over a thread</td>
							</tr>
							<tr class="table">
								<td>sleep()</td>
								<td>Static method that puts the thread to sleep for a certain time passed as an argument
								</td>
							</tr>
							<tr class="table">
								<td>wait()</td>
								<td>Sets the thread back in the waiting state</td>
							</tr>
							<tr class="table">
								<td>notify()</td>
								<td>Gives out a notification to one thread that is in waiting state</td>
							</tr>
							<tr class="table">
								<td>notifyAll()</td>
								<td>Gives out a notification to all the threads in the waiting state</td>
							</tr>
							<tr class="table">
								<td>setDaemon()</td>
								<td>Sets the current thread as a Daemon thread</td>
							</tr>
							<tr class="table">
								<td>stop()</td>
								<td>Used to stop the execution of the thread</td>
							</tr>
							<tr class="table">
								<td>resume()</td>
								<td>Used to resume the suspended thread</td>
							</tr>
						</table>

						<h1>Pre-requisites: Basic syntax and methods to deal with threads</h1>

						<p>Now let us come up with how to set the name of the thread. By default, threads are named
							thread-0, thread-1, and so on. But there is also a method that is often used as setName()
							method. Also corresponding to it there is a method getName() which returns the name of the
							thread be it default or settled already by using setName() method. The syntax is as follows:
						</p>

						<p><strong>Syntax:</strong></p>

						<ol>
							<li>Returning the name of the thread</li>
							<code>public String getName();</code>
							<li>Changing the name of the thread</li>
							<code>public void setName(String name);</code>
						</ol>

						<p>Taking a step further, let us dive into the implementation part to understand more concepts
							about multithreading. So, there are basically two ways of implementing multithreading:</p>

						<p><strong>Illustration:</strong> Consider if one has to multiply all elements by 2 and there
							are 500 elements in an array.</p>
						<img class="hero-wrap" src="images/java-3.png">

						<h2>Examples</h2>

						<pre>
                            <code>
                                // Case 1 
                                // Java Program to illustrate Creation and execution of 
                                // thread via start() and run() method in Single inheritance
                                
                                // Class 1 
                                // Helper thread Class extending main Thread Class 
                                class MyThread1 extends Thread { 
                                
                                    // Method inside MyThread2 
                                    // run() method which is called as 
                                    // soon as thread is started 
                                    public void run() 
                                    { 
                                
                                        // Print statement when the thread is called 
                                        System.out.println("Thread1 is running"); 
                                    } 
                                } 
                                
                                // Class 2 
                                // Main thread Class extending main Thread Class 
                                class MyThread2 extends Thread { 
                                
                                    // Method inside MyThread2 
                                    // run() method which is called  
                                    // as soon as thread is started 
                                    public void run() 
                                    { 
                                
                                        // run() method which is called as soon as thread is 
                                        // started 
                                
                                        // Print statement when the thread is called 
                                        System.out.println("Thread2 is running"); 
                                    } 
                                } 
                                
                                // Class 3 
                                // Main Class 
                                class GFG { 
                                
                                    // Main method 
                                    public static void main(String[] args) 
                                    { 
                                
                                        // Creating a thread object of our thread class 
                                        MyThread1 obj1 = new MyThread1(); 
                                        MyThread2 obj2 = new MyThread2(); 
                                
                                        // Getting the threads to the run state 
                                
                                        // This thread will transcend from runnable to run 
                                        // as start() method will look for run() and execute 
                                        // it 
                                        obj1.start(); 
                                
                                        // This thread will also transcend from runnable to 
                                        // run as start() method will look for run() and 
                                        // execute it 
                                        obj2.start(); 
                                    } 
                                }
                            </code>
                        </pre>
						<div style="border: 1px solid #ccc; padding: 10px; margin-top: 10px;">
							<strong>Output:</strong>
							<p>Case 1:</p>
							<!-- <pre> -->
							<code>
                                    Thread1 is running<br>
                                    Thread2 is running
                                </code>
							<!-- </pre> -->
						</div>
						<p> Here we have created our two thread classes for each thread. In the main method, we are
							simply creating objects of these thread classes where objects are now threads. So in main,
							we call thread using start() method over both the threads. Now start() method starts the
							thread and lookup for their run() method to run. Here both of our thread classes were having
							run() methods, so both threads are put to run state from runnable by the scheduler, and
							output on the console is justified.</p>

					</div>
				</div>

				<!-- module 3 -->
				<div class="module3 noshow">
					<div class="col-lg-9-1">
						<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
							<span class="mt-md-3">Packages in Java</span>
						</h1>
						<p>A package in Java is a mechanism to encapsulate a group of classes, sub packages, and
							interfaces. Packages are used for:</p>

						<ul>
							<li>Preventing naming conflicts.</li>
							<li>Making searching and usage of classes easier.</li>
							<li>Providing controlled access.</li>
							<li>Data encapsulation (or data-hiding).</li>
						</ul>

						<p>How packages work:</p>
						<ul>
							<li><strong>Package Names and Directory Structure:</strong> Package names and directory
								structure are closely related. For example, if a package name is college.staff.cse, then
								there are three directories: college, staff, and cse. cse is present in staff, and staff
								is present inside college. The directory college is accessible through the CLASSPATH
								variable, ensuring easy class location.</li>

							<li><strong>Package Naming Conventions:</strong> Packages are named in reverse order of
								domain names, e.g., org.geeksforgeeks.practice. In a college, the recommended convention
								is college.tech.cse, college.tech.ee, college.art.history, etc.</li>

							<li><strong>Adding a Class to a Package:</strong> More classes can be added to a created
								package by using the package name at the top of the program and saving it in the package
								directory. A new Java file is needed to define a public class, or the new class can be
								added to an existing .java file and recompiled.</li>

							<li><strong>Subpackages:</strong> Packages inside another package are subpackages. They are
								not imported by default and must be explicitly imported. Members of a subpackage have no
								access privileges; they are considered a different package for protected and default
								access specifiers.</li>
						</ul>
						Example:

						<code>import java.util.*;</code>

						<p><strong>util</strong> is a subpackage created inside the <strong>java</strong>.</p>

						<p><strong>Accessing classes inside a package:</strong></p>
						<!-- <code> -->
						<pre class="code1">
                        // import the Vector class from util package.
                        import java.util.Vector;

                        // import all the classes from util package
                        import java.util.*;

                        // All the classes and interfaces of this package
                        // will be accessible but not subpackages.
                        import package.*;

                        // Only mentioned class of this package will be accessible.
                        import package.classname;

                        // Class name is generally used when two packages have
                        // the same class name. For example, in the below code, both packages have
                        // the date class, so using a fully qualified name to avoid conflict
                        import java.util.Date;
                        import my.package.Date;

                        // Java program to demonstrate accessing of members when
                        // corresponding classes are imported and not imported.
                        import java.util.Vector;

                        public class ImportDemo {
                            public ImportDemo() {
                                // java.util.Vector is imported; hence, we are
                                // able to access directly in our code.
                                Vector newVector = new Vector();

                                // java.util.ArrayList is not imported; hence
                                // we were referring to it using the complete
                                // package.
                                java.util.ArrayList newList = new java.util.ArrayList();
                            }

                            public static void main(String arg[]) {
                                new ImportDemo();
                            }
                        }
                        </pre>
						<!-- </code> -->

						<h2>Types of Packages</h2>
						<img class="hero-wrap" src="images/java-4.png">
						<ol>
							<li><strong>Built-in Packages:</strong> These packages consist of a large number of classes
								which are a part of Java API. Some commonly used built-in packages include:</li><br>
							<ul>
								<li><strong>java.lang:</strong> Contains language support classes(e.g classed which
									defines primitive data types, math operations). This package is automatically
									imported.</li>

								<li><strong>java.io: </strong> Contains classed for supporting input / output
									operations.</li>

								<li><strong> java.util:</strong> Contains utility classes which implement data
									structures like Linked List, Dictionary and support ; for Date / Time operations.
								</li>

								<li><strong>java.applet: </strong> Contains classes for creating Applets.</li>

								<li><strong> java.awt: </strong> Contain classes for implementing the components for
									graphical user interfaces (like button ,menus etc).</li>

								<li><strong> java.net: </strong> Contain classes for supporting networking operations.
								</li>
							</ul><br>
							<li><strong>User-defined Packages:</strong> These are packages defined by the user. Example:
							</li>
							<p>These are the packages that are defined by the user. First we create a directory
								<strong>myPackage</strong> (name should be same as the name of the package). Then create
								the <strong>MyClass</strong> inside the directory with the first statement being the
								<strong>package names.</strong>
							</p><br>
							<pre>
                                // Name of the package must be same as the directory
                                // under which this file is saved
                                package myPackage;

                                public class MyClass
                                {
                                    public void getNames(String s)
                                    {
                                        System.out.println(s);
                                    }
                                }
                            </pre>
							<p>Now we can use the <strong>MyClass class</strong> in our program.</p><br>
							<pre>
                                /* import 'MyClass' class from 'names' myPackage */
                                import myPackage.MyClass;

                                public class PrintName 
                                {
                                public static void main(String args[]) 
                                {       
                                    // Initializing the String variable 
                                    // with a value 
                                    String name = "GeeksforGeeks";
                                    
                                    // Creating an instance of class MyClass in 
                                    // the package.
                                    MyClass obj = new MyClass();
                                    
                                    obj.getNames(name);
                                }
                                }
                            </pre>
							<p><strong>Note : MyClass.java</strong> must be saved inside the <strong>myPackage</strong>
								directory since it is a part of the package.</p>
						</ol>
					</div>
				</div>

				<!-- module 4 -->
				<div class="module4 noshow">
					<div class="col-lg-9-1">
						<h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
							<span class="mt-md-3">File Handling</span>
						</h1>
						<h1>Creating a New File in Java</h1>

						<p>A <strong>File</strong> is an abstract path; it has no physical existence. It is only when
							"using" that <strong>File</strong> that the underlying physical storage is accessed. Here
							are the steps to create a new file in Java:</p>

						<ol>
							<li>
								<p>First, to create a new file, inbuilt files and functions are used, which may throw
									exceptions. Exception handling techniques, such as try-catch blocks, are used to
									deal with these exceptions.</p>
							</li>

							<li>
								<p>Additionally, the <code>File</code> class is imported for handling file-related
									operations. The <code>File</code> object is created using the syntax:</p>
								<pre><code>File object_name = new File(Directory)</code></pre>
							</li>
						</ol>

						<p>There are two standard methods to create a new file in Java, either directly with the help of
							the <code>File</code> class or indirectly with the help of <code>FileOutputStream</code> by
							creating an object of the file in both approaches.</p>

						<p>Both classes provide some methods which are mainly used to perform operations regarding
							files, such as creating, writing, comparing two path names, checking whether a specific file
							is present, and many more. Below is an example for creating a new file using the
							<code>File</code> class:
						</p>

						<h2>Java Program to Create a New File using the File Class</h2>

						<pre><code>
                        import java.io.File;

                        public class CreateFileExample {
                            public static void main(String[] args) {
                                try {
                                    // Specify the directory and file name
                                    File newFile = new File("path/to/directory/MyFile.txt");

                                    // Create a new file
                                    if (newFile.createNewFile()) {
                                        System.out.println("File created: " + newFile.getName());
                                    } else {
                                        System.out.println("File already exists.");
                                    }
                                } catch (Exception e) {
                                    System.out.println("An error occurred: " + e.getMessage());
                                }
                            }
                        }
                        </code></pre>
						<h3>Explanation of Java File Creation Code</h3>

						<p>The provided Java code demonstrates how to create a new file using the <code>File</code>
							class in Java. Here's a breakdown of the code:</p>

						<ol>
							<li>
								<p><strong>Importing the necessary package:</strong></p>
								<pre><code>import java.io.File;</code></pre>
								<p>This line imports the <code>File</code> class, which provides methods for working
									with files and directories in Java.</p>
							</li>

							<li>
								<p><strong>Creating a Java class:</strong></p>
								<pre><code>public class CreateFileExample {</code></pre>
								<p>The code defines a public class named <code>CreateFileExample</code>.</p>
							</li>

							<li>
								<p><strong>Defining the main method:</strong></p>
								<pre><code>public static void main(String[] args) {</code></pre>
								<p>The <code>main</code> method is the entry point of the program, and it is where the
									file creation logic is implemented.</p>
							</li>

							<li>
								<p><strong>Using try-catch block for exception handling:</strong></p>
								<pre><code>try {</code></pre>
								<pre><code>    // Specify the directory and file name</code></pre>
								<pre><code>    File newFile = new File("path/to/directory/MyFile.txt");</code></pre>
								<pre><code>    // Create a new file</code></pre>
								<pre><code>    if (newFile.createNewFile()) {</code></pre>
								<pre><code>        System.out.println("File created: " + newFile.getName());</code></pre>
								<pre><code>    } else {</code></pre>
								<pre><code>        System.out.println("File already exists.");</code></pre>
								<pre><code>    }</code></pre>
								<pre><code>} catch (Exception e) {</code></pre>
								<pre><code>    System.out.println("An error occurred: " + e.getMessage());</code></pre>
								<pre><code>}</code></pre>
								<p>The code within the <code>try</code> block attempts to create a new file. If
									successful, it prints a message indicating the file creation. If the file already
									exists, it prints a corresponding message. If an exception occurs, the
									<code>catch</code> block handles it and prints an error message.
								</p>
							</li>
						</ol>

						<p>This Java program creates a new file named "MyFile.txt" in the specified directory. It uses
							the <code>createNewFile()</code> method of the <code>File</code> class to perform the file
							creation operation.</p>

						<h3>Creating a New File in Java using FileOutputStream Class</h3>

						<p>The <code>FileOutputStream</code> class in Java is an output stream that can be used to write
							data to a file. It is typically used for objects that already exist. Below is the syntax and
							an example of using the <code>FileOutputStream</code> class:</p>

						<p><strong>Syntax:</strong></p>
						<code>FileOutputStream</code>

						<p><strong>Example:</strong></p>
						<code>echo > myFile.txt</code>

						<p><strong>Implementation of the FilesOutputStream Class:</strong></p>
						<pre><code>
                        import java.io.FileOutputStream;
                        import java.io.IOException;
                        
                        public class CreateFileWithFileOutputStream {
                            public static void main(String[] args) {
                                // Specify the file path
                                String filePath = "path/to/directory/MyFile.txt";
                        
                                try {
                                    // Create a FileOutputStream object
                                    FileOutputStream outputStream = new FileOutputStream(filePath);
                        
                                    // Write data to the file (e.g., write a string)
                                    String data = "Hello, this is content for the new file!";
                                    byte[] byteArray = data.getBytes();
                                    outputStream.write(byteArray);
                        
                                    // Close the FileOutputStream
                                    outputStream.close();
                        
                                    System.out.println("File created successfully!");
                                } catch (IOException e) {
                                    System.out.println("An error occurred: " + e.getMessage());
                                }
                            }
                        }
                        </code></pre>

						<p>This Java program uses the <code>FileOutputStream</code> class to create a new file named
							"MyFile.txt" and write content to it. The content, in this case, is the string "Hello, this
							is content for the new file!". The program handles potential IOExceptions with a
							<code>try-catch</code> block.
						</p>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>

	<script>
		/*active button class onclick*/
		$('nav a').click(function (e) {
			e.preventDefault();
			$('nav a').removeClass('active');
			$(this).addClass('active');
			if (this.id === !'module1') {
				$('.module1').addClass('noshow');
			}
			else if (this.id === 'module1') {
				$('.module1').removeClass('noshow');
				$('.rightbox').children().not('.module1').addClass('noshow');
			}
			else if (this.id === 'about') {
				$('.about').removeClass('noshow');
				$('.rightbox').children().not('.about').addClass('noshow');
			}
			else if (this.id === 'module2') {
				$('.module2').removeClass('noshow');
				$('.rightbox').children().not('.module2').addClass('noshow');
			}
			else if (this.id === 'module3') {
				$('.module3').removeClass('noshow');
				$('.rightbox').children().not('.module3').addClass('noshow');
			}
			else if (this.id === 'module4') {
				$('.module4').removeClass('noshow');
				$('.rightbox').children().not('.module4').addClass('noshow');
			}
		});
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>