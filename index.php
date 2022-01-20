<?php include('header.php'); ?>
<!-- Movie details  -->

<!-- Movie One  -->
<?php
include('connection.php');

$sql = "SELECT * FROM changemovie WHERE screencode=1";
$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_array($result, MYSQLI_ASSOC);

$one_title = $car['title'];
$one_poster = $car['poster'];

//  Movie Two 

$sql = "SELECT * FROM changemovie WHERE screencode=2";
$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_array($result, MYSQLI_ASSOC);

$two_title = $car['title'];
$two_poster = $car['poster'];


// Movie Three 

$sql = "SELECT * FROM changemovie WHERE screencode=3";
$result = mysqli_query($conn, $sql);
$car = mysqli_fetch_array($result, MYSQLI_ASSOC);
$three_title = $car['title'];
$three_poster = $car['poster'];
?>


<!-- setScreenCode  -->
<?php


if (isset($_POST['setScreenCode'])) {
    $_SESSION['screen'] = $_POST['setScreenCode'];
    $_SESSION['show'] = $_POST['radioShowCode'];
    header('Location:select_seat.php');
}

?>


<?php

$welcomeName = '';
if (isset($_SESSION['user'])) {

    $welcomeName = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html>



<title>Home</title>

<body style="font-family: 'Jost', sans-serif;">

    <div class="text-center wel">
        <h2 style="text-align: center; font-size: 30px; color: white;">Welcome <?php echo $welcomeName; ?> To ABC Cinemas</h2>
        <medium style="color: white;">WE ARE MOVIE BUFFS</medium>

    </div>


    <!--Movie Posters-->
    <div class="container">

        <div class="row">
            <!--Screen A-->
            <div class="col-md-4">

                <div class="poster_container text-center">
                    <h5>Screen A</h5x>
                        <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">

                            <img src="<?php echo $one_poster; ?>">

                            <div class="book">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_a">Book</button>

                            </div>
                        </div>
                        <h3><?php echo $one_title; ?></h3>
                </div>

            </div>

            <!--Screen B-->
            <div class="col-md-4">
                <div class="poster_container text-center">
                    <h5>Screen B</h5>
                    <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">

                        <img src="<?php echo $two_poster; ?>">

                        <div class="book">
                            <form method="POST" action="index.php">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_b">Book</button>

                            </form>
                        </div>

                    </div>
                    <h3><?php echo $two_title; ?></h3>

                </div>



                <div class="more text-left">

                    <div id="more_s_b" class="collapse more_content text-justify">
                        <p><?php echo $two_more; ?></p>
                    </div>
                </div>

            </div>
            <!--Screen C-->
            <div class="col-md-4">
                <div class="poster_container text-center">
                    <h5>Screen C</h5>
                    <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">

                        <img src="<?php echo $three_poster; ?>">

                        <div class="book">
                            <form method="POST" action="index.php">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_c">Book</button>

                            </form>
                        </div>

                    </div>
                    <h3><?php echo $three_title; ?></h3>

                </div>



                <div class="more text-left">

                    <div id="more_s_c" class="collapse more_content text-justify">
                        <p><?php echo $three_more; ?></p>
                    </div>
                </div>



            </div>

        </div>

    </div>

    <!-- Show Time Screen A -->
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="showtime_a">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Select Showtime</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="index.php" id="showcode_a_form">
                            <table>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="setScreenCode" value="1"></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input form="showcode_a_form" type="submit" class="btn btn-outline-success"></button>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Show Time Screen B  -->
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="showtime_b">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Select Showtime</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="index.php" id="showcode_b_form">
                            <table>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="setScreenCode" value="2"></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input form="showcode_b_form" type="submit" class="btn btn-outline-success"></button>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Show Time Screen C  -->
    <div class="container">
        <!-- The Modal -->
        <div class="modal fade" id="showtime_c">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Select Showtime</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="index.php" id="showcode_c_form">
                            <table>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="setScreenCode" value="3"></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input form="showcode_c_form" type="submit" class="btn btn-outline-success"></button>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php') ?>
</body>



</html>