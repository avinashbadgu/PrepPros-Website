<html>

<head>
    <title>Java Course</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
</head>


    <h1 class="mt-md-3" style="text-align: center;font-weight: bold;">
        <span class="mt-md-3">Servlets</span>
    </h1>
    <div class="col-md-12 d-flex align-items-stretch">
        <div class="project-wrap" style="color: black;">
            <div class="col-md-12 heading-section pr-md-5 d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
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
                    <img class="hero-wrap" src="../../images/servlet.webp">

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

                    <p>The <strong> server-side extensions </strong> are nothing but the technologies that are used to
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
                    <img class="hero-wrap" src="../../images/difference.png"><br><br>

                    <p><b>Servlets API’s:</b></p>

                    <p> Servlets are built from two packages:</p>
                    <ul>
                        <li>javax.servlet(Basic)</li>
                        <li>javax.servlet.http(Advance)</li>
                    </ul>

                    <b> Various classes and interfaces present in these packages are: </b><br><br>
                    <img class="hero-wrap" src="../../images/java-1.png"><br><br>

                    <p>Advantages of a Java Servlet</p>
                    <ul>

                        <li> Servlet is faster than CGI as it doesn’t involve the creation of a new process
                            for every new request received.</li>
                        <li>Servlets, as written in Java, are platform independent.</li>
                        <li>Removes the overhead of creating a <b>new process</b> for each request as Servlet
                            doesn’t run in a separate process. There is only a single instance that handles all requests
                            concurrently. This also saves the memory and allows a Servlet to easily manage the client
                            state.</li>
                        <li>It is a server-side component, so Servlet inherits the security provided by the
                            Web server.</li>
                        <li>The <b> API</b> designed for Java Servlet automatically acquires the advantages of the
                            Java platform such as platform-independent and portability. In addition, it obviously can
                            use
                            the wide range of APIs created on Java platforms such as <b>JDBC</b> to access the database.
                        </li>
                        <li>Many Web servers that are suitable for personal use or low-traffic websites are
                            offered for free or at extremely cheap costs eg. Java servlet. However, the majority of
                            commercial-grade Webservers are rather expensive, with the notable exception of Apache,
                            which is free.</li>
                    </ul>

                    <p><b>The Servlet Container</b></p>
                    <p>Servlet container, also known as Servlet engine, is an integrated set of objects
                    that provide a run time environment for Java Servlet components. In simple words, it is a
                    system that manages Java Servlet components on top of the Web server to handle the Web client
                    requests.</p>

                    <b>Services provided by the Servlet container:</b>
                    <ul>

                        <li><b>Network Services:</b> Loads a Servlet class. The loading may be from a local file
                        system, a remote file system or other network services. The Servlet container provides thenetwork services over
                        which the request and response are sent.</li>
                       <li> <b>Decode and Encode MIME-based messages:</b> Provides the service of decoding and
                        encoding MIME-based
                        messages.</li>
                        <li><b>Manage Servlet container:</b> Manages the lifecycle of a Servlet.
                        Resource management Manages the static and dynamic resources, such as HTML
                        files, Servlets, and
                        JSP pages.</li>
                       <li> <b>Security Service:</b> Handles authorization and authentication of resource access.</li>
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
        </div>
    </div>


</html>