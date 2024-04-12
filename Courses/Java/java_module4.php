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
            <span class="mt-md-3">Java Multithreading Tutorial</span>
        </h1>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="project-wrap" style="color: black;">
                <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                    <div class="w-100 mb-4 mb-md-0">
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

                        <img class="hero-wrap" src="../../images/java-2.png">
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
                        <img class="hero-wrap" src="../../images/java-3.png">

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
                        <p> Here we have created our two thread classes for each thread. In the main method, we are simply creating objects of these thread classes where objects are now threads. So in main, we call thread using start() method over both the threads. Now start() method starts the thread and lookup for their run() method to run. Here both of our thread classes were having run()  methods, so both threads are put to run state from runnable by the scheduler, and output on the console is justified.</p>
                    </div>
                </div>
            </div>
        </div>
   

</body>

</html>