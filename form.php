<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Say Hello!</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="experience">Q1: How many years of experience do you have?</label>
                                <select class="form-control" id="experience">
                                    <option>0-3 years</option>
                                    <option>4-6 years</option>
                                    <option>7-10 years</option>
                                    <option>10+ years</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="background">Q2: What is your professional background?</label>
                                <select class="form-control" id="background">
                                    <option>Developer (Software Developer, SDE/SWE)</option>
                                    <option>Non Developer and IT Professional (Support/Network/QA Testing etc)</option>
                                    <option>Non-tech professional/Others (Product Manager, Designer, Marketing etc)</option>
                                    <option>Data Analyst/Business Analyst</option>
                                    <option>Data Scientist/Machine Learning Engineer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="employer">Q3: Where are you currently employed?</label>
                                <select class="form-control" id="employer">
                                    <option>Service Based Companies</option>
                                    <option>High Growth Startups</option>
                                    <option>Scaled Startups</option>
                                    <option>Product MNCs</option>
                                    <option>Big Tech Companies</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="career-track">Q4: Which career track do you want to choose?</label>
                                <select class="form-control" id="career-track">
                                    <option>Software Engineering</option>
                                    <option>Data Science</option>
                                    <option>Data Analytics</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
