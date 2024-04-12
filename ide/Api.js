// const express = require("express")
// const app = express()
// const cors = require('cors');
// app.use(cors());
// const bodyP = require("body-parser")
// const compiler = require("compilex")
// const options = { stats: true }
// compiler.init(options)
// app.use(bodyP.json())
// app.use("/codemirror-5.65.16", express.static("./codemirror-5.65.16"))
// app.get("/", function (req, res) {
//     compiler.flush(function () {
//         console.log("All Temporary files flushed")
//     })
//     res.sendFile("C:/wamp64/www/PrepPros/ide/index.html")
// })
// app.post("/compile", function (req, res) {
//     var code = req.body.code
//     var input = req.body.input
//     var lang = req.body.lang
//     try {

//         if (lang == "Cpp") {
//             if (!input) {
//                 var envData = { OS: "windows", cmd: "g++", options: { timeout: 10000 } }; // (uses g++ command to compile )
//                 compiler.compileCPP(envData, code, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 });
//             }
//             else {
//                 var envData = { OS: "windows", cmd: "g++", options: { timeout: 10000 } }; // (uses g++ command to compile )
//                 compiler.compileCPPWithInput(envData, code, input, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 });
//             }
//         }
//         else if (lang == "Java") {
//             if (!input) {
//                 var envData = { OS: "windows" };
//                 compiler.compileJava(envData, code, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 })
//             }
//             else {
//                 //if windows  
//                 var envData = { OS: "windows" };
//                 //else
//                 compiler.compileJavaWithInput(envData, code, input, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 })
//             }
//         }
//         else if (lang == "Python") {
//             if (!input) {
//                 var envData = { OS: "windows" };
//                 compiler.compilePython(envData, code, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 });
//             }
//             else {
//                 var envData = { OS: "windows" };
//                 compiler.compilePythonWithInput(envData, code, input, function (data) {
//                     if (data.output) {
//                         res.send(data);
//                     }
//                     else {
//                         res.send({ output: "error" })
//                     }
//                 });
//             }
//         }
//     }
//     catch (e) {
//         console.log("error")
//     }
// })

// app.listen(8000)

// Api.js
// const express = require("express");
// const app = express();
// const cors = require("cors");
// const bodyP = require("body-parser");
// const compiler = require("compilex");
// const path = require("path");

// const options = { stats: true };
// compiler.init(options);

// app.use(cors());
// app.use(bodyP.json());
// // Serve static files correctly using path.join
// app.use("/codemirror-5.65.16", express.static(path.join(__dirname, "codemirror-5.65.16")));

// app.get("/", function (req, res) {
//     compiler.flush(function () {
//         console.log("All Temporary files flushed");
//     });
//     // Serve index.html using path.join
//     res.sendFile(path.join(__dirname, "index.html"));
// });

// app.post("/compile", async function (req, res) {
//     try {
//         const code = req.body.code;
//         const input = req.body.input;
//         const lang = req.body.lang;

//         let envData = { OS: "windows" };

//         if (lang === "Cpp") {
//             envData.cmd = "g++";
//             envData.options = { timeout: 10000 };

//             if (input) {
//                 compiler.compileCPPWithInput(envData, code, input, handleCompileResponse);
//             } else {
//                 compiler.compileCPP(envData, code, handleCompileResponse);
//             }
//         }else if (lang === "C") {
//             envData.cmd = "g++";
//             envData.options = { timeout: 10000 };

//             if (input) {
//                 compiler.compileCPPWithInput(envData, code, input, handleCompileResponse);
//             } else {
//                 compiler.compileCPP(envData, code, handleCompileResponse);
//             }
//         } else if (lang === "Java") {
//             if (input) {
//                 compiler.compileJavaWithInput(envData, code, input, handleCompileResponse);
//             } else {
//                 compiler.compileJava(envData, code, handleCompileResponse);
//             }
//         } else if (lang === "Python") {
//             if (input) {
//                 compiler.compilePythonWithInput(envData, code, input, handleCompileResponse);
//             } else {
//                 compiler.compilePython(envData, code, handleCompileResponse);
//             }
//         } else {
//             res.status(400).send({ output: "Unsupported language" });
//         }
//     } catch (e) {
//         console.error("Error:", e);
//         res.status(500).send({ output: "Internal Server Error" });
//     }

//     function handleCompileResponse(data) {
//         if (data.output) {
//             res.send(data);
//         } else {
//             res.send({ output: "error" });
//         }
//     }
// });




// const PORT = 8000;
// app.listen(PORT, () => {
//     console.log(`Server is running on http://localhost:${PORT}`);
// });


// api.js
const express = require("express");
const app = express();
const cors = require("cors");
const bodyP = require("body-parser");
const compiler = require("compilex");
const path = require("path");

const options = { stats: true };
compiler.init(options);

app.use(cors());
app.use(bodyP.json());
app.use("/codemirror-5.65.16", express.static(path.join(__dirname, "codemirror-5.65.16")));

app.get("/", function (req, res) {
    compiler.flush(function () {
        console.log("All Temporary files flushed");
    });
    res.sendFile(path.join(__dirname, "index.html"));
});

app.post("/compile", async function (req, res) {
    try {
        const code = req.body.code;
        const input = req.body.input;
        const lang = req.body.lang;

        let envData = { OS: "windows" };

        if (lang === "Cpp") {
            envData.cmd = "g++";
            envData.options = { timeout: 10000 };

            if (input) {
                compiler.compileCPPWithInput(envData, code, input, handleCompileResponse);
            } else {
                compiler.compileCPP(envData, code, handleCompileResponse);
            }
        } else if (lang === "C") {
            envData.cmd = "gcc";  // Adjusted for C language
            envData.options = { timeout: 10000 };

            if (input) {
                compiler.compileCPPWithInput(envData, code, input, handleCompileResponse);
            } else {
                compiler.compileCPP(envData, code, handleCompileResponse);
            }
        } else if (lang === "Java") {
            if (input) {
                compiler.compileJavaWithInput(envData, code, input, handleCompileResponse);
            } else {
                compiler.compileJava(envData, code, handleCompileResponse);
            }
        } else if (lang === "Python") {
            if (input) {
                compiler.compilePythonWithInput(envData, code, input, handleCompileResponse);
            } else {
                compiler.compilePython(envData, code, handleCompileResponse);
            }
        } else {
            res.status(400).send({ output: "Unsupported language" });
        }
    } catch (e) {
        console.error("Error:", e);
        res.status(500).send({ output: "Internal Server Error" });
    }

    function handleCompileResponse(data) {
        if (data.output) {
            res.send(data);
        } else {
            res.send({ output: "error" });
        }
    }
});

const PORT = 8000;
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});