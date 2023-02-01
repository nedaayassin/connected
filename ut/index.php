<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Mohave';
        }
        ._main {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0px;
            top: 0px;
            background: #DDF2DE;
        }
        .leftSide {
            position: absolute;
            width: 70px;
            height: 100%;
            left: 0px;
            top: 0px;
            background: #F5F5F5;
        }
        .top-info {
            position: relative;
            width: 90%;
            height: 203px;
            margin: auto;
            left: 35px;
            top: 54px;
            background: #F5F5F5;
            border-radius: 15px;
            padding: .5rem;
        }
        .top-info div img {
            margin: auto;
            border-radius: 50%;
            width: 100px;
            margin-top: 10px;
        }
        ._history div img {
            margin: auto;
            border-radius: 50%;
            width: 60px;
            margin-top: 10px;
            margin-left: 20px;
        }
        ._more {
            position: relative;
            /* width: 454px; */
            /* left: calc(100% - 480px); */
            top: -20px;
            vertical-align: middle;
            background: rgba(236, 109, 83, 0.47);
            border-radius: 15px;
        }
        ._filters {
            position: relative;
            width: 90%;
            margin: auto;
            left: 35px;
            top: 75px;
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
        }
        ._history {
            position: relative;
            width: 90%;
            margin: auto;
            left: 35px;
            top: 75px;
            height: 76px;
            background: #F5F5F5;
            border-radius: 15px;
        }
        ._history:not(._i_0) {
            margin-top: 15px;
        }
        ._details {
            position: relative;
            width: 90%;
            margin: auto;
            left: 35px;
            top: 90px;
            height: 435px;
            background: #F5F5F5;
            border-radius: 15px;
        }
        h3._name {
            font-weight: 700;
            font-size: 32px;
            line-height: 45px;
        }
        .col-form-label, .form-control-plaintext {
            font-size: 20px;
            line-height: 28px;
        }
        .col-form-label {
            font-weight: 600;
        }
        .form-control-plaintext {
            font-weight: 400;
        }
        ._more .form-control-plaintext {
            font-weight: 600;
            color: #FFFFFF;
        }
        ._filters .col-form-label {
            color: rgba(0, 0, 0, 0.49) !important;
        }
        ._history td {
            text-align: center;
        }
        ._td {
            color: rgba(0, 0, 0, 0.49);
        }
        ._td2 {
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            color: #000000;
        }
        ._td3 {
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            color: rgba(0, 0, 0, 0.49);
            min-width: 100px;
            padding: .5rem;
        }
        ._td4 {
            font-weight: 700;
            font-size: 18px;
            line-height: 25px;
            color: #3E597F;
            min-width: 100px;
            padding: .5rem;
        }
        div#chartContainer canvas.canvasjs-chart-canvas {
            background: rgba(154, 194, 216, 0.47);
            border-radius: 15px;
        }
        /* table.tb:not(.tb1, .tb2, .tb3) {
            background: rgba(154, 194, 216, 0.47);
            border-radius: 15px;
        } */
        ._col {
            background-color: #c7deed;
            border-radius: 15px;
            height: 100%;
            padding: 1rem;
        }
        a.canvasjs-chart-credit {
            display: none;
        }
        ._col.prescription {
            background-image: url(./images/chart.png);
            background-position: center;
            background-size: 100% 100%;
            min-height: 200px;
        }
        .sign-result {
            font-weight: 400;
            font-size: 5px;
            line-height: 7px;
            color: rgba(0, 0, 0, 0.49);
        }
    </style>
</head>
<body>

<?php
    $data = array(
        'info' => array(
            'name' => 'Ahmed Saad',
            'patient_id' => '32134223',
            'address' => '233, Jeddah, Saudi Arabia',
            'birhtdate' => '1 Apr 1991',
            'contact' => '056454505',
        ),
        'histories' => array(
            array(
                'img' => 'dr2.png',
                'name' => 'Dr.Moutaz Hasem',
                'speciality' => 'Dermatalogist',
                'date' => '21/01/2022',
                'local' => 'LA.california,UA',
                'type' => 'Hospital Visit',
            ),
            array(
                'img' => 'dr3.png',
                'name' => 'Dr.Manal Khalied',
                'speciality' => 'Cardiologist',
                'date' => '21/1/2022',
                'local' => 'Jeddah.Saudi Arabia',
                'type' => 'Hospital Visit',
            ),
        ),
    );
?>
    <div class="container">
        <div class="_main">
            <div class="leftSide"></div>
            <div class="top-info row">

                <div class="col-lg-auto">
                    <img src="./images/dr.png" alt="" srcset="">
                </div>

                <div class="col-lg-9 col-xl-10">

                    <h3 class="ps-1 _name"><?php echo $data["info"]["name"]; ?></h3>

                    <div class="row justify-content-md-start ps-3 d-flex">
                        <div class="col col-md-12 col-lg-6 col-xl-7 row">
                            <div class="col-sm-12 col-lg-5">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-12 col-lg-5 col-form-label">Patient_ID:</label>
                                    <div class="col-sm-12 col-lg-7">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data["info"]["patient_id"]; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <label for="staticEmail" class="col-sm-12 col-lg-5 col-form-label">Address:</label>
                                <div class="col-sm-12 col-lg-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data["info"]["address"]; ?>">
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <label for="staticEmail" class="col-sm-12 col-lg-5 col-form-label">DateOfBirth:</label>
                                <div class="col-sm-12 col-lg-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data["info"]["birhtdate"]; ?>">
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                            <div class="row">
                                <label for="staticEmail" class="col-sm-12 col-lg-5 col-form-label">Contact:</label>
                                <div class="col-sm-12 col-lg-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $data["info"]["contact"]; ?>">
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-5 col-xl-5 _more">
                            <div class="row">
                                <label for="staticEmail" class="col-sm-5 col-form-label">Allergies:</label>
                                <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Milk">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-5 col-form-label">Blood Type:</label>
                                <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="B-">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-5 col-form-label">Chronic diseases:</label>
                                <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="cancer, diabetes">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_filters">
                <table class="tb tb1 w-100 mb-1" style="max-width: 1250px;">
                    <tr>
                        <td>Medical History</td>
                        <td>
                            <div class="row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Sort by type</label>
                                <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example" style="max-width: 250px;">
                                        <option selected>Choose a type</option>
                                        <option value="1">Consulation</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Sort by Year</label>
                                <div class="col-sm-9">
                                    <select class="form-select " aria-label="Default select example" style="max-width: 250px;">
                                        <option selected>Choose a year</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>         
            <?php foreach ($data['histories'] as $i => $history) { ?>
            <div class="_history _i_<?php echo $i; ?> row">
                <div class="col-lg-auto d-flex">
                    <img src="./images/<?php echo $history['img']; ?>" alt="" srcset="">
                </div>
                <table class="tb tb2 col-lg-8" style="max-width: 1250px;min-width: 500px;">
                    <tr>
                        <td><?php echo $history['name']; ?></td>
                        <td class="_td"><?php echo $history['speciality']; ?></td>
                        <td class="_td"><?php echo $history['date']; ?></td>
                        <td class="_td"><?php echo $history['local']; ?></td>
                        <td class="_td"><?php echo $history['type']; ?></td>
                    </tr>
                </table>
            </div>
            <?php } ?>

            <div class="_details p-2">
                <div class="row row-cols-3">
                    <div class="col">
                        <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                    </div>
                    <div class="col">
                        <div class="_col">
                            <table class="tb tb3 mt-4">
                                <tr>
                                    <th colspan="2" class="_td2"> hereditary diseases</th>
                                </tr>
                                <tr>
                                    <td class="_td3">Diabetes</td>
                                    <td class="_td4">Carrier </td>
                                </tr>
                                <tr>
                                    <td class="_td3">chrons</td>
                                    <td class="_td4">Silent carrier</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <p class="p-1">
                            <h4 class="_td2">Symptoms</h4>
                            
                            Fever or chills, Cough, Shortness of breath or difficulty breathing <br>
                            Fatigue,Muscle or body aches
                        </p>
                    </div>
                    <div class="col pt-4">
                        <div class="_col prescription"></div>
                    </div>
                    <div class="col pt-4">
                        <div class="_col">
                            <table class="tb tb4 mt-3">
                                <tr><th colspan="3" class="_td2">Vital Signs</th></tr>
                                <tr>
                                    <td>
                                        <span>Heart Rate</span>
                                        <span class="sign-result">above the norm</span>
                                        <span>102</span>
                                        <span>Beats per min</span>
                                    </td>
                                    <td>
                                        <span>Blood Pressure</span>
                                        <span class="sign-result">In the norm</span>
                                        <span>120/89</span>
                                        <span>mm/Hg</span>
                                    </td>
                                    <td>
                                        <span>Glucose</span>
                                        <span class="sign-result">In the norm</span>
                                        <span>97</span>
                                        <span>mg/dl</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col pt-4">
                        <p class="p-1">
                            <h4 class="_td2">Diagnosis </h4>
                            
                            The most common symptom of cheast pain is angina. Angina can be described as a
                            discomfort, heaviness, pressure, aching, burning, fullness, squeezing, or painful
                            feeling in your chest. It can be mistaken for indigestion or heartburn.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <script>
        window.onload = function () {
        
        //Better to construct options first and then pass it as a parameter
        var options = {
            animationEnabled: true,
            title: {
                text: "potential diseases",                
                fontColor: "Peru"
            },	
            axisY: {
                tickThickness: 0,
                lineThickness: 0,
                valueFormatString: " ",
                includeZero: true,
                gridThickness: 0                    
            },
            axisX: {
                tickThickness: 0,
                lineThickness: 0,
                labelFontSize: 12,
                labelFontColor: "Peru"				
            },
            data: [{
                indexLabelFontSize: 18,
                toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                indexLabelFontWeight: 600,
                indexLabelFontFamily: "Verdana",
                color: "#62C9C3",
                type: "bar",
                dataPoints: [
                    { y: 75, label: "75%", indexLabel: "Heart Attack " },
                    { y: 45, label: "45%", indexLabel: "chrons " },
                    { y: 90, label: "90%", indexLabel: "Multiple sclerosis " }
                ]
            }]
        };
        
        $("#chartContainer").CanvasJSChart(options);
        }
        </script>
</body>
</html>