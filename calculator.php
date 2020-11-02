<!doctype html>
<html ng-app="CalculatorApp">
<head>
    <title>Brac Bank Credit Card Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Brac Bank Credit Card Calculator" />
    <meta property="og:url" content="https://aislamfaisal.github.io/Brac-bank-credit-card-calculator/" />
    <meta property="og:site_name" content="Brac Bank Credit Card Calculator" />
    <meta property="og:image" content="http://www.aislamfaisal.com/wp-content/uploads/2014/02/bg.png" />
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Brac Bank Credit Card Calculator"/>
    <meta name="twitter:site" content="@aislamfaisal"/>
    <meta name="twitter:domain" content="Brac Bank"/>
    <meta name="twitter:image" content="http://www.aislamfaisal.com/wp-content/uploads/2014/02/bg.png"/>
    <meta name="twitter:creator" content="@aislamfaisal"/>
</head>
<body>
<div ng-controller="CalculatorController">
    <div class="container">
        <h1 class="text-center">Brac Bank credit card calculator</h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="calculateDay">Day</label>
                            <input type="number" class="form-control" ng-model="a" ng-keyup="result()"  placeholder="Put total day here">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="calculateAmount">Amount</label>
                            <input type="number" class="form-control" ng-model="b" ng-keyup="result()" id="calculateAmount" placeholder="Put your amount here">
                        </div>
                    </div>
                    <h3 class="text-center">Total Interest: {{ sum }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js" type="text/javascript"></script>
<script src="js/calculation.js" type="text/javascript"></script>
</body>
</html>
